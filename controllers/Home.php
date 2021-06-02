<?php


class Home extends AbstractController
{
    public function  __construct()
    {
    }

    public function home()
    {
    $this->render('home');
    }
}