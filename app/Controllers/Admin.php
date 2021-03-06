<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
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
        if($this->session->get('role') != 1){
            return redirect()->to('/User');
        }
        
        return view('admin/index');
        
    }
}
