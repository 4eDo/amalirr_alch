<?php
	header('Content-Type: text/html; charset=utf-8');
	$ingrList = array(				// All ingrs
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		array(						// Ingr type [base - сырой, 1 - настойка, 2 - порошок, 3 - вытяжка]
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
		)
	);
	
	$template = '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta charset="utf-8"><link rel="stylesheet" type="text/css" href="https://4edo.github.io/amalirr_alch/style.css" media="screen" /><script type="text/javascript" src="https://4edo.github.io/amalirr_alch/script.js"></script></head>';
	for($i = 0; $i < count($ingrList); $i++) {
		$template .= '<div class="ingr_items"><div class="r_buttons"><div id="'.$i.'-base-but" onclick="showMe('.$i.', \'base\')"><div id="'.$i.'-base-but-bg" class="r_button"></div><span class="r_button_text">Сырой</span></div>';
		if($ingrList[$i]['type1']['isOk']) {
			$template .= '<div id="'.$i.'-type1-but" onclick="showMe('.$i.', \'type1\')"><div id="'.$i.'-type1-but-bg" class="r_button"></div><span class="r_button_text">Настойка</span></div>';
		} else {
			$template .= '<div id="'.$i.'-type1-but" title="Такого ингредиента не существует!"><div id="'.$i.'-type1-but-bg" class="r_button bad_button"></div><span class="r_button_text">Настойка</span></div>';
		}
		if($ingrList[$i]['type2']['isOk']) {
			$template .= '<div id="'.$i.'-type2-but" onclick="showMe('.$i.', \'type2\')"><div id="'.$i.'-type2-but-bg" class="r_button"></div><span class="r_button_text">Сушёный</span></div>';
		} else {
			$template .= '<div id="'.$i.'-type2-but" title="Такого ингредиента не существует!"><div id="'.$i.'-type2-but-bg" class="r_button bad_button"></div><span class="r_button_text">Сушёный</span></div>';
		}
		$template .= '<div id="'.$i.'-type3-but" onclick="showMe('.$i.', \'type3\')"><div id="'.$i.'-type3-but-bg" class="r_button"></div><span class="r_button_text">Вытяжка</span></div>';
		
		$template .= '<div class="ingr_item" id="'.$i.'-base" style="display:block;"><h4>'.$ingrList[$i]['base']['name'].'</h4><div class="col_l"><img src=""></div>';
		$template .= '<div class="col_r"><div class="ingr_params"><span class="before_bar">Маг &nbsp;</span><div class="bar magic" title="Магическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['base']['magic'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Физ &nbsp;</span><div class="bar phys" title="Физическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['base']['phys'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Свят &nbsp;</span><div class="bar holy" title="Святость"><span class="bg" style="width:'.$ingrList[$i]['base']['holy'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Защ &nbsp;</span><div class="bar def" title="Защита"><span class="bg" style="width:'.$ingrList[$i]['base']['def'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Атк &nbsp;</span><div class="bar atc" title="Атака"><span class="bg" style="width:'.$ingrList[$i]['base']['atc'].'%">&nbsp;</span></div></div></div>';
		$template .= '<div class="bottom_buttons"><span id="'.$i.'-base-bot_but" class="bot_but" onclick="dropMe('.$i.', \'base\')">Положить в котёл</span><span id="'.$i.'-type1-bot_but" class="bot_but" onclick="transformMe('.$i.', \'type1\')">Приготовить настойку</span><span id="'.$i.'-type2-bot_but" class="bot_but" onclick="transformMe('.$i.', \'type2\')">Высушить</span><span id="'.$i.'-type3-bot_but" class="bot_but" onclick="transformMe('.$i.', \'type3\')">Получить вытяжку</span></div></div>';

		if($ingrList[$i]['type1']['isOk']) {
			$template .= '<div class="ingr_item" id="'.$i.'-type1" style="display:none;"><h4>'.$ingrList[$i]['type1']['name'].'</h4><div class="col_l"><img src=""></div>';
			$template .= '<div class="col_r"><div class="ingr_params"><span class="before_bar">Маг &nbsp;</span><div class="bar magic" title="Магическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type1']['magic'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Физ &nbsp;</span><div class="bar phys" title="Физическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type1']['phys'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Свят &nbsp;</span><div class="bar holy" title="Святость"><span class="bg" style="width:'.$ingrList[$i]['type1']['holy'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Защ &nbsp;</span><div class="bar def" title="Защита"><span class="bg" style="width:'.$ingrList[$i]['type1']['def'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Атк &nbsp;</span><div class="bar atc" title="Атака"><span class="bg" style="width:'.$ingrList[$i]['type1']['atc'].'%">&nbsp;</span></div></div></div>';
			$template .= '<div class="bottom_buttons"><span id="'.$i.'-type1-bot_but" class="bot_but" onclick="dropMe('.$i.', \'type1\')">Положить в котёл</span></div></div>';
		} else {
			$template .= '<span class="ingr_item" id="'.$i.'-type1" style="display:none;"></span>';
		}
		
		if($ingrList[$i]['type2']['isOk']) {
			$template .= '<div class="ingr_item" id="'.$i.'-type2" style="display:none;"><h4>'.$ingrList[$i]['type2']['name'].'</h4><div class="col_l"><img src=""></div>';
			$template .= '<div class="col_r"><div class="ingr_params"><span class="before_bar">Маг &nbsp;</span><div class="bar magic" title="Магическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type2']['magic'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Физ &nbsp;</span><div class="bar phys" title="Физическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type2']['phys'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Свят &nbsp;</span><div class="bar holy" title="Святость"><span class="bg" style="width:'.$ingrList[$i]['type2']['holy'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Защ &nbsp;</span><div class="bar def" title="Защита"><span class="bg" style="width:'.$ingrList[$i]['type2']['def'].'%">&nbsp;</span></div></div>';
			$template .= '<div class="ingr_params"><span class="before_bar">Атк &nbsp;</span><div class="bar atc" title="Атака"><span class="bg" style="width:'.$ingrList[$i]['type2']['atc'].'%">&nbsp;</span></div></div></div>';
			$template .= '<div class="bottom_buttons"><span id="'.$i.'-type2-bot_but" class="bot_but" onclick="dropMe('.$i.', \'type2\')">Положить в котёл</span></div></div>';
		} else {
			$template .= '<span class="ingr_item" id="'.$i.'-type2" style="display:none;"></span>';
		}
		
		$template .= '<div class="ingr_item" id="'.$i.'-type3" style="display:none;"><h4>'.$ingrList[$i]['type3']['name'].'</h4><div class="col_l"><img src=""></div>';
		$template .= '<div class="col_r"><div class="ingr_params"><span class="before_bar">Маг &nbsp;</span><div class="bar magic" title="Магическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type3']['magic'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Физ &nbsp;</span><div class="bar phys" title="Физическая составляющая"><span class="bg" style="width:'.$ingrList[$i]['type3']['phys'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Свят &nbsp;</span><div class="bar holy" title="Святость"><span class="bg" style="width:'.$ingrList[$i]['type3']['holy'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Защ &nbsp;</span><div class="bar def" title="Защита"><span class="bg" style="width:'.$ingrList[$i]['type3']['def'].'%">&nbsp;</span></div></div>';
		$template .= '<div class="ingr_params"><span class="before_bar">Атк &nbsp;</span><div class="bar atc" title="Атака"><span class="bg" style="width:'.$ingrList[$i]['type3']['atc'].'%">&nbsp;</span></div></div></div>';
		$template .= '<div class="bottom_buttons"><span id="'.$i.'-type3-bot_but" class="bot_but" onclick="dropMe('.$i.', \'type3\')">Положить в котёл</span></div></div>';
		
		$template .= '</div>';
	}
	echo $template;
?>
