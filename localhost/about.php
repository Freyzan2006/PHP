<?php 
    $title = "About";
    require_once("components/header.php");
?>

<main>
    <h1><?= $title ?></h1>
    <p class = "alert alert-info">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, in 
        id. Magni voluptatem culpa perspiciatis ipsum aliquid nihil quas, 
        ipsam soluta maxime. Natus vitae repellat quibusdam suscipit error 
        porro nisi. 
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, odio 
        laudantium eveniet rem voluptate cum vero dignissimos a, labore natus 
        aut rerum. Perferendis tempora voluptatem tenetur dolores cumque, dolore 
        earum!
    </p>

    <form action = "request_page/about_request.php" method = "post">
        <input class="form-control" type = "email" name = "email" placeholder = "Введите Email"><br>
        <textarea class="form-control" name = "message" placeholder = "Введите сообщение"></textarea><br>
        <button type = "submit" class = "btn btn-success" >Отравить</button>
    </form>
</main>

<?php require_once("components/footer.php"); ?>