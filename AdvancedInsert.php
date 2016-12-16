<!-- This file will take the data from the given forms and update the Advanced_Stats table with those values--!>
<?php

    if (isset($_POST['submit'])){
      $con = mysqli_connect("localhost","branchaw","211018556","basketball") or die("Could not connect");
      
      $pId = mysqli_real_escape_string($con,$_POST['pid']);
      $Opponent = mysqli_real_escape_string($con,$_POST['Opponent']);
      $Pass_Made = mysqli_real_escape_string($con,$_POST['Pass_Made']);
      $Pass_Rec = mysqli_real_escape_string($con,$_POST['Pass_Rec']);
      $Dribbles = mysqli_real_escape_string($con,$_POST['Dribbles']);
      
      $query = "INSERT INTO `Advanced_Stats` (`pId`,`Opponent`,`Pass_Made`,`Pass_Rec`,`Dribbles`) VALUES ('".$pId."','".$Opponent."','".$Pass_Made."','".$Pass_Rec."','".$Dribbles."')";

      $result = mysqli_query($con,$query);

      if($result){
        echo 'Data Inserted Return Home by Clicking Home<br><br>';
      } else{
        die(mysqli_error($con));
        echo "<a href='TitlePage.html'>Home</a>";
      }

      //mysqli_free_result($result);
      mysqli_close($con);
     }
     ?>  

    <html>
      <head>
        <h1>Add Data to Advanced Stats</h1><br>
        <a href='TitlePage.html'>Home</a><br><br>
    </head>
    <body>   
    <style>
    	a{color:white;}
    	input {text-align:right;}
    	body{background-color:red;}   
    	h1{color:black;}
    	input{color:black;}
    	label {display: inline-block;
    			width:100px;
    			text-align: right;}
    </style> 
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>pId<input type="text" name="pid"/></label><br>
            <label>Opponent<input type="text" name="Opponent"/></label><br>
            <label>Passes Made<input type="text" name="Pass_Made"/></label><br>
            <label>Passes Recieved<input type="text" name="Pass_Rec"/></label><br>
            <label>Dribbles<input type="text" name="Dribbles"/></label><br><br>
        <br/>
            <input type="submit" value="Add new data" name="submit"/>    
        </form>
     </body>
    </html>