<?php

function __autoload($className)
{
    $fileName  = str_replace('\\', '/', $className);
 
    require __DIR__.'/'.$fileName.".php";
}
