<?php
session_start();
spl_autoload_register(function ($class) {
    include_once $class . '.php';
});
