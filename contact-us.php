<?php
$title = "Contact Us";
$subtitle = "Our Offices";
$maps = true;

include('inc/header.php');
include('inc/satellite-title-view.php');
include('inc/locations.php');

$subtitle = ""; //unset to avoid affecting the !empty conditional on other pages

?>

<section class="our-offices-wrapper grey">
    <div class="our-offices width">

        <!-- loop through the different locations accessing data from locations.php -->
        <?php foreach ($locations as $key => $loc) { ?>

        <div class="our-offices__child">
            <div class="our-offices__child--content">  
                <a href="#" class="img-link"><img src="<?php echo $loc["img_path"]; ?>" alt="<?php echo $loc["location"] ?>"></a>
                <div class="our-offices__child--address">
                    <a href="#"><h3><?php echo $loc["location"] ?></h3></a>
                    <!-- print address -->
                    <ul>
                    <?php foreach($loc["address"] as $line) { ?>
                        <li>
                        <?php 
                        echo $line; 
                        if ($line != end($loc["address"])) {
                            echo ",";
                        }
                        ?>
                        </li>
                    <?php } ?>
                    </ul>
                    <a href="#" class="office-email-tel"><?php echo $loc["tel-num"] ?></a><br>
                    <input type="button" value="View More" class="button">
                </div>
            </div>
            <div class="our-offices__child--map">
                <div class="map" id="<?php echo $key ?>"></div>
            </div>            
        </div>

        <?php } ?> 
        <!-- end of card -->
    </div>
</section>

<!-- Contact Form -->
<section class="grey">
    <div class="width">
        <div id="support">
            <p>Email us on:</p>
            <p><a href="#" class="office-email-tel">sales@netmatters.com</a></p>
            <p>Business Hours:</p>
            <p>Monday - Friday 07:00 - 18:00</p>
            <p id="out-of-hours"><span>Out of Hours IT Support</span><span class="icon"> </span></p>
            <div id="out-of-hours__info" class="collapse">
                <p class="not-bold">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                <p>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</p>
                <p class="not-bold">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
            </div>
        </div>

        <form action="#" method="post">
            <label for="name">Your Name<span style="color: red;">*</span></label>
            <input type="text" name="name" id="name">

            <label for="company">Company</label>
            <input type="text" name="company" id="company">
        </form>
    </div>
</section>

<?php
include('inc/footer.php');

unset($maps);
?>