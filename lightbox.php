<?php

/*******w******** 
    
    Name: Hung-Sheng Lee
    Date: May 15th, 2024
    Description:

****************/

$config = [

    'gallery_name' => 'Life Gallery',
 
    'unsplash_categories' => ['Hill','Basketball','Street','Animal', 'Human', 'Space'],
 
    'local_images' => [
        [
            'photographer_name' => 'Takahiro Taguchi',
            'photographer_url' => 'https://unsplash.com/@tak_tag',
            'image_filename' => 'picture1.jpg',
            'image_thumbnail_filename' => 'picture1_thumbnail.jpg'
        ],
        [
            'photographer_name' => 'Joseph Corl',
            'photographer_url' => 'https://unsplash.com/@jcorl',
            'image_filename' => 'picture2.jpg',
            'image_thumbnail_filename' => 'picture2_thumbnail.jpg'
        ],
        [
            'photographer_name' => 'Austin Curtis',
            'photographer_url' => 'https://unsplash.com/@afcurtis',
            'image_filename' => 'picture3.jpg',
            'image_thumbnail_filename' => 'picture3_thumbnail.jpg'
        ],
        [
            'photographer_name' => 'Ellicia',
            'photographer_url' => 'https://unsplash.com/@ellicia_',
            'image_filename' => 'picture4.jpg',
            'image_thumbnail_filename' => 'picture4_thumbnail.jpg'
        ]
    ]
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link rel="stylesheet" href="main.css?v7">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name'] ?></h1>

    <div id='gallery'>
        <?php foreach ($config['local_images'] as $image): ?>
            
            <div class='image'>
                <h2><?php echo $image['photographer_name']; ?></h2>
                <a href='<?php echo 'images/' . $image['image_filename']; ?>'>
                    <img src="<?php echo 'images/' . $image['image_thumbnail_filename']; ?>" alt="<?php echo $image['photographer_name']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>
</body>
</html>