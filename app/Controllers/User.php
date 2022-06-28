<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/Login');
        }
        //cek role dari session
        if($this->session->get('role') != 2){
            return redirect()->to('/Admin');
        }
        return view('user/index');
    }
    
}
