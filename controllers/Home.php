<?php


class Home extends AbstractController
{
    public function  __construct()
    {
    }

    public function homepage()
    {
    $this->render('home');
    }
}