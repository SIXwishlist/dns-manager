<?php

class User extends Model
{
    public function loginUser($params)
    {
        if(isset( $params )) {
            $email = $params["email"];
            $password = md5($params["password"]);
        }
        $this->sql = "SELECT id, firstname, lastname, email, password FROM users WHERE email = '$email' AND password = '$password'";
        $this->params = $params;
        $this->query();
        $results = $this->stmt->fetch(PDO::FETCH_ASSOC);

        if(count($results) > 0)
            $_SESSION['user_session'] = $results['id'];
            $_SESSION['user_name']    = $results['firstname'];
            $_SESSION['user_email']   = $results['email'];
            return $results;
                return false;
    }

    public function registerUser($params)
    {

        if(isset( $params )) {
            $this->params = $params;
            $hash_password = md5($params['password']);
        }

        $this->sql = "INSERT INTO users (firstname,lastname,email,password,dateUser) VALUES (:firstname,:lastname,:email,:password,:dateUser)";
        $this->params = [':firstname'=> $params['firstname'], ':lastname'=>$params['lastname'], ':email'=>$params['email'],':password'=>$hash_password, ':dateUser'=>$params['dateUser']];
        $result = $this->query();
        if( $result )
            return true;
                return false;

    }

    public function profileUpdate($params)
    {
        if(isset( $params )) {
            $firstname  = $params["firstname"];
            $lastname   = $params["lastname"];
            $email      = $params["email"];
            $password = $params["password"];
        }

        if(isset( $params["confirmpassword"] ))
        {
            $confirmpassword = $password;
        }

        if( $this->isLoggedIn() ){
            $this->sql = "UPDATE users
                          SET
                                firstname = '$firstname',
                                lastname = '$lastname',
                                email = '$email',
                                password = '$confirmpassword'
                          WHERE id = '" . $_SESSION['user_session'] . "'
                         ";
            $result = $this->query();

            if( $result )
            return true;
                return false;
        }
    }

    public static function isLoggedIn()
    {
        return (isset($_SESSION['user_session']) && !empty($_SESSION['user_session']));
    }


    public function getUserDetails()
    {
        if( $this->isLoggedIn() ){

            $id = $_SESSION['user_session'];
            $this->sql = "SELECT id, firstname, lastname, email FROM users WHERE id = '$id'";
            $this->query();
            $results = $this->stmt->fetch(PDO::FETCH_ASSOC);
            return $results;

        }
    }

    public function checkEmailRegister($params)
    {
        if( $params["email"] ) {
            $email = $params['email'];
            $this->sql = "SELECT email FROM users WHERE email = '$email'";
            $result = $this->query();
            return $result;
        }
        else
        {
            return false;
        }
    }

}
