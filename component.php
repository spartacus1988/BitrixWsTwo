<?php
// Подключаем код NuSOAP
require_once('nusoap.php');
// Создаем экземпляр сервера
$server = new soap_server;
// Регистрируем предоставляемый метод
$server->register('hello');
// Определяем метод как функцию PHP
function hello($name) {
    return 'Hello, ' . $name;
}
// Используем HTTP-запрос чтобы вызвать сервис.
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA) ;
?>