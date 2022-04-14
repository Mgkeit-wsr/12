<?php

require 'config/connect.php';

$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);
/*
#webHook
#https://api.telegram.org/bot5298202425:AAEye38TlLY89m1ynBWuX6Mtx1HY2cmf6jE/setwebhook?url=https://f784-85-249-37-205.eu.ngrok.io/index.php
*/
$first_name = $data['message']['from']['first_name'];
$id_user = $data['message']['from']['id'];
$date = time() + 604800;
$prof;
$url = $data['message']['text'];
$arr = str_split($url, 22);
$arr2 = str_split($url, 32);
$arr3 = str_split($url,5);
$check_url = $arr3[0];
$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];
define('TOKEN', '5298202425:AAEye38TlLY89m1ynBWuX6Mtx1HY2cmf6jE');
$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');


# Обрабатываем сообщение
switch ($message)
{   
    case '/start':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Здравствуйте, выберите свою роль: \n Работодатель \n Соискатель",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Работодатель'],
                    ['text' => 'Соискатель'],
                ]
            ]
        ]
    ];
    break;
    case 'работодатель':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Выберите что вы хотите сделать",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    break;
    case 'добавить горячую вакансию':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отправьте полную ссылку на свою вакансию:",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    break;
    case '1':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '1';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '2':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '2';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '3':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '3';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '4':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '4';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '5':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '5';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '6':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '6';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '7':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '7';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '8':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '8';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '9':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '9';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '10':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '10';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case '11':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '11';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
   
    case '12':
        $method = 'sendMessage';
        $send_data = [
        'text' => "Отлично теперь поиск для вашей вакансии более мобильный для нашего бота:)",
        'reply_markup' => [
            'resize_keyboard' => true,
            'keyboard' => [
                [
                    ['text' => 'Добавить горячую вакансию'],
                    ['text' => 'Удалить все вакансии'],
                    ['text' => 'Просмотреть свои вакансии'],
                    ['text' => 'Просмотреть все вакансии'],
                ]
            ]
        ]
    ];
    $prof = '12';
    $num = [];
    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
    foreach($check_row as $arr_date){
        $num[] = (int)$arr_date['date'];
    }
    $maxDate = max($num);
    mysqli_query($connect, "UPDATE `vakansii` SET `prof` = '$prof' WHERE `vakansii`.`date` = '$maxDate'");
    break;
    case 'просмотреть свои вакансии':
        $method = 'sendMessage';
        $vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
        $vacancii_text = "Вот ваши все горячие вакансии: ";
        foreach ($vakansii as $key){
            $vacancii_text = $vacancii_text . "\n" . $key['link'];
        }
        $send_data = [
            'parse_mode' => 'HTML',
            'text' => $vacancii_text,
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Добавить горячую вакансию'],
                        ['text' => 'Удалить все вакансии'],
                        ['text' => 'Просмотреть свои вакансии'],
                        ['text' => 'Просмотреть все вакансии'],
                    ]
                ]
            ]
        ];
            break;
            case 'удалить все вакансии':
                $vakansii = mysqli_query($connect, "DELETE FROM `vakansii` WHERE `vakansii`.`id_user` = '$id_user'");
                $method = 'sendMessage';
                $send_data = [
                'text' => "Все ваши вакансии успешно удалены!",
                'reply_markup' => [
                    'resize_keyboard' => true,
                    'keyboard' => [
                        [
                            ['text' => 'Добавить горячую вакансию'],
                            ['text' => 'Удалить все вакансии'],
                            ['text' => 'Просмотреть свои вакансии'],
                            ['text' => 'Просмотреть все вакансии'], 
                        ]
                    ]
                ]
            ];
                break;
    case 'просмотреть все вакансии':
                $method = 'sendMessage';
                $vakansii = mysqli_query($connect, "SELECT * FROM `vakansii`");
                $vacancii_text = "Вот все горячие вакансии: ";
                $count = 1;
                foreach ($vakansii as $key){
                    $vacancii_text = $key['link'] . $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                $send_data = [
                    'parse_mode' => 'HTML',
                    'text' => $vacancii_text,
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'Добавить горячую вакансию'],
                                ['text' => 'Удалить все вакансии'],
                                ['text' => 'Просмотреть свои вакансии'],
                                ['text' => 'Просмотреть все вакансии'],
                            ]
                        ]
                    ]
                ];
                    break;
            case 'соискатель': 
                $method = 'sendMessage';
                $send_data = [
                    'text' => "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'а':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '1'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'б':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '2'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'в':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '3'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'г':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '4'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'д':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '5'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'е':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '6'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'ж':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '7'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'з':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '8'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'и':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '9'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'к':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '10'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'л':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '11'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
                case 'м':
                    $method = 'sendMessage';
                    $check_vakansii = mysqli_query($connect, "SELECT * FROM `vakansii` WHERE `prof` = '12'");
                    $count = 1;
                    $vacancii_text = "Вот все горячие вакансии: ";
                foreach ($check_vakansii as $key){
                    $vacancii_text = $vacancii_text . "\n" . $count . ". ". $key['link'];
                    $count = $count + 1;
                }
                    $send_data = [
                    'text' => $vacancii_text . "\n" . "\n" . "Выберите специальность: \n А. Автомобильный бизнес \n Б. Административный персонал \n В. Безопасность \n Г. Добыча сырья \n Д. Домашний, обслуживающий персонал \n Е. Закупки \n Ж. Информационные технологии \n З. Искусство, развлечения, масс-медиа \n И.Маркетинг, реклама, PR \n К. Медицина, фармацевтика \n Л. Наука, образование \n М. Другое",
                    'reply_markup' => [
                        'resize_keyboard' => true,
                        'keyboard' => [
                            [
                                ['text' => 'А'],
                                ['text' => 'Б'],
                                ['text' => 'В'],
                                ['text' => 'Г'],
                                ['text' => 'Д'],
                                ['text' => 'Е'],
                                ['text' => 'Ж'],
                                ['text' => 'З'],
                                ['text' => 'И'],
                                ['text' => 'К'],
                                ['text' => 'Л'],
                                ['text' => 'М'],
                            ]
                        ]
                    ]
                ];
                break;
    default: 
    $method = 'sendMessage';
                if($arr[0] === 'https://hh.ru/vacancy/' || $arr2[0] === 'https://mo.superjob.ru/vakansii/'){
                    $send_data = [
                        'text' => "Ваканския успешно добавлена укажите сферу работы: \n 1.Автомобильный бизнес \n 2.Административный персонал \n 3.Безопасность \n 4.Добыча сырья \n 5.Домашний, обслуживающий персонал \n 6.Закупки \n 7.Информационные технологии \n 8.Искусство, развлечения, масс-медиа \n 9.Маркетинг, реклама, PR \n 10.Медицина, фармацевтика \n 11.Наука, образование \n 12.Другое",
                        'reply_markup' => [
                            'resize_keyboard' => true,
                            'keyboard' => [
                                [
                                    ['text' => '1'],
                                    ['text' => '2'],
                                    ['text' => '3'],
                                    ['text' => '4'],
                                    ['text' => '5'],
                                    ['text' => '6'],
                                    ['text' => '7'],
                                    ['text' => '8'],
                                    ['text' => '9'],
                                    ['text' => '10'],
                                    ['text' => '11'],
                                    ['text' => '12']
                                ]
                            ]
                        ]
                    ];
                    $check_row = mysqli_query($connect,"SELECT * FROM `vakansii` WHERE `id_user` = '$id_user'");
                    if(mysqli_num_rows($check_row) <= 2){
                        mysqli_query($connect,"INSERT INTO `vakansii` (`id`, `id_user`, `link`, `date`, `prof`) VALUES (NULL, '$id_user', '$url', '$date', '$prof')");
                    }else{
                        $send_data = [
                            'text' => "Вы превысили лимит горячих вакансий"
                            ]; 
                    }
                }else{
                     $send_data = [
                    'text' => "Ошибка ввода"
                    ];
                }
                
}



$send_data['chat_id'] = $data['chat']['id'];

$res = sendTelegram($method, $send_data);

function sendTelegram($method, $data, $headers = [])
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.telegram.org/bot' . TOKEN . '/' . $method,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array_merge(array("Content-Type: application/json"), $headers)
    ]);   
    
    $result = curl_exec($curl);
    curl_close($curl);
    return (json_decode($result, 1) ? json_decode($result, 1) : $result);
}

