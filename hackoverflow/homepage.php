<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "drugs";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}


?>
<html>
<head>
    <meta charset="utf 8">
    <tittle></tittle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
            
<style>
    body{
           background-color:rgba(118, 211, 195, 0.993);
       }
</style>
    
</head>
<br>

    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <body>
                    <nav id="navbar">
                        <div id="logo">
                            <img src =icon.png
                                alt="icon" width="50px" height="50px">
                        </div>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link"  href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="homepage.php">About</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="/articles.html" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Articles
                            </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Doping.php" target="blank">Doping</a></li>
                                <li><a class="dropdown-item" href="TUE.php" target="blank">TUE</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>
                            </button>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success mx-2" type="submit">Search</button>
                    </form>
                    <?php
        if(isset($_POST['submit']))
        {
            $name=mysqli_real_escape_string($conn,$_POST['search']);
            $stn="select * from prohibited_drugs where Name=$name;";
            $res=mysqli_query($conn,$stn);
            if(!$res){
                echo "False returned";
            }
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    echo $row['Name'];
                    echo "<br/>";
                }
            }
            else{
                echo "No data found";
            }
        }
        ?>
                </div>
            </div>
        </nav>
        
            <h1 class="h.primary">SAY "NO" TO DRUGS</h1>
            <p>
                Drugs affect the way your body and mind function; they can change how you feel, think and behave. People take drugs for different reasons and in different ways. Find out about legal and illegal drugs.Legally manufactured drugs usually list all their ingredients, so you know what you are taking. Street drugs can contain almost anything as makers often add impurities to make them go further. You cannot be sure what you are taking.Using drugs to improve performance in sport may lead to an athlete being banned and may also harm their health. Sporting authorities have banned many drugs and other substances, not just because they might give an athlete an unfair advantage but also because of the wider health risks.

                Using drugs in sport undermines values like fair play and teamwork. When sportspeople use drugs, they not only might damage their own health, they also give sport a bad reputation and set a poor example to others.
            </p>
        </section>

    
       <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
    
                <div class="carousel-inner my-1">
                    <div class="carousel-item active">
                        <img src="https://source.unsplash.com/1600x900/?drugs" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                    </div>
                    <div class="carousel-item my-1">
                        <img src="https://source.unsplash.com/1600x900/?medicines" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                    <div class="carousel-item my-1">
                        <img src="https://source.unsplash.com/1600x900/?doping" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    
      
    
    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
    
        <Option 2: Separate Popper and Bootstrap JS>
    
            <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script> -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->
    

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark"></nav>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
            <li class="nav-item active">
                            <a class="nav-link" href="#">Contact Us</a>
                            <footer>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
                            </footer>
                        </li>
            </li>

            </ul>
</body>
</html>