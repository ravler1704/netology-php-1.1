<?php
    $name = 'Александр Раскатов'; 
    $age = '28';
    $email = 'avr1704@yandex.ru';
    $city = 'Москва';
    $aboutMe = 'Начинающий php разработчик';
    ?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?php echo $name.' - '.$aboutMe; ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
    
    

        <h1>Страница пользователя <?php echo $name; ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?php echo $name; ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?php echo $age; ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?php echo $city; ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?php echo $aboutMe; ?></dd>
        </dl>
    </body>
</html>
