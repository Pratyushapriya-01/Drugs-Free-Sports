<?php
include 'config.php';
$conn = OpenConn();
echo "Connected Successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drugs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Articles
      <i class="fa fa-caret-down"></i>
    </button>
  

        <form method="Post">
        <input type="text" placeholder="Search.."name="search">
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
      </div>
      <?php
      if(isset($_POST["submit"]))
     {
         $name=mysqli_real_escape_string($conn,$_POST["search"]);
         $stn="Select * from prohibited drugs where name='$name'";
        if($q=mysqli_query($conn,$stn))
        {
         while($row=mysqli_fetch_assoc($q))
         {
            echo $row["name"];
         }
     }
    }
    ?>
</body>
</html>