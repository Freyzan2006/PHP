<?php 
    $title = "Main";
    require_once("components/header.php");
?>

<main>
    <h1><?= $title ?></h1>
    
    <div class="d-flex flex-wrap gap-5">
        <?php 
            for ($i = 1; $i <= 5; $i++)
                include("bloks/card.php");
        ?>
    </div>


</main>

<?php require_once("components/footer.php"); ?>