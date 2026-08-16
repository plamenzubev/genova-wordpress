<?php
/**
 * Static content + image data for the Osteria Nova demo theme.
 * Mirrors src/lib/content.ts and src/lib/images.ts from the React version
 * so both portfolio pieces stay in sync.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function osteria_nova_unsplash( string $id, int $w, int $q = 75 ): string {
	return "https://images.unsplash.com/photo-{$id}?auto=format&fit=crop&w={$w}&q={$q}";
}

function osteria_nova_avatar( int $n ): string {
	return "https://i.pravatar.cc/150?img={$n}";
}

function osteria_nova_images(): array {
	static $images = null;

	if ( null !== $images ) {
		return $images;
	}

	$images = array(
		'hero'           => osteria_nova_unsplash( '1414235077428-338989a2e8c0', 1920 ),
		'about_interior' => osteria_nova_unsplash( '1550966871-3ed3cdb5ed0c', 900 ),
		'about_accent'   => osteria_nova_unsplash( '1533777857889-4be7c70b33f7', 700 ),
		'menu'           => array(
			osteria_nova_unsplash( '1476224203421-9ac39bcb3327', 640 ),
			osteria_nova_unsplash( '1467003909585-2f8a72700288', 640 ),
			osteria_nova_unsplash( '1512621776951-a57141f2eefd', 640 ),
			osteria_nova_unsplash( '1551183053-bf91a1d81141', 640 ),
			osteria_nova_unsplash( '1571997478779-2adcbbe9ab2f', 640 ),
			osteria_nova_unsplash( '1595295333158-4742f28fbd85', 640 ),
		),
		'gallery'        => array(
			osteria_nova_unsplash( '1555396273-367ea4eb4db5', 800 ),
			osteria_nova_unsplash( '1552566626-52f8b828add9', 800 ),
			osteria_nova_unsplash( '1481833761820-0509d3217039', 800 ),
			osteria_nova_unsplash( '1517248135467-4c7edcad34c4', 800 ),
			osteria_nova_unsplash( '1560624052-449f5ddf0c31', 800 ),
			osteria_nova_unsplash( '1592861956120-e524fc739696', 800 ),
		),
	);

	return $images;
}

function osteria_nova_menu_categories(): array {
	$images = osteria_nova_images()['menu'];

	return array(
		array(
			'id'    => 'starters',
			'label' => 'Предястия',
			'items' => array(
				array(
					'name'        => 'Брускета Класика',
					'description' => 'Препечен селски хляб, доматени сърца, чесън и пресен босилек',
					'price'       => '9.90',
					'image'       => $images[0],
				),
				array(
					'name'        => 'Карпачо от телешко',
					'description' => 'Тънки резени телешко, пармезан, рукола и трюфелово масло',
					'price'       => '16.50',
					'image'       => $images[1],
				),
				array(
					'name'        => 'Бурата с доматени сърца',
					'description' => 'Кремообразна бурата, печени чери домати, песто от босилек',
					'price'       => '14.90',
					'image'       => $images[2],
				),
			),
		),
		array(
			'id'    => 'mains',
			'label' => 'Основни ястия',
			'items' => array(
				array(
					'name'        => 'Талиателе с трюфели',
					'description' => 'Домашно приготвена паста, крем сос с черни трюфели и пармезан',
					'price'       => '22.90',
					'image'       => $images[3],
				),
				array(
					'name'        => 'Пица Маргерита Нова',
					'description' => 'Печена на дърва, биволска моцарела, San Marzano домати, босилек',
					'price'       => '15.90',
					'image'       => $images[4],
				),
				array(
					'name'        => 'Ризото ал тартуфо',
					'description' => 'Ризото Карнароли, горски гъби, трюфелено масло и пекорино',
					'price'       => '19.90',
					'image'       => $images[5],
				),
			),
		),
		array(
			'id'    => 'desserts',
			'label' => 'Десерти',
			'items' => array(
				array(
					'name'        => 'Тирамису Нова',
					'description' => 'Класическа рецепта с маскарпоне, еспресо и какао',
					'price'       => '8.90',
					'image'       => $images[1],
				),
				array(
					'name'        => 'Панакота с горски плодове',
					'description' => 'Ванилова панакота, компот от сезонни горски плодове',
					'price'       => '7.90',
					'image'       => $images[2],
				),
				array(
					'name'        => 'Канолѝ Сицилиано',
					'description' => 'Хрупкави тръбички с рикота, шоколад и захаросани портокали',
					'price'       => '8.50',
					'image'       => $images[0],
				),
			),
		),
	);
}

function osteria_nova_testimonials(): array {
	return array(
		array(
			'name'   => 'Мария Христова',
			'role'   => 'Гостуваща от 2021 г.',
			'quote'  => 'Всяко ястие е като кратко пътуване до Италия. Атмосферата, обслужването и вкусът са на съвсем друго ниво.',
			'avatar' => osteria_nova_avatar( 32 ),
			'rating' => 5,
		),
		array(
			'name'   => 'Георги Петров',
			'role'   => 'Редовен клиент',
			'quote'  => 'Тирамисуто е най-доброто, което съм опитвал извън Италия. Резервирам маса поне веднъж месечно за екипни вечери.',
			'avatar' => osteria_nova_avatar( 14 ),
			'rating' => 5,
		),
		array(
			'name'   => 'Ивана Тодорова',
			'role'   => 'Отпразнува рожден ден тук',
			'quote'  => 'Прекрасна атмосфера, внимателен персонал и меню, което наистина впечатлява. Ще се върнем отново!',
			'avatar' => osteria_nova_avatar( 47 ),
			'rating' => 5,
		),
	);
}

function osteria_nova_stats(): array {
	return array(
		array(
			'value' => '2010',
			'label' => 'Година на основаване',
		),
		array(
			'value' => '4.9',
			'label' => 'Средна оценка',
		),
		array(
			'value' => '120+',
			'label' => 'Ястия в менюто',
		),
		array(
			'value' => '30k+',
			'label' => 'Доволни гости',
		),
	);
}

function osteria_nova_highlights(): array {
	return array(
		array(
			'title'       => 'Пресни, локални съставки',
			'description' => 'Работим директно с местни производители за най-доброто качество всеки ден.',
		),
		array(
			'title'       => 'Рецепти от поколения',
			'description' => 'Автентични италиански рецепти, предавани в семейството на нашия главен готвач.',
		),
		array(
			'title'       => 'Атмосфера като в Италия',
			'description' => 'Топло, уютно пространство, създадено да пренесе гостите ни направо в Тоскана.',
		),
	);
}

function osteria_nova_opening_hours(): array {
	return array(
		array(
			'day'   => 'Понеделник – Четвъртък',
			'hours' => '11:00 – 22:30',
		),
		array(
			'day'   => 'Петък – Събота',
			'hours' => '11:00 – 23:30',
		),
		array(
			'day'   => 'Неделя',
			'hours' => '12:00 – 22:00',
		),
	);
}
