<?php
include("./php/conexion.php");
if(!isset($_GET['texto'])){
    header("Location: ./index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda Titotech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php");?> 

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Buscando resultados para <?php echo $_GET['texto'];?></h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Lo Ultimo 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="busqueda.php?texto=mouse">Mouse</a>
                      <a class="dropdown-item" href="busqueda.php?texto=headsets">Headsets</a>
                      <a class="dropdown-item" href="busqueda.php?texto=teclado">Teclados</a>
                      <a class="dropdown-item" href="busqueda.php?texto=memoria">Memorias HDD/SSD</a>
                    </div>
                  </div>
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <?php
              
              $resultado = $conexion ->query("select * from productos where 
                 nombre like '%".$_GET['texto']."%' or
                 descripcion like '%".$_GET['texto']."%'
                 
                 order by id DESC")or die($conexion -> error);
                 if(mysqli_num_rows($resultado) > 0){
              while($fila = mysqli_fetch_array($resultado)){
              ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
                      <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3>
                    <p class="mb-0"><?php echo $fila['descripcion'];?></p>
                    <p class="text-primary font-weight-bold">$<?php echo $fila['precio'];?> MXN</p>
                  </div>
                </div>
              </div>
               <?php } }else{
                   echo '<h2>Sin Resultados :( </h2>';
               } ?>

              
            


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Disponibilidad</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><span>Headsets</span> <span class="text-black ml-auto">(50)</span></a></li>
                <li class="mb-1"><span>Teclados</span> <span class="text-black ml-auto">(10)</span></a></li>
                <li class="mb-1"><span>Mouse </span> <span class="text-black ml-auto">(20)</span></a></li>
              </ul>
            </div>

          </div>
        </div>
        
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>