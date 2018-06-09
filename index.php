<?php $data = file_get_contents("db.json");
$products = json_decode($data, true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="header">
    <h1 class="title"> <?php echo $products['title'] ?> </h1>
    <nav><ul class="menu">
    <li class="menu-link1"><a class="link1" href=" <?php echo $products['menu'][0]['href'] ?> "> <?php echo $products['menu'][0]['title'] ?> </a></li>
    <li class="menu-link2 active"><a class="link2" href=" <?php echo $products['menu'][1]['href'] ?> "> <?php echo $products['menu'][1]['title'] ?> </a></li>
    <li class="menu-link3"><a class="link3" href=" <?php echo $products['menu'][2]['href'] ?> "> <?php echo $products['menu'][2]['title'] ?> </a></li>
    </ul></nav> 
   </header>
<main>
    <section class="jumbotron"> <article> <h2 class="jumbotron-title"><?php echo $products['jumbotron']['title'] ?></h2> 
     <div> <?php echo $products['jumbotron']['subtitle'] ?> </div>  </article>
    <aside class="aside"></aside> <div class="descargar">DESCARGAR</div> </section>
    <section class="articles">
    <article class="box"> <h2> <?php echo $products['box']['title'] ?> </h2> <div> <?php echo $products['box']['text'] ?> </div> </article>    
    <article> <h2> Moment </h2> <?php $list = $products['moment'];
                echo '<ul class="list">';
                foreach ($list as $li) {
                    echo '<li>' . $li .
                   '</li>';
                } '</ul>'; ?></article></section>
    <section class="Screenshots"> <h2> Screenshots </h2> <article class="srcs"> <i class="fas fa-angle-left"></i> <?php $slide = $products['slide'];                
                foreach ($slide as $src) {
                    echo '<img src="'.$src.'"></img>';
                }  ?> <i class="fas fa-angle-right"></i> </article>
    </section>    
</main> 
<footer>Gracias por tomarte este tiempo :)</footer>
</body>
</html>