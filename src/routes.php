<?php

use MyProject\Controllers\MainController;
use MyProject\Controllers\ArticlesController;

return [
    '~^$~' => [MainController::class, 'main'],
    '~^articles/(\d+)$~' => [ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [ArticlesController::class, 'edit']
];
