<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Dispenser</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="ad-container">
        <?php
        // Define the path to the ads directory
        $adsDirectory = __DIR__ . '/ads';

        // Get all ad files
        $adFiles = glob($adsDirectory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        if ($adFiles) {
            // Pick a random ad
            $randomAd = $adFiles[array_rand($adFiles)];

            // Extract ad filename
            $adFilename = basename($randomAd);

            // Display the ad
            echo '<img src="ads/' . $adFilename . '" alt="Advertisement">';
        } else {
            echo '<p>No ads available.</p>';
        }
        ?>
    </div>
</body>

</html>