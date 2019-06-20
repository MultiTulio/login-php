<?php
class App{

    public static $db;
    function __construct(){
        require_once 'Db.php';
        self::$db = new Db();
    }

    public function run (){
        require APPPATH.'/controllers/User.php';
        $user = new User();

        $user->index();

    }
}
?>


