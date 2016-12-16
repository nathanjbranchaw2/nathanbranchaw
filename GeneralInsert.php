<!-- This file will take the data from the given forms and update the General table with those values--!>
<?php

    if (isset($_POST['submit'])){
      $con = mysqli_connect("localhost","branchaw","211018556","basketball") or die("Could not connect");
      
      $pId = mysqli_real_escape_string($con,$_POST['pid']);
      $Hometown = mysqli_real_escape_string($con,$_POST['Hometown']);
      $Year = mysqli_real_escape_string($con,$_POST['Year']);
      $Position = mysqli_real_escape_string($con,$_POST['Position']);
      $Season = mysqli_real_escape_string($con,$_POST['Season']);
      $Date_Of_Birth = mysqli_real_escape_string($con,$_POST['Date_Of_Birth']);
      
      $query = "INSERT INTO `General` (`pId`,`Hometown`,`Year`,`Position`,`Season`,`Date_Of_Birth`) VALUES ('".$pId."','".$Hometown."','".$Year."','".$Position."','".$Season."','".$Date_Of_Birth."')";

      $result = mysqli_query($con,$query);

      if($result){
        echo 'Data Inserted Return Home by Clicking Home<br><br>';
      } else{
        echo "Data Not Inserted Return With Home Button<br><br>";
        echo "<a href='TitlePage.html'>Home</a>";
      }

      //mysqli_free_result($result);
      mysqli_close($con);
     }
     ?>  

    <html>
      <head>
        <h1>Add Data to General Information</h1><br>
        <a href='TitlePage.html'>Home</a><br><br><br>
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
            <label>Hometown<input type="text" name="Hometown"/></label><br>
            <label>Year<input type="text" name="Year"/></label><br>
            <label>Position<input type="text" name="Position"/></label><br>
            <label>Season<input type="text" name="Season"/></label><br>
            <label>Date of Birth<input type="text" name="Date_Of_Birth"/></label><br><br>
        <br/>
            <input type="submit" value="Add new data" name="submit"/>    
        </form>
     </body>
    </html>