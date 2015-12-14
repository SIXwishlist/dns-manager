<?php

class PagesController extends View
{
    public function index()
    {
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/index.twig');

        }else{
            echo $this->twig->render('/auth/login.twig');

        }
    }
}

    