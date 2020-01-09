<?php

class LoginController {

    public function index () {
        return view ('login');
    }

    public function login () {

        $username = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

        if (isset($action) && $action == 'login') {
            $error = [];

            if (empty($username)) {
                $error['username'] = 'Username is not valid!';
            }

            if (empty($password)) {
                $error['password'] = 'Password is empty';
            }

            if (empty($error)) {
                //authenticate user
                $user = $this->auth($username, $password);

                if ($user) {
                    echo 'login user in!';
                } else {
                    echo 'Username or password did not match';
                }
            }
        }

        print_r($_SESSION);
        print_r($_REQUEST);
        print_r($error);
    }

    public function auth ($username, $password) {
        global $app;

        $user = $app['database']->getUserByEmail('users', $username);

        if (!empty($user)) {

//            $options = [
//                'cost' => 12,
//            ];
//            echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
//            if (password_verify($password, $user->password))

            if ($user->password === $password) {
                return $user;
            }
        }

        return false;
    }
}