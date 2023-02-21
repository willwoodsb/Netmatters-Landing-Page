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
                    <a href="#" class="office-tel-num"><?php echo $loc["tel-num"] ?></a><br>
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


<?php
include('inc/footer.php');

unset($maps);
?>