<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style/productos.css">
	<link rel="stylesheet" href="Style/Contenido.css">
	<link rel="stylesheet" href="Style/categoria.css">
</head>

<body>
  <section class="banner">
    <div class="content-banner">
      <p>Cocteleria de frutas</p>
      <h2>100% Natural <br />100% Calidad</h2>
      <a href="#">Obten tu coctel de frutas</a>
    </div>
  </section>
  <br></br>
  <br></br>
  <main class="main-content">
    <section class="container container-features">
      <div class="card-feature">
        <i class="fa-solid fa-plane-up"></i>
        <div class="feature-content">
          <span>Frutas 100% naturales</span>
        </div>
      </div>
      <div class="card-feature">
        <i class="fa-solid fa-wallet"></i>
        <div class="feature-content">
          <span>Nivel de higiene excepcional</span>
        </div>
      </div>
      <div class="card-feature">
        <i class="fa-solid fa-gift"></i>
        <div class="feature-content">
          <span>Cocteles de muchos tipos</span>
        </div>
      </div>
      <div class="card-feature">
        <i class="fa-solid fa-headset"></i>
        <div class="feature-content">
          <span>Frutas frescas y de gran Calidad</span>
        </div>
      </div>
    </section>
    <section>
      <br></br>
      <br></br>
      <div class="filtro-categoria">
        <form method="post"
          action="http://LocalHost/SistemaCocteleria/?Controller=CatalogoController&Method=MostrarCatalogoPorCategoria">
          <label for="categoria">Filtrar por categoría:</label>
          <select id="categoria" name="categoria">
            <option value="">Todos</option>
            <!-- Aquí puedes generar las opciones del select dinámicamente desde la base de datos si las tienes disponibles -->
            <option value="Dulce">Dulces</option>
            <option value="Acido">Acidos</option>
            <option value="Tematicos">Tematicos</option>
            <!-- ... y así sucesivamente -->
          </select>
          <input type="submit" value="Filtrar">
        </form>
      </div>

      <section>
        <div class='mostrador' id='mostrador'>
          <?php
          $contador = 0;
          foreach ($productos as $producto) {
            if ($contador % 4 === 0) {
              // Crea una nueva fila después de cada cuarto div
              echo '<div class="fila">';
            }
            ?>
            <div class='item'>
              <div class='contenedor-foto'>
                <?php
                $imagenCodificada = base64_encode($producto['Imagen']);
                echo '<img src="data:image/jpeg;base64,' . $imagenCodificada . '" alt="">';
                ?>
              </div>
              <p class='descripcion'>
                <?= $producto['Nombre'] ?>
              </p>
              <p class='descripcion'>
                <?= $producto['Tipo'] ?>
              </p>
              <span class='precio'>$
                <?= $producto['Precio'] ?>
              </span>
              <div class="form-group">
                <a
                  href="http://LocalHost/SistemaCocteleria/?Controller=CatalogoController&Method=MostrarDetalleProducto&id=<?= $producto['IdProducto'] ?>">Ver
                  detalle</a>
              </div>
            </div>
            <?php
            $contador++;
            if ($contador % 4 === 0) {
              // Cierra la fila después de cada cuarto div
              echo '</div>';
            }
          }
          // Cierra la fila final si no se cerró en el último div
          if ($contador % 4 !== 0) {
            echo '</div>';
          }
          ?>
        </div>
      </section>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <h1 class="heading-1">Galeria de imagenes</h1>
      <section class="gallery">
        <img src="Img/galeria1.jpg" alt="Gallery Img1" class="gallery-img-1" /><img src="Img/galeria2.jpg"
          alt="Gallery Img2" class="gallery-img-2" /><img src="Img/galeria3.jpg" alt="Gallery Img3"
          class="gallery-img-3" /><img src="Img/galeria4.jpeg" alt="Gallery Img4" class="gallery-img-4" /><img
          src="Img/galeria6.jpg" alt="Gallery Img5" class="gallery-img-5" />
      </section>
      <br></br>
      <br></br>
      <br></br>
      <section class="container blogs">
        <h1 class="heading-1">Últimos Blogs</h1>

        <div class="container-blogs">
          <div class="card-blog">
            <div class="container-img">
              <img src="Img/fondo-pina-coco.jpg" alt="Imagen Blog 1" />
              <div class="button-group-blog">
                <span>
                  <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span>
                  <i class="fa-solid fa-link"></i>
                </span>
              </div>
            </div>
            <div class="content-blog">
              <h3>Blog 1: "Receta Refrescante: Coctel Tropical de Piña y Coco"</h3>
              <span>5 de Julio de 2023</span>
              <p>
                Disfruta de un delicioso coctel tropical de piña y coco.
                Este Refrescante coctel combina el dulce sabor de la piña con el cremoso coco,
                perfecta para disfrutar en un día caluroso de verano.
                conoce esta exótica bebida
                y sorprende a tus invitados en tu próxima reunión.
              </p>
              <div class="btn-read-more">Leer más</div>
            </div>
          </div>
          <div class="card-blog">
            <div class="container-img">
              <img src="Img/blog2coctel.png" alt="Imagen Blog 2" />
              <div class="button-group-blog">
                <span>
                  <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span>
                  <i class="fa-solid fa-link"></i>
                </span>
              </div>
            </div>
            <div class="content-blog">
              <h3>Blog 2: "Beneficios de las Frutas en los Cocteles Saludables"</h3>
              <span>15 de Julio de 2023</span>
              <p>
                Las frutas no solo agregan sabor y color a los cocteles, sino que también aportan
                beneficios para la salud.
                En este blog, exploramos las propiedades nutritivas de frutas como la fresa,
                el kiwi y el melón en cocteles saludables.
                Descubre cómo estas deliciosas frutas pueden ser una opción refrescante
                y nutritiva para acompañar tus comidas.
              </p>
              <div class="btn-read-more">Leer más</div>
            </div>
          </div>
          <div class="card-blog">
            <div class="container-img">
              <img src="Img/blog3.jpg" alt="Imagen Blog 3" />
              <div class="button-group-blog">
                <span>
                  <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span>
                  <i class="fa-solid fa-link"></i>
                </span>
              </div>
            </div>
            <div class="content-blog">
              <h3>Blog 3: "Tendencias de Cocteles de Frutas para el Verano 2023"</h3>
              <span>25 de Julio de 2023</span>
              <p>
                ¿Qué cocteles de frutas están en tendencia este verano? Descubre las combinaciones de
                frutas más populares,
                desde el famoso coctel de sandia, hasta el nutritivo coctel de mango.
                Te presentamos nuestra coleccion recomendada que marcarán la pauta en la coctelería de
                frutas este año.
              </p>
              <div class="btn-read-more">Leer más</div>
            </div>
          </div>
        </div>
      </section>
  </main>

</body>

</html>