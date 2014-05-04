<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <?php

$user_pass_list = array("priya" => "1234", "admin" => "4321", "Ram" => "Sita");
$user = $_POST['user'];
$pass = $_POST['pass'];

//check if the user exists in our array
if(array_key_exists($user, $user_pass_list)){
  //if it does, then check the password
  if($user_pass_list[$user] == $pass && strcmp($user,'priya')==0){
    
  include'secondpage.php';
    
  }
  else if($user_pass_list[$user] == $pass && strcmp($user,'admin')==0){
    
  include'adminpage.php';
    
  }
  else{
    echo '<script type="text/javascript">'; 
echo 'alert("Login Failure");'; 
echo 'window.location.href = "ome.html";';
echo '</script>';
  }
}else{
     echo '<script type="text/javascript">'; 
echo 'alert("Enter a valid username and password");'; 
echo 'window.location.href = "login.html";';
echo '</script>';
}

?>
    </body>
</html>
