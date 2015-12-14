<?php

include 'lib/Twig/Autoloader.php';

class View
{
    protected $user;
    protected $dnsModel;
    protected $userDnsModel;

    public function __construct()
    {
        //twig enginge template
        Twig_Autoloader::register(true);
        $loader = new Twig_Loader_Filesystem(array('/', __DIR__ . '/../Views'));
        $this->twig = new Twig_Environment($loader, array(
//            'cache' => __DIR__ . '/../cache',
//            'auto_reload' => true,
            'debug' => DEBUG
        ));
        $this->twig->addExtension(new Twig_Extension_Debug());

        //global fields
        $this->twig->addGlobal("session", $_SESSION);
        $this->twig->addGlobal("url", URL);

        //models objects
        $this->user = model('User');
        $this->dnsModel = model('DnsModel');
        $this->userDnsModel = model('UserDnsModel');
    }
}

?>