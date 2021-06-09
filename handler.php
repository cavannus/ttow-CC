<?php
    ini_set('allow_url_fopen',1);
    switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
        case '/':
            require 'index.php';
            break;
        case '/index':
            require 'index.php';
            break;
        case '/index.php':
            require 'index.php';
            break;
        case '/semar':
            require 'semar.php';
            break;
        case '/semar.php':
            require 'semar.php';
            break; 
        case '/gareng':
            require 'gareng.php';
            break;
        case '/gareng.php':
            require 'gareng.php';
            break;
        case '/petruk':
            require 'petruk.php';
            break;
        case '/petruk.php':
            require 'petruk.php';
            break;
        case '/bagong':
            require 'bagong.php';
            break;
        case '/bagong.php':
            require 'bagong.php';
            break;
        case '/getwayang.php':
            require 'getwayang.php';
            break;
        case '/getcerita.php':
            require 'getcerita.php';
            break;
    }
?>