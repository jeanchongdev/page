<!--=====================================

TOP

======================================-->



<div class="container-fluid barraSuperior" id="top">



  <div class="container">



    <div class="row">



      <!--=====================================

      SOCIAL

      ======================================-->



      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">



        <ul>



          <li>

            <a href="http://facebook.com/" target="_blank">

              <i class="fa fa-facebook redSocial facebookColor" aria-hidden="true"></i>

            </a>

          </li>



          <li>

            <a href="http://youtube.com/" target="_blank">

              <i class="fa fa-youtube redSocial youtubeColor" aria-hidden="true"></i>

            </a>

          </li>



          <li>

            <a href="http://twitter.com/" target="_blank">

              <i class="fa fa-twitter redSocial twitterColor" aria-hidden="true"></i>

            </a>

          </li>



          <li>

            <a href="http://google.com/" target="_blank">

              <i class="fa fa-google-plus redSocial googleColor" aria-hidden="true"></i>

            </a>

          </li>



          <li>

            <a href="http://instagram.com/" target="_blank">

              <i class="fa fa-instagram redSocial instagramColor" aria-hidden="true"></i>

            </a>

          </li>



        </ul>



      </div>



      <!--=====================================

      REGISTRO

      ======================================-->



      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">



        <ul>



          <li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>

          <li>|</li>

          <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>



        </ul>



      </div>



    </div>



  </div>



</div>



<!--=====================================

HEADER

======================================-->



<header class="container-fluid">



  <div class="container">



    <div class="row" id="cabezote">



      <!--=====================================

      LOGOTIPO

      ======================================-->



      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">



        <a href="#">



          <img src="http://localhost/backoffice/vistas/img/plantilla/logo.png" class="img-responsive">



        </a>



      </div>



      <!--=====================================

      BLOQUE CATEGORÍAS Y BUSCADOR

      ======================================-->



      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">



        <!--=====================================

        BOTÓN CATEGORÍAS

        ======================================-->



        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">



          <p>CATEGORÍAS



            <span class="pull-right">

              <i class="fa fa-bars" aria-hidden="true"></i>

            </span>



          </p>



        </div>



        <!--=====================================

        BUSCADOR

        ======================================-->



        <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">



          <input type="search" name="buscar" class="form-control" placeholder="Buscar...">



          <span class="input-group-btn">



            <a href="#">



              <button class="btn btn-default backColor" type="submit">



                <i class="fa fa-search"></i>



              </button>



            </a>



          </span>



        </div>



      </div>



      <!--=====================================

      CARRITO DE COMPRAS

      ======================================-->



      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">



        <a href="#">



          <button class="btn btn-default pull-left backColor">



            <i class="fa fa-shopping-cart" aria-hidden="true"></i>



          </button>



        </a>



        <p>CESTA <span class="cantidadCesta">1</span> <br> PEN S/. <span class="sumaCesta">20</span></p>



      </div>



    </div>



    <!--=====================================

    CATEGORÍAS

    ======================================-->



    <div class="col-xs-12 backColor" id="categorias">



      <?php



      $item = null;



      $valor = null;



      $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

      // var_dump($categorias);



      foreach ($categorias as $key => $value) {



        echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">



   <h4>



    <a href="' . $value["ruta"] . '" class="pixelCategorias">' . $value["nombre"] . '</a>



   </h4>





   <hr>



   <ul>';



        $item = "idcategoria";



        $valor = $value["id"];



        $subcategorias = ControladorCategorias::ctrMostrarSubCategorias($item, $valor);



        foreach ($subcategorias as $key => $value) {



          echo '<li><a href="' . $value["ruta"] . '" class="pixelSubCategorias">' . $value["subcategoria"] . '</a></li>';



        }



        echo '</ul>



  </div>';



      }



      ?>



    </div>



</header>