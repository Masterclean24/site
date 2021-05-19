<?php
require('config.php');

// Определение документа
function getRoute() {
  global $config;

  // Работа с доменами
  $dns = explode('.', $_SERVER['HTTP_HOST']);
  if (count($dns) < 2) return ['503'];
  if (count($dns) > 3) return ['503'];
  if (count($dns) == 2) $reg = 'msk'; // masterclean24.ru
  else { // city.masterclean24.ru
    $f = false;
    foreach ($config->cities as $key => $value) {
      if ($config->cities[$key][2] == $dns[0]) {
       $f = true;
       $reg = $dns[0];
       break;
      }
    }
    if (!$f) return ['404']; // Нет такого региона
  }

  // Работа с путями
  $fol = explode('/', $_SERVER['REQUEST_URI']);
  if (count($fol) == 2) {
    if ($fol[1] == '') return ['index', $reg];
    return ['404']; // Пока нет страниц cite.ru/ *
  }

  array_shift($fol);
  if ($fol[0] == 'uslugi') {
    foreach ($config->products as $key => $value)
      if ($config->products[$key][2].'.html' == $fol[1])
        return ['uslugi', $config->products[$key][1]];
    return ['404']; // Нет такой услуги
  }
  return ['404']; // Нет такого раздела
}

// Сборка документа
$route = getRoute();
require('templates/mainHeader.php');
switch ($route[0]) {
    case 'index':
      require('templates/indexHeader.php');
      require('indexes/'.$route[1].'.php');
      require('templates/indexFooter.php');
      break;
    case 'uslugi':
      require('templates/goodsHeader.php');
      require('goods/'.$route[1].'.php');
      require('templates/goodsFooter.php');
      break;
    case '404':
      echo '404';
      break;
    case '503':
      echo '503';
      break;
}
require('templates/mainFooter.php');
