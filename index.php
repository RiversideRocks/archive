<?php
require __DIR__ . '/vendor/autoload.php';
/*===========================================

Copyright 2020 Riverside Rocks Authors

Under Apache 2.0

                            _
                          .' `'.__
                         /      \ `'"-,
        .-''''--...__..-/ .     |      \
      .'               ; :'     '.  a   |
     /                 | :.       \     =\
    ;                   \':.      /  ,-.__;.-;`
   /|     .              '--._   /-.7`._..-;`
  ; |       '                |`-'      \  =|
  |/\        .   -' /     /  ;         |  =/
  (( ;.       ,_  .:|     | /     /\   | =|
   ) / `\     | `""`;     / |    | /   / =/
     | ::|    |      \    \ \    \ `--' =/
    /  '/\    /       )    |/     `-...-`
   /    | |  `\    /-'    /;
   \  ,,/ |    \   D    .'  \
jgs `""`   \  nnh  D_.-'L__nnh

*=============================================*/

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    require "web/home.php";
});

$router->run();