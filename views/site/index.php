<?php
use yii\db\Query;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

// Obtener el nombre del género
$generos = (new Query())
    ->select('gen_nombre')
    ->from('genero')
    ->column();
?>
<?php $this->registerCssFile('@web/css/styles.css'); ?>

</header>
  
<section class="Inicio text-centro">
    <h1 class="aspecto-h1 animacionh1 ">CineLibre</h1>
    <h2 class="aspecto-h2 animacionh2">Donde cada historia cobra vida</h2>
</section>

<div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4">Ven y Disfruta</h1>
    <p class="lead">
        ¡Sumérgete en un mundo de emociones! Descubre la magia del cine en nuestra página de Películas. 🎬✨
    </p>
</div>

<div class="main-container">
    <div class="info-container">
        <div class="data">
            <p class="letra_genero1">Géneros:</p>
            <div>
                <ul>
                    <?php foreach ($generos as $genero): ?>
                        <li class="letra_genero"><?= $genero ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="extra-info">
        <h2 class="letra_genero">Una variedad de Series y Películas</h2>
        <div class="carousel">
            <div class="slides">
                <img src="../imagenes/imagen1.jpg" alt="Imagen 1">
                <img src="../imagenes/imagen2.jpg" alt="Imagen 2">
                <img src="../imagenes/imagen3.jpg" alt="Imagen 3">
                <img src="../imagenes/imagen4.jpg" alt="Imagen 4">
                <img src="../imagenes/imagen5.jpg" alt="Imagen 5">
            </div>
        </div>
    </div>
</div>

<div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4">Información</h1>
    <p class="lead">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, eligendi vel? Illo magnam, voluptatibus eveniet id vel adipisci harum eos possimus optio quod a. Sequi veniam in at dolores ipsam tenetur fugiat ipsum excepturi molestias reprehenderit nihil accusamus ullam suscipit ut quaerat quisquam magnam officia, architecto magni harum dolor optio modi! Nam maxime quae delectus repellendus accusantium eaque in, voluptas provident enim dolores corporis odio veniam harum optio totam ea, velit iste omnis nobis. Voluptatibus vitae quidem amet magnam earum nisi eius id. Minus ab omnis, culpa voluptates consequuntur quasi corporis at ad, saepe voluptatibus enim! Tenetur rem reprehenderit pariatur.
    </p>
</div>
