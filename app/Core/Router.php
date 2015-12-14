<?php

class Router
{
    private $request_uri;
    private $request_method;

    public function __construct()
    {

        $uri = str_replace('/index.php', '', $_SERVER['REQUEST_URI']);
        $this->request_uri = parse_url($uri)['path'];
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }

    public function get($uri, $action)
    {
        return $this->checkRoute('GET', $uri, $action);
    }

    public function post($uri, $action)
    {
        return $this->checkRoute('POST', $uri, $action);
    }

    private function checkRoute($method, $uri, $action)
    {
        if (($this->request_method == $method) && ($this->request_uri == $uri)) {
            return $this->loadAction($action);
        }
    }

    private function loadAction($action)
    {
        require_once __DIR__ . '/../Controllers/' . $action[0] . '.php';
        $controller = new $action[0];
        return $controller->{$action[1]}();
    }
}

