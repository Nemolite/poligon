<?php
//phpinfo();
define('__ROOT__',$_SERVER['DOCUMENT_ROOT']); 

require_once(__ROOT__.'/Test.php'); 
require_once(__ROOT__.'/stat.php'); 

$obj = new Test; 
$obj->set(20);
$obj->show();
//var_dump(parse_url($url));


$message = 'hello';

// Без "use"
$example = function () {
    var_dump($message);
};
echo "<br>";
$example();
echo "<br>";



// Наследуем $message
$example = function () use ($message) {
    var_dump($message);
};
$example();
echo "<br>";
// Значение унаследованной переменной задано там, где функция определена, 
// но не там, где вызвана
$message = 'world';
$example();
echo "<br>";
// Сбросим message
$message = 'hello';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
$example();
echo "<br>";
// Измененное в родительской области видимости значение
// остается тем же внутри вызова функции
$message = 'world';
echo $example();

// Замыкания могут принимать обычные аргументы
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");
echo "<br>";
?>



