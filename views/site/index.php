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
  
<section class="Inicio text-center">
    <h1 class="aspecto-h1 animacionh1 ">CineLibre</h1>
    <h2 class="aspecto-h2 animacionh2">Donde cada historia cobra vida</h2>
</section>

<!-- Jumbotron con Bootstrap -->
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

            <!-- Lista de géneros con Bootstrap -->
            <div class="list-group">
                <?php foreach ($generos as $genero): ?>
                    <a href="#" class="list-group-item list-group-item-action"><?= $genero ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="extra-info">
        <h2 class="letra_genero">Una variedad de Series y Películas</h2>
        <div class="carousel">
            <div class="slides">
                <!-- Imágenes del carrusel -->
                <img src="../imagenes/imagen1.jpg" alt="Imagen 1">
                <img src="../imagenes/imagen2.jpg" alt="Imagen 2">
                <img src="../imagenes/imagen3.jpg" alt="Imagen 3">
                <img src="../imagenes/imagen4.jpg" alt="Imagen 4">
                <img src="../imagenes/imagen5.jpg" alt="Imagen 5">
            </div>
        </div>
    </div>
</div>

<!-- Jumbotron para la sección de información -->
<div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4">Información</h1>
    <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium incidunt aliquam, tenetur ullam provident, fugiat quasi laboriosam maiores accusamus sunt aspernatur corporis pariatur, minima perferendis quaerat tempore. Facere neque eligendi architecto optio nisi laborum animi ab vitae accusamus nesciunt voluptates ex voluptatibus nihil modi debitis tempore, veniam officiis eos quod? Illo repellat recusandae dolorem cumque? Explicabo, saepe ex culpa ipsa sunt inventore ipsam, tempore, sit expedita pariatur eligendi ab. Neque ratione officia soluta tenetur commodi id incidunt saepe ipsa sunt in, adipisci impedit? Blanditiis ut voluptatem labore eveniet doloremque in assumenda ullam, tempore libero aut praesentium ipsam placeat quod nam? <!-- Contenido del párrafo -->
    </p>
</div>
