<main>
<?php
 $arrayMarcas =json_decode(file_get_contents("json/marcas.json"),true);
 $arrayCategorias =json_decode(file_get_contents("json/categorias.json"),true);
 $productos= json_decode(file_get_contents("json/productos.json"),true);

 foreach($arrayCategorias as $categoria){

    $id_categoria = $categoria["id_marca"];
    $nombre_categoria = $categoria["nombre"];
    }

 foreach($arrayMarcas as $marca){
               $id_marca = $marca["id_marca"];
              $nombre_marca = $marca["nombre"];

 }
?>

  <section class="container-fluid">
 
    <h1 class="p-4 text-center">
      <img src="recursos/lo02.png" width="250" height="250" alt="logo">
    </h1>

    <div class="row p-5">
      <div class="col-md-2 my-3">
        <nav>
          <ul>
            <li class="nav-item dropdown mb-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="mainCategoria.php?id_categoria=<?php echo $id_categoria?>" ><?php  foreach($arrayCategorias as $categoria){
                  $id_categoria = $categoria["id_marca"];
            echo $nombre_categoria = $categoria["nombre"];
            echo "<br>";
                                }?></a>
              <!-- <a class="dropdown-item" href="#">Celulares</a>
              <a class="dropdown-item" href="#">Audio</a>
              <a class="dropdown-item" href="#">TV</a> -->
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Marca
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="marca.php?id_marca=<?php echo $id_marca?>"><?php  foreach($arrayMarcas as $marca){
                  $id_marca = $marca["id_marca"];
            echo $nombre_marca = $marca["nombre"];
            echo "<br>";
                                }?></a>
              <!-- <a class="dropdown-item" href="#">Sony</a>
              <a class="dropdown-item" href="#">Apple</a>
              <a class="dropdown-item" href="#">Motorola</a> -->
            </div>
            </li>
          </ul>
        </nav>
      </div>

      <div class="col-md-10">
        <div class="row">

        <?php
        $arrayProd =json_decode(file_get_contents("json/productos.json"),true);//en la variable $arrayProd se guarda lo que se llama desde
        //el archivo json de productos, se coloca true para que no devuelva un array de objetos

        foreach($arrayProd as $productos){
          $id_productos = $productos["id_producto"];
          $img_productos = "img/".$id_productos."/".$id_productos."_chica.jpg";
          $nombre_productos = $productos["nombre"];
          $precio_productos = $productos["precio"];
          $descCor_productos = $productos["descripcion"];

         ?> <div class="col-4 pt-4">
          <div class="card">
          <img src="<?php echo $img_productos;?>" class="card-img" alt="<?php echo $nombre_productos;?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $nombre_productos;?></h5>
              <p class="card-text"><h5><strong>$<?php echo $precio_productos;?></strong></h5>
              <?php echo $descCor_productos;?>
              </p>
              <a href="producto.php?id_productos=<?php echo $id_productos?>" class="btn">Ver detalle</a>
            </div>
          </div>
        </div>
      <?php  }

        ?>


        </div>
      </div>
    </div>
</section>
    </main>