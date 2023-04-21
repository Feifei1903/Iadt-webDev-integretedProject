<!DOCTYPE html>
<html lang="en">

<?php

require_once "./classes/Category.php";
require_once "./classes/Story.php";

$topStory = Story::findAllLimit(1,2);
$miniStories = Story::findAllLimit(4,3);
$leftStories = Story::findAllLimit(2,0);
$shortStories = Story::findAllLimit(4,7);
$topStory2 = Story::findAllLimit(1,9);
$rightStories = Story::findAllLimit(2,7);
$categoryStories1 = Story::findAllLimit(2,10);
$categoryStories2 = Story::findAllLimit(2,12);
$categoryStories3 = Story::findAllLimit(2,14);
$categoryStories4 = Story::findAllLimit(2,16);
$categoryStories5 = Story::findAllLimit(2,18);
$categoryStories6 = Story::findAllLimit(2,20);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">



    <title>News Homepage</title>
</head>

<body>
    <div class="container">

        <div class="width-12">
            <h5>CELEBRITIES</h5>
        </div>

        <div class="width-3">
            <div class="topStory">
                <?php
                    foreach ($leftStories as $story) { ?>
                    <div class="content">
                        <div class="image">
                            <img src= "<?= $story->images ?>" width="280" height="160">
                        </div>
                        <h3><?=$story->heading ?></h3>
                        <p>
                            <?= substr($story->article,0,200); ?>
                        </p>
                    </div>
                <?php } ?> 
            </div>
        </div>

        <div class="width-6">
            <div class="topStory">
                <?php
                foreach ($topStory as $story) { ?>
                <div class="content">
                    <div class="image">
                        <img src= "<?= $story->images ?>">
                    </div>
                    <a href="article.php?id=<?= $story->id?> "> <h1><?=$story->heading ?></h1> </a>
                    <p>
                        <?= substr($story->article,0,200); ?>
                    </p>
                    <h5>BY <?=$story->author ?></h5>
                </div>
                <?php } ?> 
            </div>
        </div>

        <div class="width-3">
            <?php
                foreach ($miniStories as $story) { ?>
                <div class="miniStory">
                <h5>BY <?=$story->author ?></h5>
                <p>
                   <?= substr($story->article,0,187); ?>
                </p>
            </div>
             <?php } ?>
        </div>

        <div class="width-12">
            <h3>POLITICS</h3>
        </div>

                <?php
                    foreach ($shortStories as $story) { ?>
                    
                    <div class="width-3">
                        <div class="shortStory">
                                <div class="content">
                                    <div class="image">
                                        <img src= "<?= $story->images ?>" width="280" height="160">
                                    </div>
                                    <h3><?=$story->heading ?></h3>
                                    <p>
                                        <?= substr($story->article,0,156); ?>
                                    </p>
                                </div>
                                </div>
                    </div>
                <?php } ?> 
        
        <div class="width-12">
            <h3>SPORTS</h3>
        </div>

        <div class="width-6">
            <div class="topStory">
                <?php
                foreach ($topStory2 as $story) { ?>
                <div class="content">
                    <div class="image">
                        <img src= "<?= $story->images ?>">
                    </div>
                    <h1><?=$story->heading ?></h1>
                    <p>
                        <?= substr($story->article,0,200); ?>
                    </p>
                    <h5>BY <?=$story->author ?></h5>
                </div>
                <?php } ?> 
            </div>
        </div>

        <div class="width-3">
            <div class="topStory">
                <?php
                    foreach ($rightStories as $story) { ?>
                    <div class="content">
                        <div class="image">
                            <img src= "<?= $story->images ?>" width="280" height="160">
                        </div>
                        <h3><?=$story->heading ?></h3>
                        <p>
                            <?= substr($story->article,0,200); ?>
                        </p>
                    </div>
                <?php } ?> 
            </div>
        </div>
       
        <div class="width-3">
            <div class="topStory">
                <?php
                    foreach ($rightStories as $story) { ?>
                    <div class="content">
                        <div class="image">
                            <img src= "<?= $story->images ?>" width="280" height="160">
                        </div>
                        <h3><?=$story->heading ?></h3>
                        <p>
                            <?= substr($story->article,0,200); ?>
                        </p>
                    </div>
                <?php } ?> 
            </div>
        </div>

        <div class="width-3">
            <h4>EDUCATION</h4>
            <div class="image">
                <img src="images/news images/education.PNG">
            </div>

            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories1 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>

                <?php } ?>
                </div>
            </div>
            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories2 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>

                <?php } ?>
                </div>
            </div>
        </div>

        <div class="width-3">
            <h4>INVESTIGATIONS</h4>
            <div class="image">
                <img src="images/news images/tattoo woman.PNG">
            </div>

            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories3 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>

                <?php } ?>
                </div>
            </div>
            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories4 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>
                <?php } ?>
                </div>
            </div>
        </div>

        <div class="width-3">
            <h4>L.A.AFFAIRS</h4>
            <div class="image">
                <img src="images/news images/cartoon people.PNG">
            </div>

            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories5 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>

                <?php } ?>
                </div>
            </div>
            <div class="headings">
                <div class="heading">
                <?php
                    foreach ($categoryStories6 as $story) { ?>
                    <h3><?= $story->heading ?>
                    </h3>

                <?php } ?>
                </div>
            </div>
        </div>

        <div class="width-3">
            <h4>BUSINESS</h4>
            <div class="image">
                <img src="images/news images/newBorn.PNG">
            </div>

            <div class="headings">
                <div class="heading">
                    <h3>Former UCLA lecturer accused of making violent threats ruled mentally unfit to stand trial
                    </h3>

                    <h3>Former UCLA lecturer accused of making violent threats ruled mentally unfit to stand trial</h3>
                </div>
            </div>
            <div class="headings">
                <div class="heading">
                    <h3>Former UCLA lecturer accused of making violent threats ruled mentally unfit to stand trial
                    </h3>
                    <h3>Former UCLA lecturer accused of making violent threats ruled mentally unfit to stand trial</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>