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
            'image_filename' => 'picture1.jpg'
        ],
        [
            'photographer_name' => 'Joseph Corl',
            'photographer_url' => 'https://unsplash.com/@jcorl',
            'image_filename' => 'picture2.jpg'
        ],
        [
            'photographer_name' => 'Austin Curtis',
            'photographer_url' => 'https://unsplash.com/@afcurtis',
            'image_filename' => 'picture3.jpg'
        ],
        [
            'photographer_name' => 'Ellicia',
            'photographer_url' => 'https://unsplash.com/@ellicia_',
            'image_filename' => 'picture4.jpg'
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
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link rel="stylesheet" href="main.css?v7">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name'] ?></h1>
    <div id='gallery'>
        <?php foreach ($config['unsplash_categories'] as $category): ?>
            <div>
                <h2><?php echo $category ?></h2>
                <img src="<?php echo 'https://source.unsplash.com/300x200/?' . $category; ?>" alt="<?php echo $category; ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <h1><?php echo count($config['local_images']) . ' Large Images'; ?></h1>
    <div id="large-images">
        <?php foreach ($config['local_images'] as $image): ?>
            <img src="<?php echo 'images/' . $image['image_filename']; ?>" alt="<?php echo $image['photographer_name']; ?>">
            <h3 class='photographer'><a href="<?php echo $image['photographer_url']; ?>"><?php echo $image['photographer_name']; ?></a></h3>
        <?php endforeach; ?>
    </div>
</body>
</html>