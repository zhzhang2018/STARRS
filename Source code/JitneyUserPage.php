<?php
/**
 * Created by PhpStorm.
 * User: zhzhang
 * Date: 1/27/18
 * Time: 2:34 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>STARRS for Colby</title>
<!--    <meta name="viewport" content="initial-scale=1.0">-->
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
<!--    <script type="text/javascript" src="GoogleMapsVariables.js"></script>-->
    <script src="JitneyUserPage.js"></script>
<!--    <script src="GoogleMaps.js"></script>-->
    <link rel="stylesheet"
          href="index.css"
          type="text/css" />
</head>
<body>

<div id="header">
    <a href="https://www.colby.edu/">
        <img src="images/colbybanner1.jpg" id= "banner1" ALT="Colby Banner" height="80"/>
    </a>
    <div id="StarrsTitleContainer">
        <h1 id="StarrsTitle">STARRS - Shuttle Tracker And Ride Request Service</h1>
    </div>
    <a href="https://www.colby.edu/">
        <img src="images/colbybanner2.jpg" id= "banner2" ALT="Colby Banner"  >
    </a>
</div>

<div id="pageTitle">
    <h1>Jitney Tracker and Request Page</h1>
</div>

<div id="main">

    <div id="linksBanner">
        <div class="linkBlock">
            <a href="index.html">
                <span class="linkBlockText">Colby shuttle tracker</span></a>
        </div>
        <div class="linkBlock">
            <a href="JitneyPage.html">
                <span class="linkBlockText">Order Jitney pickup</span></a>
        </div>
        <div class="linkBlock">
            <a href="https://www.colby.edu/securitydept/colby-transportation-services">
                <span class="linkBlockText">Security office</span></a>
        </div>
    </div>

    <div id="map">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXLCCaUcKU-3hW_63p_op4CnEg8axVZgY&callback=initMap"
                async defer></script>

    </div>

    <div class="sectionTitle">
        <h2>Current Jitney request queue</h2>
    </div>

    <?php


    ?>

    <div class="sectionTitle">
        <h2>Order Jitney Request</h2>
    </div>

    <div id="requestForm">
        <form action="JitneyUserPage.php" method="post">
            <label><p>Enter pickup location:<br>
            <textarea rows="4" cols="60" name="pickup" maxlength="256"
                      id="pickupText" class="requestText"
                      placeholder="E.g. Pugh Center, Flagship Cinema"></textarea>
            <br><span id="pickupCharLimit">0</span>/256
                </p></label>

            <label><p>Enter dropoff location:<br>
            <textarea rows="4" cols="60" name="dropoff" maxlength="256"
                      id="dropoffText" class="requestText"
                      placeholder="E.g. Walmart, Opera House"></textarea>
            <br><span id="dropoffCharLimit">0</span>/256
                </p></label>

            <label><p>How many people are traveling?<br>
            <select name="number">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
                </p></label>

            <label><p>Additional comments:<br>
            <textarea rows="4" cols="60" name="dropoff" maxlength="400"
                      id="commentText" class="requestText"
                      placeholder="E.g. Inconveniences, detailed location"></textarea>
            <br><span id="commentCharLimit">0</span>/400
                </p></label>

        </form>
    </div>

</div>

<!-- Useful links provided to the user below the map. -->
<div id="Links">
    <p>
        <a href="JitneyPage.html">
            Jitney user interface</a> <br>
        <a href="https://www.colby.edu/securitydept/colby-transportation-services/">
            Colby Transportation Services (security office webpage)</a> <br>
        <a href="http://www.colby.edu/securitydept/wp-content/uploads/sites/151/2017/09/Downtown-Shuttle-Schedule-and-Map-Sept2017.pdf">
            Colby Shuttle Schedule and Map</a> <br>
        <a href="JitneySchedule.php">
            Jitney driver shifts</a><br>
        *The shuttle only runs from Monday to Friday during school sessions.
    </p>
</div>

</body>
</html>
