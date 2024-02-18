<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\View\View;

class MainController
{
    private View $view;

    //action
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    //action
    public function main(): void
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
}