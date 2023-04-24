<!DOCTYPE html>
<html lang="en">

<?php

require_once "./classes/Story.php";

try{

    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        throw new Exception("Invalid request method");
    }
    if (!array_key_exists('id', $_GET)) {
        throw new Exception("Invalid request--missing id");
    }
    $id = $_GET['id'];
    $story = Story::findById($id);
    if ($story === null) {
        throw new Exception("Invalid request--unknown id");
    }
}
catch (Exception $ex) {
    die($ex->getMessage());
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
<style>
    <?php include 'css/article.css'; ?>
</style>

    <div class="container">
         <div class="content">
             <h1><?=$story->heading ?></h1>
             <h4><?=$story->sub_heading ?></h4> 
                <div class="image">
                    <img src= "<?= $story->images ?>" width="750" height="450">
                </div>
             <h5>BY <?=$story->author ?> | <?=$story->published_date ?></h5>
             <p>
              <?= substr($story->article,0,9500); ?>
             </p>
         </div>
    </div>

    

</head>
</html>