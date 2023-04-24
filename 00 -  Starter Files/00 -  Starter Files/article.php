<?php
require_once "./etc/config.php";
$id = $_GET["id"];
$mainStory = Story::findById($_GET["id"]);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<h3><?=$mainStory->article ?></h3>
<?php } ?>

</head>