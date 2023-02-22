<?php
include('inc/locations.php');
?>
<!-- Script to initialise maps plugin -->
<script>
<?php foreach ($locations as $key => $loc) { ?>
    var <?php echo $key; ?> = 
        L.map(<?php echo '\'' . $key . '\''; ?>, { 
            scrollWheelZoom: false,
            attributionControl: false
        })
        .setView(<?php echo "[" . implode(", ", $loc["coordinates"]) . "]"; ?>, 15);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(<?php echo $key; ?>);

    // set marker with popup containing address
    L.marker(<?php echo "[" . implode(", ", $loc["coordinates"]) . "]"; ?>).addTo(<?php echo $key ?>)
        .bindPopup(`
            <?php        
            foreach ($loc["address"] as $line) {
                echo $line;
                if ($line != end($loc["address"])) {
                    echo "<br>";
                }
            }          
            ?>
        `);

<?php } ?>

</script>