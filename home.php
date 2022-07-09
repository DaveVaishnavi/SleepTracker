<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLEEPTRACKER</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <a href="#" class="logo">SLEEPTRACKER</a>
        <ul>
            <li><img src="assets/dp_image.jpg" alt="Not Available"></li>
            <li><?php echo $_SESSION['user'];?></li>
        </ul>
    </header>
    <div class="sidebar">
        <img src="assets/Logo.png" alt="Not Available">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">Stats</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="logout.php">Log-Out</a></li>
        </ul>
    </div>
    <h1 id="topHeading">Track Your Daily Sleeping Time</h1>
    <div class="container">
        <div class="line">
            <h2>How Many Hours Do You <span class="sleep">Slept</span> Today ?</h2>
        </div>
        <div class="slTime">
            <h2> When do you sleep :  </h2>
            <input type="time" name="Sleeping_Time" id="Sleeping_Time">
        </div>
        <div class="wkTime">
            <h2>When do you Woke : </h2>
            <input type="time" name="Wake_time" id="Wake_time">
        </div>
        <div class="date">
            <h2 id="showDate"></h2>
            <button id="submitBTN">Submit</button>
        </div>
    </div>
    <h1 class="middle">Last 10 Day's Sleeping Time : </h1>
    <div class="cards">
        <div class="maincard">
            <h3>Date : </h3>
            <h3>Slept At : </h3>
            <h3>Woke At : </h3>
            <h3>Sleeping Time : </h3>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
        <div class="card">
            <div id="date1">
                29/4/2022,Sunday
            </div>
            <div id="sleep">
                9:00 pm
            </div>
            <div id="wake">
                5:00 am
            </div>
            <div id="sleepTime">
                8 Hours
            </div>
        </div>
    </div>
    <script src="scripts2.js"></script>
</body>
</html>
