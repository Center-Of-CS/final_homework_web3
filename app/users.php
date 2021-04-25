<?php

include_once 'db.php';

class user extends db{
    protected $tbl='users';

    
    public function login($data){
        $username=$data['username'];
        $password=$data['password'];
        
        $this->setTbl($this->tbl);
        
        $user_data  = $this->searchData('username',$username);

        if($password == $user_data->password){
            
            session_start();
            $_SESSION['username']   = $user_data->fullname;
            $_SESSION['user_id']    = $user_data->id;
            $_SESSION['auth']       = "afg_time";
            header('location:main.php');

        }
    }
    
    public function logout(){
        session_destroy();
        header("location:index.php?logout=ok");
    }

}