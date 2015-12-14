<?php

class DnsModel extends Model
{
    //fetch data from tables
    public function getAllDnsModel()
    {
        $user_id = $_SESSION['user_session'];
        $this->sql = "SELECT  d.dns_id,
                              d.nameHost,
                              d.ipAddress,
                              u.firstname,
                              u.lastname,
                              u.email
                      FROM dns d
                      INNER JOIN userdns ud ON d.dns_id = ud.dns_id
                      INNER JOIN users u ON u.id = ud.user_id
                      WHERE u.id = '$user_id'
                      ORDER BY d.dns_id";
        $this->query();
        $results = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getDnsByIdModel($id)
    {
        $user_id = $_SESSION['user_session'];
        $this->sql = "SELECT  d.dns_id,
                              d.nameHost,
                              d.ipAddress,
                              d.dns_server_ns1,
                              d.dns_server_ns2,
                              d.dns_mail_primary,
                              d.dns_mail_backup,
                              d.dns_min_ttl_time,
                              d.dns_expire_time,
                              d.dns_refresh_time,
                              d.dns_retry_time,
                              d.user_email
                      FROM dns d
                      INNER JOIN userdns ud ON d.dns_id = ud.dns_id
                      INNER JOIN users u ON u.id = ud.user_id
                      WHERE u.id = '$user_id' AND d.dns_id = '$id'";

        $this->query();
        $results = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    //add domains
    public function addDomainNameSystemModel($params)
    {  var_dump($params);
        $this->sql = "INSERT INTO dns (
                                      nameHost,
                                      ipAddress,
                                      dns_server_ns1,
                                      dns_server_ns2,
                                      dns_mail_primary,
                                      dns_mail_backup,
                                      dns_min_ttl_time,
                                      dns_expire_time,
                                      dns_refresh_time,
                                      dns_retry_time,
                                      user_email
                                      )
                             VALUES (
                                    :nameHost,
                                    :ipAddress,
                                    :dns_server_ns1,
                                    :dns_server_ns2,
                                    :dns_mail_primary,
                                    :dns_mail_backup,
                                    :dns_min_ttl_time,
                                    :dns_expire_time,
                                    :dns_refresh_time,
                                    :dns_retry_time,
                                    :user_email
                                    )";
        $this->params = [
                        ':nameHost'         => $params['nameHost'],
                        ':ipAddress'        => $params['ipAddress'],
                        ':dns_server_ns1'   => $params['dns_server_ns1'],
                        ':dns_server_ns2'   => $params['dns_server_ns2'],
                        ':dns_mail_primary' => $params['dns_mail_primary'],
                        ':dns_mail_backup'  => $params['dns_mail_backup'],
                        ':dns_min_ttl_time' => $params['dns_min_ttl_time'],
                        ':dns_expire_time'  => $params['dns_expire_time'],
                        ':dns_refresh_time' => $params['dns_refresh_time'],
                        ':dns_retry_time'   => $params['dns_retry_time'],
                        ':user_email'       => $params['user_email']
                        ];

        $result = $this->query();
        $lastId = $this->myDb->lastInsertId();
        if( $result )
            return $lastId;
                return false;
    }

    //edit domains
    public function editDnsByIdModel($id, $params)
    {
        if(isset( $params )) {
            $nameHost           = $params["nameHost"];
            $ipAddress          = $params["ipAddress"];
            $dns_server_ns1     = $params['dns_server_ns1'];
            $dns_server_ns2     = $params['dns_server_ns2'];
            $dns_mail_primary   = $params['dns_mail_primary'];
            $dns_mail_backup    = $params['dns_mail_backup'];
            $dns_min_ttl_time   = $params['dns_min_ttl_time'];
            $dns_expire_time    = $params['dns_expire_time'];
            $dns_refresh_time   = $params['dns_refresh_time'];
            $dns_retry_time     = $params['dns_retry_time'];
            $user_email         = $params['user_email'];
        }

        $this->sql = "UPDATE dns
                      SET
                          nameHost          = '$nameHost',
                          ipAddress         = '$ipAddress',
                          dns_server_ns1    = '$dns_server_ns1',
                          dns_server_ns2    = '$dns_server_ns2',
                          dns_mail_primary  = '$dns_mail_primary',
                          dns_mail_backup   = '$dns_mail_backup',
                          dns_min_ttl_time  = '$dns_min_ttl_time',
                          dns_expire_time   = '$dns_expire_time',
                          dns_refresh_time  = '$dns_refresh_time',
                          dns_retry_time    = '$dns_retry_time',
                          user_email        = '$user_email'
                      WHERE
                          dns_id = '$id'
                    ";
        $result = $this->query();

        return $result;
    }


    //delete domains
    public function deleteDnsByIdModel($id)
    {
        $user_id = $_SESSION['user_session'];

        $this->sql = "DELETE d
                      FROM dns d
                      INNER JOIN userdns ud ON d.dns_id = ud.dns_id
                      INNER JOIN users u ON u.id = ud.user_id
                      WHERE u.id = '$user_id' AND d.dns_id = '$id'";

        $result = $this->query();
        return $result;
    }


    //create dns zone file
    public function createDnsZoneFileModel($params)
    {

        if(isset( $params )) {
            $nameHost           = $params["nameHost"];
            $ipAddress          = $params["ipAddress"];
            $dns_server_ns1     = $params['dns_server_ns1'];
            $dns_server_ns2     = $params['dns_server_ns2'];
            $dns_mail_primary   = $params['dns_mail_primary'];
            $dns_mail_backup    = $params['dns_mail_backup'];
            $dns_min_ttl_time   = $params['dns_min_ttl_time'];
            $dns_expire_time    = $params['dns_expire_time'];
            $dns_refresh_time   = $params['dns_refresh_time'];
            $dns_retry_time     = $params['dns_retry_time'];
            $user_email         = $params['user_email'];
            $date               = date('Ymd');
        }

        $file = __DIR__ . '/../domains_conf/' . $nameHost .'.conf';
        $template= "TTL	" . $dns_min_ttl_time . " ; 24 hours could have been written as 24h or 1d ;TTL used for all RRs without explicit TTL value ORIGIN example.com.
                    @      IN  SOA " . $dns_server_ns1 . ". " . $user_email . ". (
                                      ". $date ."01 ; serial
                                      ". $dns_refresh_time ." ; refresh
                                      ". $dns_retry_time ." ; retry
                                      ". $dns_expire_time ." ; expire
                                      ". $dns_min_ttl_time ." ; minimum
                                     )
                           IN  NS     ". $dns_server_ns1 .". ; in the domain
                           IN  NS     ". $dns_server_ns2 .". ; external to domain
                           IN  MX  10 ". $dns_mail_primary .". ; external primary mail provider
                           IN  MX  20 ". $dns_mail_backup .". ; external backup mail provider
                    ; server host definitions
                    ns1    IN  A      ". $ipAddress ."  ;name server definition
                    ftp    IN  CNAME  ". $nameHost .".  ;ftp server definition";
        unlink($file);
        if(file_put_contents($file, $template, FILE_APPEND)){
            return true;
        }
    }

    public function downloadDnsZoneFileModel($id)
    {
        $user_id = $_SESSION['user_session'];
        $this->sql = "SELECT d.nameHost
                      FROM dns d
                      INNER JOIN userdns ud ON d.dns_id = ud.dns_id
                      INNER JOIN users u ON u.id = ud.user_id
                      WHERE u.id = '$user_id' AND d.dns_id = '$id'";
        $this->query();
        $results = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }



}