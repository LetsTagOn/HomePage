<?php
 include 'db.php';
 $email=$password="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
   
   $email=test_input($_POST["email"]);
   $password=test_input($_POST["password"]);
   
  if (DB::query('SELECT email FROM user_acc WHERE email=:email', array(':email'=>$email))) {
                if (password_verify($password, DB::query('SELECT password FROM user_acc WHERE email=:email', array(':email'=>$email))[0]['password'])) {
                        echo 'Logged in!';
                } else {
                        echo 'Incorrect Password!';
                }
        } else {
                echo 'NO user with the emailid';
                echo $email ;
        }
   
  ?>