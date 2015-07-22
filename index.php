<?php

// Создали переменную $menu (он у нас ассоциативный массив)
// В качестве ключа используем названия ссылок, а в качестве значении сами ссылки
$menu = ['Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php',
    'Links' => 'links.php'];

// Через цикл foreach мы приводим ссылки в нужный вид,
// т.е. обходит все ключи и переменные, подставляя в нужное место

foreach ($menu as $item => $value) {
    echo "<a href='$value'>$item</a><br>";
}

/* В итоге получим красивое меню:
 Home
 About
 Contact
 Links
*/

?>