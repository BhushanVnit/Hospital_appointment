<?php

include 'partials/_bbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <br>
    <title>Bhirud Hospital, Bhusawal</title>
</head>

<body style="background-color : #EEEEEE">
    <!-- Website heading -->
    <h1>
        Bhirud Hospital, Bhusawal <br>
    </h1>
    <h2> <small class="text-muted" style="margin-left: 70px">Dr. Parag Surendra Bhirud</small> </h2>
    <h5> <small class="text" style="margin-left: 120px;font-size: 15px">M.B.B.S | M.S. (General Surgery) </small> </h5>
    <h5> <small class="text" style="margin-left: 100px;font-size: 15px">Mch ( Urology) | MRCS (Edinburgh) </small> </h5>

    <br>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link active" style="margin-left: 15rem; font-size: 21px;letter-spacing: 2px;" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" style="margin-left: 3rem; font-size: 21px" href="about_us.php">About Us</a>
                    <a class="nav-link" style="margin-left: 3rem; font-size: 21px;letter-spacing: 2px;" href="gallery.php">Gallery</a>
                    <a class="nav-link" style="margin-left: 3rem; font-size: 21px;letter-spacing: 2px;" href="querry.php">Ask a question</a>
                    <a class="nav-link" style="margin-left: 3rem; margin-right: 2rem; font-size: 21px;letter-spacing: 2px;" href="contact.php">Contact us</a>
                    <button type="button" class="btn btn-dark btn-outline-info"><a class="nav-link" style="margin-left: 0rem; font-size: 21px" href="appointment1.php">Book an appointment</a>
                    </button>


                </div>
            </div>
        </div>
    </nav>

    <br>

    <!--Appointment form  -->

    <div class="container shadow p-3 bg-white " style="align-items: center; display :flex; flex-direction :column ; width : 600px; border-radius : 40px; ">

        <!-- <div class="container p-3" style="width:700px;"> -->
        <h2>--: Bhirud Hospital, Bhusawal :--</h2>
        <br>
        <h4 class="text-muted">choose your convinient slot </h4>
        
        <div class="btn-group p-3" role="group" aria-label="Basic example"  >
  <button type="button" class="btn btn-dark p-2" style="background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);color: #32caea;">Morning Slot</button>

<div class="vl" style = "border-left: 6px solid black;
  height: 50px;"></div>

  <button type="button" class="btn btn-dark p-2" style="background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);color: #32caea;">Evening Slot</button>
</div>

        <form action="/Hospital-appointment/appointment2.php" method="post">

            

         <div class="container" style ="align-items: center; display :flex; flex-direction :row ; padding : 10px; "> 

            <li> <button type="button" class="btn btn-outline-success">10:00 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">10:10 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">10:20 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">10:30 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">10:40 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">10:50 AM</button>
            </li>
           

        </div>
         <div class="container" style ="align-items: center; display :flex; flex-direction :row ; padding : 10px; "> 

            <li> <button type="button" class="btn btn-outline-success">11:00 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">11:10 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">11:20 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">11:30 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">11:40 AM</button>
            </li>
            <li> <button type="button" class="btn btn-outline-success">11:50 AM</button>
            </li>

        </div>

          <center>
                <button type="submit" class="btn col-md-12" style="background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);color: #32caea;
                            "> Submit
                </button>
            </center>
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>