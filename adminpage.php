<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
$_SESSION['suser']=$_POST['user'];
$_SESSION['spass']=$_POST['pass'];
//echo "Session Id is:".session_id();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
    </head>
    
    <body>
         <div id="d1"><h2>&nbsp;&nbsp;Student Feedback System</h2> <marquee behavior="scroll" direction="right" scrollamount="4"><font style="color:#FFFFFF ; font-size: 12pt;">We really value your feedback!!</marquee> </div>
      <?php
      //setcookie("user", "$user", time()+3600);
        // put your code here
        print"<h4>Welcome "."<font color=\"red\">". $_SESSION['suser']."!!</font></b>";
     //   print "<br><h2> Have a nice time with web technology</h2><br>";
      //  print"<h3>Click <a href=\"DBFormMethodsEx.php\">here</a> to insert the records</h3><br>";
        ?>  
      <!--  <img src="images.jpg" align="bottom-right" height="%16" width="16%" ></img>-->
         
     <nav>
    <ul>
        
        <li><a href="#">View Results</a>
            <ul>
                <li><a href="BITgraph.php" target="test1">BIT</a></li>
                <li><a href="BIMgraph.php" target="test1">BIM</a></li>
                <li><a href="AISgraph.php" target="test1">AIS</a></li>  
            </ul>
         </li>
         <li><a href="ome.html">Log Out</a></li>
         </nav> 
    


<iframe id="test" name="test1" align="center" frameborder="no" style="WIDTH: 100%; HEIGHT: 550px; TEXT-ALIGN: center;" >
</iframe>



        
      
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br<br><br><br<br>
          <center> <span style="font-family:verdana;font-color:#666666; font-size:70%;">©2014-2019</span> <span style="font-family:verdana;font-color:#666666; font-size:50%;">Trademarks are the property of their respective owners. All Rights Reserved.</span></center>
    </body>
</html>