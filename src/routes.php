<?php

use MyProject\Controllers\MainController;
use MyProject\Controllers\ArticlesController;

return [
    '~^articles/(\d+)$~' => [ArticlesController::class, 'view'],
    '~^$~' => [MainController::class, 'main'],

];
