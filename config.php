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
    // Физ.лица
    1 => ['Поддерживающая уборка', 'b2c-pod', 'podderj-uborka'],
    2 => ['Генеральная уборка', 'b2c-gen', 'generalnaya-uborka'],
    3 => ['Уборка после ремонта', 'b2c-rem', 'uborka-posle-remonta'],
    4 => ['Уборка запущенных квартир', 'b2c-dirt', 'uborka-zapushhennyix-kvartir'],
    5 => ['Антибактериальная уборка', 'b2c-antib', 'antibakterialnaya-uborka-kvartiry'],
    6 => ['Влажная уборка', 'b2c-wet', 'vlazhnaya-uborka-kvartiry'],
    7 => ['Эко уборка', 'b2c-eco', 'eko-uborka'],
    8 => ['Уборка коттеджа', 'b2c-cot', 'uborka-kottedzha'],
    9 => ['Химчистка мягкой мебели', 'b2c-furnit', 'himchistka-myagkoy-mebeli'],
    10 => ['Химчистка ковролина', 'b2c-covr', 'himchistka-kovrolina'],
    11 => ['Химчистка ковра', 'b2c-cov', 'himchistka-kovra'],
    12 => ['Химчистка штор', 'b2c-shtor', 'himchistka-shtor'],
    13 => ['Глажка белья', 'b2c-iron', 'glazhka-belya'],
    14 => ['Мытье окон', 'b2c-wind', 'mojka-okon'],
      // Юр.лица тут калькулятора не будет(пока)
    15 => ['Генеральная уборка', 'b2b-gen', 'biz-generalnaya-uborka'],
    16 => ['Уборка после ремонта', 'b2b-rem', 'biz-uborka-posle-remonta'],
    17 => ['Уборка после строительства', 'b2b-stroy', 'uborka-posle-stroy'],
    18 => ['Уборка  офисов', 'b2b-office', 'uborka-ofisov'],
    19 => ['Уборка производственных помещений', 'b2b-proiz', 'uborka-proizvodstvennyh-pomeschenij'],
    20 => ['Уборка торговых центров', 'b2b-tc', 'uborka-torgovykh-tsentrov'],
    21 => ['Уборка кафе и ресторанов', 'b2b-cafe', 'uborka-kafe-i-restoranov'],
    22 => ['Уборка подъездов', 'b2b-pod', 'uborka-podezdov'],
    23 => ['Уборка территорий', 'b2b-ter', 'biz-uborka-territorij'],
    24 => ['Уборка школ', 'b2b-school', 'uborka-shkol'],
    25 => ['Уборка спортзала и фитнес клуба', 'b2b-sport', 'uborka-fitnes-klubov'],
    26 => ['Уборка на мероприятии', 'b2b-mer', 'uborka-na-meropriyatiyah'],
    27 => ['Уборка медицинских центров', 'b2b-med', 'uborka-mediczinskix-czentrov'],
    28 => ['Уборка автосервисов', 'b2b-autoser', 'uborka-avtoservisov'],
    29 => ['Уборка парковок и паркингов', 'b2b-parkin', 'uborka-parkingov'],
    30 => ['Уборка складов', 'b2b-sclad', 'uborka-skladov'],
    31 => ['Уборка салонов красоты', 'b2b-salon', 'uborka-salonov-krasoty'],
    //----------------------------------------------------
    
  ];
}}
