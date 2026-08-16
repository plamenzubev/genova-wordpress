(function () {
	"use strict";

	/* Sticky header background on scroll */
	var header = document.getElementById( "site-header" );
	var mobileNav = document.getElementById( "mobile-nav" );
	var navToggle = document.getElementById( "nav-toggle" );
	var iconMenu = document.getElementById( "icon-menu" );
	var iconClose = document.getElementById( "icon-close" );

	function updateHeader() {
		var scrolled = window.scrollY > 24;
		var open = ! mobileNav.classList.contains( "hidden" );
		header.classList.toggle( "bg-espresso/95", scrolled || open );
		header.classList.toggle( "backdrop-blur", scrolled || open );
		header.classList.toggle( "shadow-lg", scrolled || open );
	}
	window.addEventListener( "scroll", updateHeader, { passive: true } );
	updateHeader();

	/* Mobile nav toggle */
	function toggleNav() {
		var isOpen = ! mobileNav.classList.contains( "hidden" );
		mobileNav.classList.toggle( "hidden" );
		iconMenu.classList.toggle( "hidden", ! isOpen );
		iconClose.classList.toggle( "hidden", isOpen );
		navToggle.setAttribute( "aria-expanded", String( ! isOpen ) );
		updateHeader();
	}
	if ( navToggle ) {
		navToggle.addEventListener( "click", toggleNav );
	}
	document.querySelectorAll( ".mobile-nav-link" ).forEach( function ( link ) {
		link.addEventListener( "click", function () {
			if ( ! mobileNav.classList.contains( "hidden" ) ) {
				toggleNav();
			}
		} );
	} );

	/* Menu category tabs */
	var tabs = document.querySelectorAll( ".menu-tab" );
	var panels = document.querySelectorAll( ".menu-panel" );
	tabs.forEach( function ( tab ) {
		tab.addEventListener( "click", function () {
			var category = tab.getAttribute( "data-category" );

			tabs.forEach( function ( t ) {
				var active = t === tab;
				t.classList.toggle( "bg-terracotta", active );
				t.classList.toggle( "text-cream", active );
				t.classList.toggle( "text-cream/65", ! active );
			} );

			panels.forEach( function ( panel ) {
				panel.classList.toggle( "hidden", panel.getAttribute( "data-panel" ) !== category );
			} );
		} );
	} );

	/* Scroll reveal */
	if ( "IntersectionObserver" in window ) {
		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						var delay = entry.target.getAttribute( "data-reveal-delay" ) || 0;
						setTimeout( function () {
							entry.target.classList.add( "is-visible" );
						}, parseInt( delay, 10 ) );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.2 }
		);
		document.querySelectorAll( "[data-reveal]" ).forEach( function ( el ) {
			observer.observe( el );
		} );
	} else {
		document.querySelectorAll( "[data-reveal]" ).forEach( function ( el ) {
			el.classList.add( "is-visible" );
		} );
	}

	/* Reservation form */
	var form = document.getElementById( "reservation-form" );
	if ( form ) {
		var successBox = document.getElementById( "reservation-success" );
		var successMessage = document.getElementById( "reservation-success-message" );
		var resetBtn = document.getElementById( "reservation-reset" );

		function setError( name, message ) {
			var field = form.querySelector( '[name="' + name + '"]' );
			if ( ! field ) {
				return;
			}
			var errorEl = field.closest( "label" ).querySelector( ".field-error" );
			field.classList.toggle( "border-terracotta", Boolean( message ) );
			field.classList.toggle( "border-cream/15", ! message );
			if ( errorEl ) {
				errorEl.textContent = message || "";
			}
		}

		function validate( data ) {
			var errors = {};
			if ( ! data.name.trim() ) {
				errors.name = "Моля, въведете име";
			}
			if ( ! /^\S+@\S+\.\S+$/.test( data.email ) ) {
				errors.email = "Невалиден имейл адрес";
			}
			if ( ! /^[+\d][\d\s]{6,}$/.test( data.phone ) ) {
				errors.phone = "Невалиден телефонен номер";
			}
			if ( ! data.date ) {
				errors.date = "Изберете дата";
			}
			if ( ! data.time ) {
				errors.time = "Изберете час";
			}
			return errors;
		}

		form.addEventListener( "submit", function ( e ) {
			e.preventDefault();

			var formData = new FormData( form );
			var data = Object.fromEntries( formData.entries() );

			[ "name", "email", "phone", "date", "time" ].forEach( function ( key ) {
				setError( key, "" );
			} );

			var errors = validate( data );
			if ( Object.keys( errors ).length > 0 ) {
				Object.keys( errors ).forEach( function ( key ) {
					setError( key, errors[ key ] );
				} );
				return;
			}

			var submitBtn = form.querySelector( 'button[type="submit"]' );
			submitBtn.disabled = true;
			submitBtn.textContent = "Изпращане...";

			var payload = new FormData();
			payload.append( "action", "osteria_nova_reservation" );
			payload.append( "nonce", window.osteriaNova ? window.osteriaNova.nonce : "" );
			Object.keys( data ).forEach( function ( key ) {
				payload.append( key, data[ key ] );
			} );

			fetch( window.osteriaNova ? window.osteriaNova.ajaxUrl : "/wp-admin/admin-ajax.php", {
				method: "POST",
				body: payload,
			} )
				.then( function ( res ) {
					return res.json();
				} )
				.then( function ( json ) {
					if ( json.success ) {
						if ( typeof window.gtag === "function" ) {
							window.gtag( "event", "reservation_submit", { guests: data.guests } );
						}
						successMessage.textContent =
							"Благодарим ви, " + data.name.split( " " )[ 0 ] + ". Ще потвърдим резервацията ви на " + data.email + " възможно най-скоро.";
						form.classList.add( "hidden" );
						successBox.classList.remove( "hidden" );
						successBox.classList.add( "flex" );
					} else if ( json.data && json.data.errors ) {
						Object.keys( json.data.errors ).forEach( function ( key ) {
							setError( key, json.data.errors[ key ] );
						} );
					}
				} )
				.catch( function () {
					alert( "Възникна грешка. Моля, опитайте отново или се обадете директно." );
				} )
				.finally( function () {
					submitBtn.disabled = false;
					submitBtn.textContent = "Изпрати заявка за резервация";
				} );
		} );

		if ( resetBtn ) {
			resetBtn.addEventListener( "click", function () {
				form.reset();
				form.classList.remove( "hidden" );
				successBox.classList.add( "hidden" );
				successBox.classList.remove( "flex" );
			} );
		}
	}
})();
