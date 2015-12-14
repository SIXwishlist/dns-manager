<?php
    $route = new Router;
//GET ROUTES
    //pages
    $route->get(URL . '/', ['PagesController', 'index']);
    $route->get(URL . '/dns-list', ['DnsController', 'dnsList']);

    //auth
    $route->get(URL . '/login', ['AuthController', 'login']);
    $route->get(URL . '/register', ['AuthController', 'register']);
    $route->get(URL . '/profile', ['AuthController', 'profile']);
    $route->get(URL . '/logout', ['AuthController', 'logout']);

    //management
    $route->get(URL . '/addDomainNameSystem', ['DnsController', 'addDomainNameSystem']);
    $route->get(URL . '/dns_edit', ['DnsController', 'editDomainNameSystem']);
    $route->get(URL . '/dns_delete', ['DnsController', 'deleteDomainNameSystem']);
    $route->get(URL . '/downloadFile', ['DnsController', 'downloadDnsZoneFile']);

//POST ROUTES
    //auth
    $route->post(URL . '/loginPOST', ['AuthController', 'login_POST']);
    $route->post(URL . '/registerPOST', ['AuthController', 'register_POST']);
    $route->post(URL . '/profilePOST', ['AuthController', 'editProfile_POST']);

    ///management
    $route->post(URL . '/addDomainNameSystemPOST', ['DnsController', 'addDomainNameSystem_POST']);
    $route->post(URL . '/editDomainNameSystemPOST', ['DnsController', 'editDomainNameSystem_POST']);

    //create zones file
    $route->post(URL . '/createDnsZoneFile', ['DnsController', 'createDnsZoneFile']);


?>