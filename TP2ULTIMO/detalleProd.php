<?php

$id_prod=$_GET["id_productos"];

$productos= json_decode(file_get_contents("json/productos.json"),true);

$img_productos = "img/".$id_prod."/".$id_prod."_grande.jpg";
$id_productos = $productos[$id_prod]["id_producto"];
$nombre_productos = $productos[$id_prod]["nombre"];
$precio_productos = $productos[$id_prod]["precio"];
$modelo_productos = $productos[$id_prod]["modelo"];
$marca_productos = $productos[$id_prod]["marca"];
$descCor_productos = $productos[$id_prod]["descripcion"];

$comentarios= json_decode(file_get_contents("json/comentarios.json"),true);
?>

<main>
    <section class="pt-5">
      <div class="container">
        <div class="row">

          <div class="col-6 imagen">
            <img class="producto-img" src="<?php echo $img_productos?>" alt="producto">
          </div>

          <div class="col-4">
            <h3><?php echo $nombre_productos?></h3>
            <p class="marca-modelo">Marca: <?php echo $marca_productos ?><br>
            Modelo: <?php echo $modelo_productos ?></p>
            <h4>$<?php echo $precio_productos ?></h4>
            <button class="boton-comprar mb-4">
              <span class="icon-carro-lleno boton"></span> Comprar
            </button>
            <div class="producto-entrega">
              <p><i class="fas fa-store"></i> Retiro en sucursal disponible</p>
            </div>
            <div class="producto-entrega">
              <p><i class="fas fa-truck"></i> Entrega a domicilio disponible</p>
            </div>
          </div>
        </div>

        <div class="descripcion">
          <h4>Descripción del producto</h4>
          <hr>
          <p>Cuenta con 4GB de memoria y 128GB de almacenamiento interno.
            Dos cámaras traseras de 12mpx.: ultra gran angular de 120º y gran angular con tecnología Focus Pixels para un enfoque más rápido.
            Cámara delantera TrueDepth de 12Mpx. con modo retrato y control de profundidad.
            Graba y edita videos en 4K con gran nivel de detalle.
            Modo noche para lograr fotos más nítidas y naturales en condiciones de poca luz.
            Pantalla IPS de 6.1 " con colores increíblemente reales.
            Chip A13 Bionic para hacer todo de forma más rápida y fluida.
            Reconocimiento facial Face ID fácil y seguro.
            Resiste bajo el agua hasta 30 minutos en una profundidad máxima de 2 metros (IP68).
            Vidrio con doble intercambio iónico para una mayor resistencia.</p>
        </div>
      </div>

        <div class="fondo-formulario pt-4 pb-3">
          <div class="container">
            <h4>¡Deja tu comentario!</h4>

            <form id="formulario" class="form02">
              <p> Correo electrónico<br>
              <input type="email"></p>
              <p> Calificación (1 a 5, siendo 5 el puntaje mas alto) <br>
              <input type="text"></p>
              <p> Comentario <br>
              <textarea required></textarea></p>
              <input type="submit" class="boton-formulario">
            </form>

          </div>
        </div>

        <div class="container pt-5 pb-4">
          <h4>Ultimos comentarios </h4>
          <hr>

          <p><strong>De: </strong>elet@hotmail.com  <br>
            <strong>Valoración: </strong>3<br>
            <strong>Comentario: </strong>No cumple con las expectativas y encima está re saladix
          </p>

          <p><strong>De: </strong>soysushi@hotmail.com  <br>
            <strong>Valoración: </strong>4<br>
            <strong>Comentario: </strong>Por el momento bien. Cumple con las expectativas
          </p>

          <p><strong>De: </strong>maca@gmail.com <br>
            <strong>Valoración: </strong>5<br>
            <strong>Comentario: </strong>Buenardo producto
          </p>

        </div>
    </section>
  </main>