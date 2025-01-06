<?php

require_once "../../config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombres = trim($_POST['nombres']);
  $email = trim($_POST['email']);
  $password_user = trim($_POST['password_user']);
  $password_repeat = trim($_POST['password_repeat']);
  $id_usuario = trim($_POST['id_usuario']);

  $fyh_actualizacion = date('Y-m-d H:i:s');

  if ($password_user == $password_repeat) {
    $hashedPassword = password_hash($password_user, PASSWORD_BCRYPT); 
    
    $sql = "UPDATE tb_usuarios 
    SET nombres:nombres, email:email, password_user:password_user, token:token, fyh_creacion:fyh_creacion, fyh_actualizacion:fyh_actualizacion
    WHERE id_usuario = :id_usuario";
    
    $stmt = $pdo->prepare($sql);
    try {
      $stmt->execute([
        ':id_usuario' => $id_usuario,
        ':nombres' => $nombres,
        ':email' => $email,
        'token' => $token,
        ':password_user' => $hashedPassword,
        ':fyh_actualizacion' => $fyh_actualizacion
    ]);

    session_start();
    $_SESSION['mensaje'] = "El usuario ha sido actualizado exitosamente";
    header("Location: " . $URL . "/usuarios");
    
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

  }else {
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    header("Location: " . $URL . "/usuarios/update.php?id='.$id_usuario'");
  }
}