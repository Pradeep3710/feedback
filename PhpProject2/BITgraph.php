<html>

<head>

    <?php
    
    mysql_connect("localhost","root","root") or die(mysql_error());
    $db=mysql_select_db("test1") or die(mysql_error());
    $sql="select sum(badcount),sum(faircount),sum(goodcount),sum(excelcount) from feedback1";
    $res=mysql_query($sql);
   if(mysql_num_rows($res)>0)
   {
  // print"<center><h2>Query Executed Successfully!!</h2></center><hr>";
  // print"<table border =\"1\" align='center'>";
   
   $res=mysql_query($sql);
   $row=mysql_fetch_array($res);
   
   // print"</table>";
   }
    ?>
    
    
    <script type="text/javascript">
    
    var can, ctx,numSamples,xScalar, yScalar,radius, quarter;
    var d1=new Array();
    var i;
    var dataName = [ "Bad", "Fair", "Good", "Excellent"];
    var fillColor = ["Black", "orange", "yellow", "white" ];
    
    function init() {
            numSamples = 4;
            can = document.getElementById("can");
            ctx = can.getContext("2d");
           
       
     
          
             d1[0]= <?php echo $row[0]; ?>;
             d1[1]= <?php echo $row[1]; ?>;
             d1[2]= <?php echo $row[2]; ?>; 
             d1[3]= <?php echo $row[3]; ?>;
             
          
            radius = can.height / 3;

            var midX = can.width / 2;

            var midY = can.height / 2;

            ctx.strokeStyle = "black";

            ctx.font = "18pt Helvetica";

            ctx.textAlign = "center";

            ctx.textBaseline = "middle";

            var dataValue = d1;

            var total = 0;

            for (var i = 0; i < numSamples; i++) {

                total += dataValue[i];

            }

           ctx.clearRect(0, 0, can.width, can.height);

            var oldAngle = 0;
            for (var i = 0; i < numSamples; i++) {

                

                var portion = dataValue[i] / total;

                var wedge = 2 * Math.PI * portion;

                ctx.beginPath();

                var angle = oldAngle + wedge;

                ctx.arc(midX, midY, radius, oldAngle, angle);

                ctx.lineTo(midX, midY);

                ctx.closePath();

                ctx.fillStyle = fillColor[i];

                ctx.fill();    // fill with wedge color

                ctx.stroke();  // outline in black
//runs on ephiphany
 

                // print label

                // set angle to middle of wedge

                var labAngle = oldAngle + wedge / 2;

                // set x, y for label outside center of wedge

                // adjust for fact text is wider than it is tall

                var labX = midX + Math.cos(labAngle) * radius * 1.5;

                var labY = midY + Math.sin(labAngle) * radius * 1.3 - 12;

                // print name and value with black shadow

                ctx.save();

                ctx.shadowColor = "black";

                ctx.shadowOffsetX = 1;

                ctx.shadowOffsetY = -1;

                ctx.fillStyle = fillColor[i];

                ctx.fillText(dataName[i], labX, labY);

               ctx.fillText(dataValue[i], labX, labY + 25);

                ctx.restore();

                // update beginning angle for next wedge

                oldAngle += wedge;

            }

        }

    </script>

</head>

<body onload="init()">
     <div align="center">
&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>Feedback submitted by students for BIT</h4>
&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<canvas id="can" height="300" width="410"></canvas> </div>
 
    
</body>
</html>

