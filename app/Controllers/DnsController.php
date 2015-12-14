<?php

class DnsController extends View
{

    public function dnsList()
    {
        if( $this->user->isLoggedIn() ){
            $data = $this->dnsModel->getAllDnsModel();

            echo $this->twig->render('/pages/dns-list.twig', array('domains' => $data));
        }else{
            echo $this->twig->render('/auth/login.twig');
        }
    }

    public function addDomainNameSystem()
    {
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/add-dns.twig');
        }else{
            echo $this->twig->render('/auth/login.twig');;
        }
    }

    public function addDomainNameSystem_POST()
    {

        $params = array(
            "nameHost"          => $_POST['nameHost'],
            "ipAddress"         => $_POST['ipAddress'],
            "dns_server_ns1"    => $_POST['dns_server_ns1'],
            "dns_server_ns2"    => $_POST['dns_server_ns2'],
            "dns_mail_primary"  => $_POST['dns_mail_primary'],
            "dns_mail_backup"   => $_POST['dns_mail_backup'],
            "dns_min_ttl_time"  => $_POST['dns_min_ttl_time'],
            "dns_expire_time"   => $_POST['dns_expire_time'],
            "dns_refresh_time"  => $_POST['dns_refresh_time'],
            "dns_retry_time"    => $_POST['dns_retry_time'],
            "user_email"        => $_SESSION['user_email']
        );

        $lastIdDns = $this->dnsModel->addDomainNameSystemModel($params);
        $result = $this->dnsModel->createDnsZoneFileModel($params);

        if( $lastIdDns ){
            $params = array(
                "user_id"   => $_SESSION['user_session'],
                "dns_id"    => $lastIdDns
            );
            $domain = $this->userDnsModel->addUserDomainJoin($params);
            if( $domain && $result ){
                redirect('/dns-list');
            }
        }
    }

    public function editDomainNameSystem()
    {
        $id = parse_url($_SERVER['REQUEST_URI'])['query'];
        $data = $this->dnsModel->getDnsByIdModel($id);
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/edit-dns.twig', array('domain' => $data));
        }else{
            echo $this->twig->render('/auth/login.twig');;
        }
    }

    public function editDomainNameSystem_POST()
    {
        $id = parse_url($_SERVER['REQUEST_URI'])['query'];
        $params = array(
            "nameHost"          => $_POST['nameHost'],
            "ipAddress"         => $_POST['ipAddress'],
            "dns_server_ns1"    => $_POST['dns_server_ns1'],
            "dns_server_ns2"    => $_POST['dns_server_ns2'],
            "dns_mail_primary"  => $_POST['dns_mail_primary'],
            "dns_mail_backup"   => $_POST['dns_mail_backup'],
            "dns_min_ttl_time"  => $_POST['dns_min_ttl_time'],
            "dns_expire_time"   => $_POST['dns_expire_time'],
            "dns_refresh_time"  => $_POST['dns_refresh_time'],
            "dns_retry_time"    => $_POST['dns_retry_time'],
            "user_email"        => $_SESSION['user_email']
        );
        $data = $this->dnsModel->editDnsByIdModel($id, $params);
        $result = $this->dnsModel->createDnsZoneFileModel($params);
        if( $data && $result ){
            redirect('/dns-list');
        }
    }

    public function deleteDomainNameSystem()
    {
        $id = parse_url($_SERVER['REQUEST_URI'])['query'];
        $result = $this->dnsModel->deleteDnsByIdModel($id);

        if( $result ){
            $params = array(
                "deleted_dns_id"   => $id
            );
            if( $this->userDnsModel->deleteUserDnsByIdModel($params) ){
                redirect('/dns-list');
            }
        }

    }

    public function createDnsZoneFile()
    {
        $params = array(
            "nameHost"          => $_POST['nameHost'],
            "ipAddress"         => $_POST['ipAddress'],
            "dns_server_ns1"    => $_POST['dns_server_ns1'],
            "dns_server_ns2"    => $_POST['dns_server_ns2'],
            "dns_mail_primary"  => $_POST['dns_mail_primary'],
            "dns_mail_backup"   => $_POST['dns_mail_backup'],
            "dns_min_ttl_time"  => $_POST['dns_min_ttl_time'],
            "dns_expire_time"   => $_POST['dns_expire_time'],
            "dns_refresh_time"  => $_POST['dns_refresh_time'],
            "dns_retry_time"    => $_POST['dns_retry_time'],
            "user_email"        => $_SESSION['user_email']
        );
        $id = parse_url($_SERVER['REQUEST_URI'])['query'];
        $result = $this->dnsModel->createDnsZoneFileModel($id, $params);
        if( $result ){
             redirect('/dns-list');
        }
    }

    public function downloadDnsZoneFile()
    {
        $id = parse_url($_SERVER['REQUEST_URI'])['query'];
        $domain_name = $this->dnsModel->downloadDnsZoneFileModel($id);
        if( $domain_name ){
            redirect('/app/domains_conf/'. $domain_name['nameHost'] .'.conf');
        }
    }


}

