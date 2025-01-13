<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // recuerda, esto hace una instancia (o llamada) a un archivo con "NOMBREARCHIVO".php
        return view('custom_view');
    }
    public function getUsers(){
        $userModel=new \App\Models\UserModel();
        $users=$userModel->findAll(); //usado para extraer todos los registros
        return view('user_list',['users' => $users]);
    }
}
