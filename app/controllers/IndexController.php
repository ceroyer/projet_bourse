<?php

namespace Controllers;
use Models\Users;


class IndexController extends Controller{

function editProfile(){
  global $blade;

  $id = $_GET['id'];
  $user = Users::getInstance()->get($id);
  echo $blade->render('profile' , ['user' => $user]);
}

function saveProfile(){
  global $blade;

  $id = $_POST['id'];
  $user = Users::getInstance()->get($id);
  if($_POST['password_old'] == $user['password'] && $_POST['password_new'] != $user['password'] && $user['password_new'] == $user['password_verif']){
    $datas = ['email' => $_POST['email'] , 'password' => $_POST['password']];
    User::getInstance()->edit($id , $datas);
    redirect('/stats');
  }else{
    redirect('/');
  }
}

function backofficeIndex(){
    global $blade;

    $listUsers = Users::getInstance()->getAll();

     echo $blade->render(
        'bo',
        ['users'=>$listUsers]
      );

}

