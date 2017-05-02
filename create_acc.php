<?php
  include('db.php');
  $nameErr = $emailErr = $passErr="";
$name = $email =$password="";
$valid_input=1;
$join_success=0;
$joined="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["new_username"])) {
    $nameErr = "Name can't be empty";$valid_input=0;
  } else {
    $name = test_input($_POST["new_username"]);
    // name can only contain alphabets
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters  allowed";$valid_input=0; 
    }
  }

  if (empty($_POST["new_email"])) {
    $emailErr = "Email can't be empty";$valid_input=0; 
  } else {
    $email = test_input($_POST["new_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; $valid_input=0; 
    }
  }
 
 if (empty($_POST["new_password"])) {
    $passErr = "password can't be empty";$valid_input=0; 
  } else {
    $password = test_input($_POST["new_password"]);
    // check if the password is in valid format
    if (!(strlen($password) >= 8 && strlen($password) <= 60))  {
      $passErr = "Invalid password format"; $valid_input=0; 
    }
  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if(isset($_POST['joinnow']) and $valid_input){
   
     if (!DB::query('SELECT name FROM user_acc WHERE name=:username', array(':username'=>$name))) {
            if (!DB::query('SELECT email FROM user_acc WHERE email=:email', array(':email'=>$email))) {      

                           DB::query('INSERT INTO user_acc(name,email,password)VALUES (:name, :email, :password)', array(':name'=>$name,':email'=>$email,':password'=>password_hash($password, PASSWORD_BCRYPT)));
                             $join_success=1;
                             $joined="WELCOME to LETSTAGON <br> Account creation succesfull";
                             mail('prakashsurya187@gmail.com',"mysubject","succesful");
                   }else{
                              $emailErr="email already in use";
                    }                 
     } else {
               $nameErr="user name already in use";
                
           }
 }

?>

  