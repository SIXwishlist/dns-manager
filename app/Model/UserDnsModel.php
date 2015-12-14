<?php

class UserDnsModel extends Model
{

    public function addUserDomainJoin($params)
    {
        $this->sql = "INSERT INTO userdns (user_id,dns_id) VALUES (:user_id,:dns_id)";
        $this->params = [':user_id' => $params['user_id'], ':dns_id'=>$params['dns_id']];
        $result = $this->query();
        if( $result )
            return true;
        return false;
    }

    //delete domains
    public function deleteUserDnsByIdModel($params)
    {
        $id = $params['deleted_dns_id'];
        $this->sql = "DELETE ud
                      FROM userdns ud
                      WHERE ud.dns_id = '$id'";

        $result = $this->query();
        return $result;
    }
}

?>