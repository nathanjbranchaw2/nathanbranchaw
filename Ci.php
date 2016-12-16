<!-- This file will take the data from the given forms and update the Combine_Data table with those values--!>
<?php

    if (isset($_POST['submit'])){
      $con = mysqli_connect("localhost","branchaw","211018556","basketball") or die("Could not connect");
      
      $pId = mysqli_real_escape_string($con,$_POST['pid']);
      $Season = mysqli_real_escape_string($con,$_POST['Season']);
      $Height = mysqli_real_escape_string($con,$_POST['Height']);
      $Wingspan = mysqli_real_escape_string($con,$_POST['Wingspan']);
      $Standing_Reach = mysqli_real_escape_string($con,$_POST['Standing_Reach']);
      $Weight = mysqli_real_escape_string($con,$_POST['Weight']);
      $Hand_Size = mysqli_real_escape_string($con,$_POST['Hand_Size']);
      $Three_Step_Vertical = mysqli_real_escape_string($con,$_POST['Three_Step_Vertical']);
      $Standing_Vertical = mysqli_real_escape_string($con,$_POST['Standing_Vertical']);
      $Vertical_Jump = mysqli_real_escape_string($con,$_POST['Vertical_Jump']);
      $Three_Quarter_Sprint = mysqli_real_escape_string($con,$_POST['Three_Quarter_Sprint']);
      $Lane_Agility = mysqli_real_escape_string($con,$_POST['Lane_Agility']);
      $Max_Bench = mysqli_real_escape_string($con,$_POST['Max_Bench']);
      $Reaction_Shuttle = mysqli_real_escape_string($con,$_POST['Reaction_Shuttle']);
      
      $query = "INSERT INTO `Combine_Data` (`pId`,`Season`,`Height`,`Wingspan`,`Standing_Reach`,`Weight`,`Hand_Size`,`3_Step_Vertical`,`Standing_Vertical`,`Vertical_Jump`,`Three_Quarter_Sprint`,`Lane_Agility`,`Max_Bench`,`Reaction_Shuttle`) VALUES ('".$pId."','".$Season."','".$Height."','".$Wingspan."','".$Staning_Reach."','".$Weight."','".$Hand_Size."','".$Three_Step_Vertical."','".$Standing_Vertical."','".$Vertical_Jump."','".$Three_Quarter_Sprint."','".$Lane_Agility."','".$Max_Bench."','".$Reaction_Shuttle."')";

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
        <h1>Add Data to Combine Data</h1><br>
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
            <label>Season<input type="text" name="Season"/></label><br>
            <label>Height (in.)<input type="text" name="Height"/></label><br>
            <label>Wingspan (in.)<input type="text" name="Wingspan"/></label><br>
            <label>Standing Reach (in.)<input type="text" name="Standing_Reach"/></label><br>
            <label>Weight<input type="text" name="Weight"/></label><br>
            <label>Hand Size<input type="text" name="Hand_Size"/></label><br>
            <label>3 Step Vertical<input type="text" name="Three_Step_Vertical"/></label><br>
            <label>Standing Vertical<input type="text" name="Standing_Vertical"/></label><br>
            <label>Vertical Jump<input type="text" name="Vertical_Jump"/></label><br>
            <label>3/4 Court Sprint<input type="text" name="Three_Quarter_Sprint"/></label><br>
            <label>Land Agility<input type="text" name="Lane_Agility"/></label><br>
            <label>Max Bench<input type="text" name="Max_Bench"/></label><br>
            <label>Reaction Shuttle<input type="text" name="Reaction_Shuttle"/></label><br><br>
        <br/>
            <input type="submit" value="Add new data" name="submit"/>    
        </form>
     </body>
    </html>