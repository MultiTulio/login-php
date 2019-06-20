<?php
    class User extends App{
        function __construct(){
		parent::__construct();
    }

        public function index(){
            if (isset($_GET['logout'])) {
                return  $this->logout();
            }

            if (isset($_SESSION['login']) && $_SESSION['pass']) {
                $user = $this->getUser($_SESSION['login'], $_SESSION['pass']);
                if ($user) {
                    return require APPPATH.'/views/in.php';
                }
            }

            $this->login();
        }

        public function login(){
            $error = null;

            if (isset($_POST['submit'])) {
                $user = $this->getUser($_POST['login'], $_POST['pass']);

                if ($user) {
                    $_SESSION['login'] = $user['login'];
                    $_SESSION['pass'] = $user['pass'];
                    $_SESSION['name'] = $user['name'];
                    return require APPPATH.'/views/in.php';
                }
                $error = 'Вы ввели неправильный логин или пароль';
            }

            require APPPATH.'/views/login.php';
        }

        public function logout() {
            unset($_SESSION['login']);
            unset($_SESSION['pass']);

            $this->login();
        }

        private function getUser($login, $pass){
            $sql = "SELECT * FROM `user` WHERE `login` = '" . $login . "' AND `pass`= '" . $pass . "'";
            return self::$db->query($sql);
        }
    }

?>
