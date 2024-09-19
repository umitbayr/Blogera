<?php

function validateUser($user) {
    $errors = array(); // $errors değişkenini tanımla

    if(empty($user['username'])){
      array_push($errors, 'Kullanici adi yazmaniz gerekli');
    }
    if(empty($user['email'])){
      array_push($errors, 'E-mail yazmaniz gerekli');
    }
    if(empty($user['password'])){
      array_push($errors, 'Şifre yazmaniz gerekli');
    }
  
    if($user['passwordConf'] !== $user['password']) {
      array_push($errors, 'Şifreler eşleşmiyor');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
      array_push($errors, 'E-mail kullanılmaktadır.');
    }
    return $errors;
}

function validateLogin($user) {
  $errors = array(); // $errors değişkenini tanımla

  if(empty($user['username'])){
    array_push($errors, 'Kullanıcı adını yazmaniz gerekli');
  }
  if(empty($user['password'])){
    array_push($errors, 'Şifre yazmaniz gerekli');
  }

  return $errors;
}



?>