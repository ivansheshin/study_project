<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];
$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';
$price_list = [
    ['title' => '2014 Rossignol District Snowboard', 'category' => 'Доски и лыжи', 'price' => 10999],
    ['title' => '2DC Ply Mens 2016/2017 Snowboard', 'category' => 'Доски и лыжи', 'price' => 159999],
    ['title' => 'Крепления Union Contact Pro 2015 года размер L/XL', 'category' => 'Крепления', 'price' => 8000],
    ['title' => 'Ботинки для сноуборда DC Mutiny Charocal', 'category' => 'Ботинки', 'price' => 10999],
    ['title' => 'Куртка для сноуборда DC Mutiny Charocal', 'category' => 'Одежда', 'price' => 7500],
    ['title' => 'Маска Oakley Canopy', 'category' => 'Разное', 'price' => 5400],
];
