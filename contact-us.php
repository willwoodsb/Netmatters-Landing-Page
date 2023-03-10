<?php

$title = "Contact Us";
$subtitle = "Our Offices";
$maps = true;

include('inc/header.php');
include('inc/satellite-title-view.php');
include('inc/locations.php');

$subtitle = ""; //unset to avoid affecting the !empty conditional on other pages
if (isset($_SESSION['contact-errors'])) {
    if (!empty(implode("", $_SESSION['contact-errors']))) {
        $contactErrors = $_SESSION['contact-errors'];
    } 
    $_SESSION['contact-errors'] = null;
}

$contactValues = [];
if (isset($_SESSION["contact-values"])) {
    $contactValues = $_SESSION["contact-values"];
    $_SESSION["contact-values"] = null;
}

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
<section class="grey contact-form">
    <div class="width contact-grid">
        <div id="support" class="contact-grid__child">
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

        <div class="dark-grey contact-grid__child" id="contact-form">
            <form method="post" class="form" action="inc/contact-form.php">
                <div class="form__item">
                <label for="name">Your Name<span style="color: darkred;">*</span></label>
                <input type="text" 
                    name="name" 
                    id="name" 
                    value="<?php if (isset($contactValues["name"])) echo $contactValues["name"]; ?>"
                    required
                >
                <?php if (isset($contactErrors["name"])) { 
                    if (!empty($contactErrors["name"])) {?>
                    <div class="submit-message">
                        <p><?php echo $contactErrors["name"]; ?></p>
                    </div>
                <?php } }?>
                </div>
                <div class="form__item">
                <label for="name">Company Name</label>
                <input type="text" name="cname" id="cname">
                </div>
                <div class="form__item">
                <label for="email">Your Email<span style="color: darkred;">*</span></label>
                <input type="text" 
                    name="email" 
                    id="email" 
                    value="<?php if (isset($contactValues["email"])) echo $contactValues["email"]; ?>"
                    required
                >
                <?php if (isset($contactErrors["email"])) { 
                    if (!empty($contactErrors["email"])) {?>
                    <div class="submit-message">
                        <p><?php echo $contactErrors["email"]; ?></p>
                    </div>
                <?php } }?>
                </div>
                <div class="form__item">
                <label for="tel-num">Your Telephone Number<span style="color: darkred;">*</span></label>
                <input type="text" 
                    name="tel-num" 
                    id="tel-num" 
                    value="<?php if (isset($contactValues["tel-num"])) echo $contactValues["tel-num"]; ?>"
                    required 
                    pattern="^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$"
                >
                <?php if (isset($contactErrors["tel-num"])) { 
                    if (!empty($contactErrors["tel-num"])) { ?>
                    <div class="submit-message">
                        <p><?php echo $contactErrors["tel-num"]; ?></p>
                    </div>
                <?php } }?>
                </div>
                <div class="form__item">
                <label for="subject" placeholder="All Articles">Subject<span style="color: darkred;">*</span></label>
                <input type="text" 
                    name="subject" 
                    id="subject" 
                    value="<?php if (isset($contactValues["subject"])) echo $contactValues["subject"]; ?>"
                    required
                >
                <?php if (isset($contactErrors["subject"])) {
                    if (!empty($contactErrors["subject"])) {?>
                    <div class="submit-message">
                        <p><?php echo $contactErrors["subject"]; ?></p>
                    </div>
                <?php }  }?>
                </div>
                <div class="form__item">
                <label for="message" placeholder="All Articles">Message<span style="color: darkred;">*</span></label>
                <textarea type="text" 
                    name="message" 
                    id="message" 
                    rows="4" 
                    cols="50"
                    required
                ><?php if (isset($contactValues["message"])) echo $contactValues["message"]; ?></textarea>
                <?php if (isset($contactErrors["message"])) { 
                    if (!empty($contactErrors["message"])) {?>
                    <div class="submit-message">
                        <p><?php echo $contactErrors["message"]; ?></p>
                    </div>
                <?php } }?>
                </div>
                <div class="form__item">               
                <label class="consent-box">
                    <input type="checkbox" name="consent" id="consent">
                    <span class="checkmark"></span>
                </label>  
                <a href="!#">Please tick this box if you wish to receive marketing information from us. Please see our <span>Privacy Policy</span> for more information on how we keep your data safe.</a>
                </div>
                <div class="form__item"> 
                    <input type="submit" value="Send Enquiry" class="button">
                    <p><span style="color: darkred;">*</span> Fields Required</p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include('inc/footer.php');

unset($maps);
?>