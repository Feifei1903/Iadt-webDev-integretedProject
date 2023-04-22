<?php
$mainStory = Story::findById($_GET["id"]);
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