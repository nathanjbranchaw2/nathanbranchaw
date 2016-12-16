<!-- This file will take the data from the given forms and update the Traditional_Stats table with those values--!>
<?php

    if (isset($_POST['submit'])){
      $con = mysqli_connect("localhost","branchaw","211018556","basketball") or die("Could not connect");
      
      $pId = mysqli_real_escape_string($con,$_POST['pid']);
      $Opponent = mysqli_real_escape_string($con,$_POST['Opponent']);
      $Mins = mysqli_real_escape_string($con,$_POST['Mins']);
      $Points = mysqli_real_escape_string($con,$_POST['Points']);
      $Turnovers = mysqli_real_escape_string($con,$_POST['Turnovers']);
      $Rebounds = mysqli_real_escape_string($con,$_POST['Rebounds']);
      $Def_Reb = mysqli_real_escape_string($con,$_POST['Def_Reb']);
      $Off_Reb = mysqli_real_escape_string($con,$_POST['Off_Reb']);
      $FT_Made = mysqli_real_escape_string($con,$_POST['FT_Made']);
      $FT_Att = mysqli_real_escape_string($con,$_POST['FT_Att']);
      $Three_Pt_Made = mysqli_real_escape_string($con,$_POST['Three_Pt_Made']);
      $Three_Pt_Att = mysqli_real_escape_string($con,$_POST['Three_Pt_Att']);
      $Steals = mysqli_real_escape_string($con,$_POST['Steals']);
      $Blocks = mysqli_real_escape_string($con,$_POST['Blocks']);
      
      $query = "INSERT INTO `Traditional_Stats` (`pId`,`Opponent`,`Mins`,`Points`,`Turnovers`,`Rebounds`,`Def_Reb,`Off_Reb`,`FT_Made`,`FT_Att`,`3_Pt_Made`,`3_Pt_Att`,`Steals`,`Blocks`) VALUES ('".$pId."','".$Opponent."','".$Mins."','".$Points."','".$Turnovers."','".$Rebounds."','".$Def_Reb."','".$Off_Reb."','".$FT_Made."','".$FT_Att."','".$Three_Pt_Made."','".$Three_Pt_Att."','".$Steals."','".$Blocks."')";

      $result = mysqli_query($con,$query);

      if($result){
        echo 'Data Inserted Return Home by Clicking Home<br><br>';
        
      } else{
        echo "Data Not Inserted Return With Home Button<br><br>";
        echo "<a href='TitlePage.html'>Home</a>";
      }
      
      mysqli_close($con);
     }
     ?>  

    <html>
      <head>
        <h1>Add Data to Traditional Stats</h1><br>
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
            <label>Minutes<input type="text" name="Mins"/></label><br>
            <label>Points<input type="text" name="Points"/></label><br>
            <label>Turnovers<input type="text" name="Turnovers"/></label><br>
            <label>Rebounds<input type="text" name="Rebounds"/></label><br>
            <label>Defensive Rebounds<input type="text" name="Def_Reb"/></label><br>
            <label>Offensive Rebounds<input type="text" name="Off_Reb"/></label><br>
            <label>Free Throws Made<input type="text" name="FT_Made"/></label><br>
            <label>Free Throws Attempted<input type="text" name="FT_Att"/></label><br>
            <label>3 Pointers Made<input type="text" name="Three_Pt_Made"/></label><br>
            <label>3 Pointers Attempted<input type="text" name="Three_Pt_Att"/></label><br>
            <label>Steals<input type="text" name="Steals"/></label><br>
            <label>Blocks<input type="text" name="Blocks"/></label><br><br>
        <br/>
            <input type="submit" value="Add new data" name="submit"/>    
        </form>
     </body>
    </html>