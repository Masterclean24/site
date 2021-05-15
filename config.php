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

  ];

  // Таблица внутренних артикулов товаров
  $this->products = [
    1 => 'Стирка носков',
    2 => 'Чистка унитазов'
  ];
}}
