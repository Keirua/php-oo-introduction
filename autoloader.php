<?php

function __autoload($class_name) {
    include_once __DIR__.'/src/'.$class_name . '.php';
}