<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function checkAge($age)
{
    return ($age >= 21) ? true : false;
}