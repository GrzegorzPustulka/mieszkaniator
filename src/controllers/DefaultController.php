<?php

require_once 'AppController.php';


class DefaultController extends AppController
{

    public function index()
    {
        $this->render('login');
    }

    public function about()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }
        $this->render('about');
    }

    public function contact()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }
        $this->render('contact');
    }

}