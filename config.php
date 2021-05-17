<?php
global $config;
$config = new Config();
class Config {public function __construct() {
  // Подключение к СУБД MySQL
  $this->dbHost = "";
  $this->dbName = "";
  $this->dbUser = "";
  $this->dbPassword = "";

  // Таблица городов, телефонов и доменных префиксов
  $this->cities = [
    1 => ['Москва', '88005555535', 'msk'],
    2 => ['Люберцы', '88005555535', 'lub'],
    3 => ['Раменское', '88005555535', 'ramenskoe'],
    4 => ['Жуковский', '88005555535', 'zhukovsky'],
    5 => ['Воскресенск', '88005555535', 'vsk'],
    6 => ['Бронницы', '88005555535', 'bronnitsy'],
    7 => ['Ступино', '88005555535', 'stupino'],
    8 => ['Коломна', '88005555535', 'kolomna'],

  ];

  // Таблица внутренних артикулов товаров
  $this->products = [
    // Если правильно тебя понял
    // Физ.лица
    1 => ['Поддерживающая уборка', 'b2c-podClean'],
    2 => ['Генеральная уборка', 'b2c-genClean'],
    3 => ['Уборка после ремонта', 'b2c-remClean'],
    4 => ['Уборка запущенных квартир', 'b2c-dirtClean'],
    5 => ['Антибактериальная уборка', 'b2c-antibClean'],
    6 => ['Влажная уборка', 'b2c-wetClean'],
    7 => ['Эко уборка', 'b2c-ecoClean'],
    8 => ['Уборка коттеджа', 'b2c-cotClean'],
    9 => ['Химчистка мягкой мебели', 'b2c-furnitClean'],
    10 => ['Химчистка ковролина', 'b2c-covrClean'],
    11 => ['Химчистка ковра', 'b2c-covClean'],
    12 => ['Химчистка штор', 'b2c-shtorClean'],
    13 => ['Глажка белья', 'b2c-ironClean'],
    14 => ['Мытье окон', 'b2c-windClean'],
      // Юр.лица тут калькулятора не будет(пока)
    100 => ['Генеральная уборка', 'b2b-genClean'],
    101 => ['Уборка после ремонта', 'b2b-remClean'],
    102 => ['Уборка после строительства', 'b2b-genClean'],
    103 => ['Уборка  офисов', 'b2b-officeClean'],
    104 => ['Уборка производственных помещений', 'b2b-proizClean'],
    105 => ['Уборка торговых центров', 'b2b-tcClean'],
    106 => ['Уборка кафе и ресторанов', 'b2b-cafeClean'],
    107 => ['Уборка подъездов', 'b2b-podClean'],
    108 => ['Уборка территорий', 'b2b-terClean'],
    109 => ['Уборка школ', 'b2b-schoolClean'],
    110 => ['Уборка спортзала и фитнес клуба', 'b2b-sportClean'],
    111 => ['Уборка на мероприятии', 'b2b-merClean'],
    112 => ['Уборка медицинских центров', 'b2b-medClean'],
    113 => ['Уборка автосервисов', 'b2b-autoserClean'],
    114 => ['Уборка парковок и паркингов', 'b2b-parkinClean'],
    115 => ['Уборка складов', 'b2b-scladClean'],
    116 => ['Уборка салонов красоты', 'b2b-salonClean'],
    //----------------------------------------------------
    // Физ.лица
    1 => 'Поддерживающая уборка',
    2 => 'Генеральная уборка',
    3 => 'Уборка после ремонта',
    4 => 'Уборка запущенных квартир',
    5 => 'Антибактериальная уборка',
    6 => 'Влажная уборка',
    7 => 'Эко уборка',
    8 => 'Уборка коттеджа',
    9 => 'Химчистка мягкой мебели',
    10 => 'Химчистка ковролина',
    11 => 'Химчистка ковра',
    12 => 'Химчистка штор',
    13 => 'Глажка белья',
    14 => 'Мытье окон',
      // Юр.лица тут калькулятора не будет(пока)
    100 => 'Генеральная уборка',
    101 => 'Уборка после ремонта',
    102 => 'Уборка после строительства',
    103 => 'Уборка  офисов',
    104 => 'Уборка производственных  помещений',
    105 => 'Уборка торговых центров',
    106 => 'Уборка кафе и ресторанов',
    107 => 'Уборка подъездов',
    108 => 'Уборка территорий',
    109 => 'Уборка школ',
    110 => 'Уборка спортзала и фитнес клуба',
    111 => 'Уборка на мероприятии',
    112 => 'Уборка медицинских центров',
    113 => 'Уборка автосервисов',
    114 => 'Уборка парковок и паркингов',
    115 => 'Уборка складов',
    116 => 'Уборка салонов красоты',

  ];
}}
