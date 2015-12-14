<?php

class AuthController extends View
{
    public function login()
    {
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/index.twig');
        }
        else
        {
            echo $this->twig->render('/auth/login.twig');
        }
    }

    public function register()
    {
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/index.twig');
        }
        else
        {
            echo $this->twig->render('/auth/register.twig');
        }
    }

    public function login_POST()
    {
        if( $this->user->isLoggedIn() ){
            return redirect('/');
        }
        else
        {
            $params = array(
                "email"     => $_POST['email'],
                "password"  => $_POST['password']
            );
            if( $this->user->loginUser($params) ){
                return redirect('/');
            }else{
                $error = "Incorrect email or password !";
                echo $this->twig->render('/auth/login.twig', array('error' => $error));
            }
        }
    }

    public function register_POST()
    {
        if( $this->user->isLoggedIn() ){
            echo $this->twig->render('/pages/index.twig');
        }
        else
        {
            $params = array(
                "firstname"         => $_POST['firstname'],
                "lastname"          => $_POST['lastname'],
                "email"             => $_POST['email'],
                "password"          => $_POST['password'],
                "confirmpassword"   => $_POST['confirmpassword'],
                'dateUser'          => date('Y-m-d H:i:s')
            );

//            if( $this->user->checkEmailRegister($params) )
//            {
//                $error = "Email already exist in database !";
//                echo $this->twig->render('/auth/register.twig', array('error' => $error));
//            }
//            else
                if( $this->user->registerUser($params) )
            {
                redirect('/login');
            }
        }
    }

    public function profile()
    {
        if( $this->user->isLoggedIn() ){
            $data = $this->user->getUserDetails();
            echo $this->twig->render('/auth/profile.twig', array('profile' => $data));
        }else{
            redirect('/');
        }
    }

    public function editProfile_POST()
    {
        if( $this->user->isLoggedIn() )
        {
            $params = array(
                            "firstname"     => $_POST['firstname'],
                            "lastname"      => $_POST['lastname'],
                            "email"         => $_POST['email'],
                            "password"      => $_POST['newpassword']
                            );
            if( $this->user->profileUpdate($params) ){
                redirect('/profile');
            }else{
                echo 'false';
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                        $params["path"], $params["domain"],
                        $params["secure"], $params["httponly"]
                    );
        }
        session_destroy();
        redirect('/');
    }

}
