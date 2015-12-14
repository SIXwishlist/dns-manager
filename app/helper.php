<?php
session_start();

function view($name)
{
    return require __DIR__ . '/Views/' . $name . '.php';
}

function loadData($template, $data = [])
{
    extract($data);
    return require __DIR__ . '/Views/' . $template . '.php';
}

function redirect($uri = '/')
{
    return header('Location:' . URL . $uri);
}

function model($model)
{
    require_once __DIR__ . '/Model/' . $model . '.php';
    return new $model;
}

function twigView($view)
{
    require_once __DIR__ . '/Core/' . $view . '.php';
    return new $view;
}

function __autoload($class_name) {
    require_once __DIR__ . '/Model/' . $class_name . '.php';
}