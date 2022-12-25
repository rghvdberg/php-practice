<?php

return [

    'database' => [
        'name' => 'mytodos',
        'username' => '',
        'password' => '',
        'connection'=> 'sqlite:../mytodos.db',
        'options' =>[
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
        ]
    ]

];