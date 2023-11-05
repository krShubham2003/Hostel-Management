<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($username) || empty($password)) {
    header("Location: ../login-hostel_manager.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM admin WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $fpassword =  $row['Pwd'];
      $hashedPassword = password_hash($fpassword, PASSWORD_BCRYPT);
      $pwdCheck = password_verify($password, $hashedPassword);
      if($pwdCheck == false){
        header("Location: ../login-hostel_manager.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        $_SESSION['hostel_man_id'] = $row['Admin_id'];
        $_SESSION['adm_fname'] = $row['Fname'];
        $_SESSION['adm_lname'] = $row['Lname'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['email'] = $row['email'];
        
        $_SESSION['PSWD'] = $row['Pwd'];
        header("Location: ../home_manager.php?login=success");
      }
      else {
        header("Location: ../login-hostel_manager.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../login-hostel_manager.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../login-hostel_manager.php");
  exit();
}
