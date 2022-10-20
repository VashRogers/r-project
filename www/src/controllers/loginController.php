<?php
loadModel('Login');

if(count($_POST) > 0){
    $login = new Login($_POST);

    try{
        $login->checkLogin();
        echo "Usuário {$user->name} Autenticado!!";
    }
    catch(Exception $e){
        echo "Falha on login";
    }
}


loadView('login', $_POST);

