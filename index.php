<?php
	$ingrList = array(				// All ingrs
		"a" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Чешуйка Гремлина",
				"magic" => 50,
				"phys" => 50,
				"holy" => 0,
				"def" => 60,
				"atc" => 40
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка из чешуйки гремлина",
				"magic" => 50,
				"phys" => 50,
				"holy" => 20,
				"def" => 40,
				"atc" => 40
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Толчёная чешуйка гремлина",
				"magic" => 50,
				"phys" => 50,
				"holy" => 0,
				"def" => 65,
				"atc" => 35
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из чешуйки гремлина",
				"magic" => 50,
				"phys" => 50,
				"holy" => 0,
				"def" => 70,
				"atc" => 30
			)
		),
		"b" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Мэрисьюшкина слеза",
				"magic" => 70,
				"phys" => 30,
				"holy" => 30,
				"def" => 30,
				"atc" => 40
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Насточка из мэрисьюшкиных слёзок",
				"magic" => 70,
				"phys" => 30,
				"holy" => 20,
				"def" => 40,
				"atc" => 40
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => false
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Концентрированные мэрисьюшкины слёзы",
				"magic" => 50,
				"phys" => 50,
				"holy" => 0,
				"def" => 30,
				"atc" => 70
			)
		),
		"c" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "ГМские нервы",
				"magic" => 30,
				"phys" => 70,
				"holy" => 30,
				"def" => 30,
				"atc" => 40
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => false
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Стружка из ГМских нервов",
				"magic" => 25,
				"phys" => 75,
				"holy" => 25,
				"def" => 25,
				"atc" => 50
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из ГМских нервов",
				"magic" => 20,
				"phys" => 80,
				"holy" => 20,
				"def" => 20,
				"atc" => 60
			)
		),
		"d" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Сборник правил форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 40,
				"def" => 40,
				"atc" => 20
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка на сборнике правил форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 35,
				"def" => 35,
				"atc" => 30
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Прах правил форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 45,
				"def" => 45,
				"atc" => 10
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из сборника правил форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 50,
				"def" => 50,
				"atc" => 0
			)
		),
		"e" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Матчасть форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 30,
				"def" => 40,
				"atc" => 30
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настоенная матчасть форума",
				"magic" => 50,
				"phys" => 50,
				"holy" => 25,
				"def" => 50,
				"atc" => 25
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Пыль из форумной матчасти",
				"magic" => 50,
				"phys" => 50,
				"holy" => 33,
				"def" => 34,
				"atc" => 33
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Выжимка из форумной матчасти",
				"magic" => 50,
				"phys" => 50,
				"holy" => 20,
				"def" => 60,
				"atc" => 20
			)
		),
		"f" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Список долгов",
				"magic" => 40,
				"phys" => 60,
				"holy" => 60,
				"def" => 20,
				"atc" => 20
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка на списке долгов",
				"magic" => 45,
				"phys" => 55,
				"holy" => 40,
				"def" => 30,
				"atc" => 30
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Дроблёный список долгов",
				"magic" => 45,
				"phys" => 55,
				"holy" => 30,
				"def" => 30,
				"atc" => 40
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из списка долгов",
				"magic" => 30,
				"phys" => 70,
				"holy" => 70,
				"def" => 15,
				"atc" => 15
			)
		),
		"g" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Кровохлёбка",
				"magic" => 20,
				"phys" => 80,
				"holy" => 30,
				"def" => 20,
				"atc" => 50
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка из кровохлёбки",
				"magic" => 30,
				"phys" => 70,
				"holy" => 40,
				"def" => 20,
				"atc" => 40
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Толчёный корень кровохлёбки",
				"magic" => 25,
				"phys" => 75,
				"holy" => 20,
				"def" => 20,
				"atc" => 60
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из кровохлёбки",
				"magic" => 10,
				"phys" => 90,
				"holy" => 20,
				"def" => 10,
				"atc" => 70
			)
		),
		"h" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Заговорная трава",
				"magic" => 80,
				"phys" => 20,
				"holy" => 40,
				"def" => 40,
				"atc" => 20
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка из заговорной травы",
				"magic" => 70,
				"phys" => 30,
				"holy" => 50,
				"def" => 35,
				"atc" => 15
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Растёртый сушёный стебель заговорной травы",
				"magic" => 75,
				"phys" => 25,
				"holy" => 35,
				"def" => 50,
				"atc" => 15
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Концентрат из заговорной травы",
				"magic" => 90,
				"phys" => 10,
				"holy" => 50,
				"def" => 50,
				"atc" => 0
			)
		),
		"i" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Роса росянки",
				"magic" => 70,
				"phys" => 30,
				"holy" => 10,
				"def" => 40,
				"atc" => 50
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настоенная роса росянки",
				"magic" => 70,
				"phys" => 30,
				"holy" => 5,
				"def" => 35,
				"atc" => 60
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => false
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Концентрированная роса росянки",
				"magic" => 80,
				"phys" => 20,
				"holy" => 0,
				"def" => 30,
				"atc" => 70
			)
		),
		"j" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Лаковица Аметистовая",
				"magic" => 70,
				"phys" => 30,
				"holy" => 10,
				"def" => 30,
				"atc" => 60
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка из Лавовицы Аметистовой",
				"magic" => 60,
				"phys" => 40,
				"holy" => 25,
				"def" => 25,
				"atc" => 50
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Порошок из Лаковицы Аметистовой",
				"magic" => 70,
				"phys" => 30,
				"holy" => 10,
				"def" => 30,
				"atc" => 60
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из Аметистовой Лаковицы",
				"magic" => 80,
				"phys" => 20,
				"holy" => 10,
				"def" => 20,
				"atc" => 70
			)
		),
		"k" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Щитолистник",
				"magic" => 50,
				"phys" => 50,
				"holy" => 15,
				"def" => 80,
				"atc" => 5
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Настойка из щитолистника",
				"magic" => 60,
				"phys" => 40,
				"holy" => 20,
				"def" => 70,
				"atc" => 10
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Толчёный щитолистник",
				"magic" => 40,
				"phys" => 60,
				"holy" => 15,
				"def" => 70,
				"atc" => 15
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Вытяжка из щитолистника",
				"magic" => 50,
				"phys" => 50,
				"holy" => 10,
				"def" => 85,
				"atc" => 0
			)
		),
		"l" => array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
			"base" => array(					// СЫРОЙ
				"isOk" => true,
				"name" => "Хмель",
				"magic" => 30,
				"phys" => 70,
				"holy" => 10,
				"def" => 40,
				"atc" => 50
			),
			"type1" => array(					// НАСТОЙКА
				"isOk" => true,
				"name" => "Хмельная настойка",
				"magic" => 30,
				"phys" => 70,
				"holy" => 5,
				"def" => 45,
				"atc" => 50
			),
			"type2" => array(					// ПОРОШОК
				"isOk" => true,
				"name" => "Перетёртый хмель",
				"magic" => 40,
				"phys" => 60,
				"holy" => 25,
				"def" => 35,
				"atc" => 40
			),
			"type3" => array(					// ВЫТЯЖКА
				"isOk" => true,
				"name" => "Концентрированный хмель",
				"magic" => 20,
				"phys" => 80,
				"holy" => 5,
				"def" => 35,
				"atc" => 60
			)
		),
	
	);
?>
