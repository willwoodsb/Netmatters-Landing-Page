<?php  
// setting subtitle is optional 
$pageTitle = "";
if (!empty($subtitle)) {
    $pageTitle = $subtitle;
} else {
    $pageTitle = $title;
}
?>

<!-- Title section for the page -->
<div class="sat-title__wrapper1">
    <div class="is-collapsed-small-screen sat-title__links width">
        <p class="sat-title__item"><a href="index.php">Home</a></p>
        <p class="sat-title__item slash">/</p>
        <p class="sat-title__item"><?php echo $pageTitle; ?></p>
    </div>
</div>
<div class="sat-title__wrapper2">
    <div class="sat-title__block width">
        <h1><?php echo $pageTitle; ?></h1>
    </div>
</div>