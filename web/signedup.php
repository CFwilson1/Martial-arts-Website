<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Martial-arts.css">
    <title>Dubo\AboutUs</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Dubo martial arts</h1>
        </div>
        <nav>
        <ul>
            <li><a href="HomePage.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="about_us.html">About Us</a></li>
            <li><a href="Martial-arts.html">Classes</a></li>
        </ul>
        </nav>
    </header>
    <section>
        <h2>
            prices
        </h2>
        <ul>
            <li>Basic (1 martial art – 2 sessions per week) – monthly fee £25.00</li>
            <li>Intermediate (1 martial art – 3 sessions per week) – monthly fee £35.00</li>
            <li>Advanced (any 2 martial arts – 5 sessions per week) – monthly fee £45.00</li>
            <li>Elite (Unlimited classes) £60.00</li>
            <li>Private martial arts tuition – per hour £15.00</li>
            <li>Junior membership – can attend all-kids martial arts sessions £25.00</li>
        </ul>
        <h3>specialist fitness courses</h3>
        <ul>
            <li>Six-week beginners’ self-defence course (2 × 1-hour session per week) £180.00</li>
            <li>Use of fitness room – per visit £6.00</li>
            <li>Personal fitness training – per hour £35.00</li>
        </ul>
    </section>
    <?php
    if(isset($_SESSION['fname'])){
        echo'
            <div class="Membership">
            "<h2>Your current membership is non existant"</h2>;
            "<h2>Your current fitness course is non existant"</h2>
            </div>';
    }?>

    <h1>Thank you for signing up to Dubo martial arts</h1>