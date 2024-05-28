<?php

/*******w******** 
    
    Name: Lanzema Leche
    Date: 2024-05-19
    Description: Intro to PHP Assignment

****************/
    
?>

<?php
$config = [
    'gallery_name' => 'City Gallery',
    'unsplash_categories' => ['Building', 'Flower', 'Wild Animal', 'Bug', 'Field', 'Grasshopper', 'Leaf', 'Water'],
    'local_images' => [
        ['image' => 'HamZa_NOUASRIA.jpg', 'photographer' => 'HamZa NOUASRIA', 'unsplash_url' => 'https://unsplash.com/@hamza/likes'],
        ['image' => 'Joshua_Sortino.jpg', 'photographer' => 'Joshua Sortino', 'unsplash_url' => 'https://unsplash.com/@joshua/likes'],
        ['image' => 'Tom_Barrett.jpg', 'photographer' => 'Tom Barrett', 'unsplash_url' => 'https://unsplash.com/@wistomsin'],
        ['image' => 'Kae_Ng.jpg', 'photographer' => 'Kae Ng', 'unsplash_url' => 'https://unsplash.com/@ffkae']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['gallery_name']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<!-- Display Gallery Name -->
<h1><?php echo $config['gallery_name']; ?></h1>

<!-- Displaying Unsplash Images -->
<div id="gallery" class="grid-container">
    <?php foreach ($config['unsplash_categories'] as $category): ?>
        <div class="grid-item">
            <h2><?php echo ucfirst($category); ?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo urlencode($category); ?>" alt="<?php echo $category; ?> image">
        </div>
    <?php endforeach; ?>
</div>

<!-- Displaying Local Images -->
<h1><?php echo count($config['local_images']); ?> Large Images </h1>
<div id="large-images">
    <?php foreach ($config['local_images'] as $image): ?>
        <div>
            <img src="images/<?php echo $image['image']; ?>" alt="Image">
            <h3 class="photographer">
                <a href="<?php echo $image['unsplash_url']; ?>"><?php echo $image['photographer']; ?></a>
            </h3>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

