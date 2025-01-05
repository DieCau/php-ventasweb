<?php

require_once "../../config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombres = trim($_POST['nombres']);
  $email = trim($_POST['email']);
  $password_user = trim($_POST['password_user']);
  $password_repeat = trim($_POST['password_repeat']);

  $token = bin2hex(random_bytes(50));
  $fyh_actualizacion = date('Y-m-d H:i:s');

  if ($password_user == $password_repeat) {
    $hashedPassword = password_hash($password_user, PASSWORD_BCRYPT); 
    
    $sql = "INSERT INTO tb_usuarios (nombres, email, password_user, token, fyh_creacion, fyh_actualizacion) VALUES (:nombres, :email, :password_user, :token, :fyh_creacion, :fyh_actualizacion)";
    $stmt = $pdo->prepare($sql);
    try {
      $stmt->execute([
        ':nombres' => $nombres,
        ':email' => $email,
        ':password_user' => $hashedPassword,
        ':token' => $token,
        ':fyh_creacion' => $fechaHora,
        ':fyh_actualizacion' => $fyh_actualizacion
    ]);
    echo "Usuario creado exitosamente.";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

  }else {
    echo "Las contraseñas no coinciden";
  }
}