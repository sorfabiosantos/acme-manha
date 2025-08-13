<?php

namespace Source\Web;

class App extends Controller
{
    public function __construct()
    {
        parent::__construct("app");
    }

    public function home(): void
    {
        echo $this->view->render("home");
    }

}