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

        $badcount=0;
        $faircount=0;
        $goodcount=0;
        $excelcount=0;
        $count=1;
        
        echo "<br><br><h4>FEEDBACK SUBMITTED SUCESSFULLY !!</h4>";
        
        if (isset($_POST['Submit1']))
        {
           if (($_POST['Q1'] == "A1"))
                $badcount=$badcount+1; 
           
           if ($_POST['Q2'] == "A1")
                $badcount=$badcount+1;
           
           if ($_POST['Q3'] == "A1")
               $badcount=$badcount+1;
           
           if($_POST['Q4'] == "A1")
               $badcount=$badcount+1;
           
           if($_POST['Q5'] == "A1")
             $badcount=$badcount+1;
    
    if  ($_POST['Q1'] == "A2")
           $faircount= $faircount+1;
    
    if ($_POST['Q2'] == "A2")
        $faircount= $faircount+1;
    
    if ($_POST['Q3'] == "A2")
        $faircount= $faircount+1;
    
    if($_POST['Q4'] == "A2")
        $faircount= $faircount+1;
    
    if($_POST['Q5'] == "A2")
       $faircount= $faircount+1;
    
    if ($_POST['Q1'] == "A3")
        $goodcount++;
    if($_POST['Q2'] == "A3")
            $goodcount++; 
    if($_POST['Q3'] == "A3")
         $goodcount++; 
    if($_POST['Q4'] == "A3")
         $goodcount++; 
    if ($_POST['Q5'] == "A3")
         $goodcount++; 
      
    
    if ($_POST['Q1'] == "A4")
        $excelcount++; 
    if($_POST['Q2'] == "A4")
        $excelcount++; 
    if ($_POST['Q3'] == "A4")
        $excelcount++; 
    if($_POST['Q4'] == "A4")
        $excelcount++; 
    if($_POST['Q5'] == "A4")
        $excelcount++; 
        }
     
    mysql_connect("localhost","root","") or die(mysql_error());
    $db=mysql_select_db("test") or die(mysql_error());
    $sql="insert into feedback1 values($badcount,$faircount,$goodcount,$excelcount)";
    $res=mysql_query($sql);
    
     // echo 'moved'.$count.'times';
    ?>
        



        
    </body>
</html>
