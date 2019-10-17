<?php 
get_header();
?>




    
  <!-- cuerpo -->

  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-8 col-lg-8 col-sm-12">
        <div>
          <div class="bienvenida">
              <div>
                  <h2>Bienvenido a Educared</h2>                          
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Cupiditate deserunt laborum nobis veniam incidunt.    
                    </p>
              </div>
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="carousel-item active">
                  <!-- d-block w-100 -->
                    <!-- <img src="./images/imagen1.png" class="d-block w-100" alt="..." width="100%" height="350px"> -->
                    <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                      the_post_thumbnail('post-thumbnails', array('class' =>"d-block w-100"));
                    } ?></a>
                      <a href="<?php the_permalink(); ?>">
                        <p class="floatText">
                          <?php the_title(); ?>
                        </p>
                      </a>
                      <!-- <p>
                        
                      </p> -->
                  </div>
                  <?php endwhile; endif; ?>
      
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="carousel-item">
                    <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2019/09/Banner-Educared-2-1.jpg" class="d-block w-100" alt="..." width="100%" height="350px">
                    <a href="<?php the_permalink(); ?>">
                      <p class="floatText">
                        <?php the_title(); ?>
                      </p>
                    </a>
                  </div>
                  <?php endwhile; endif; ?>
      
                  <div class="carousel-item">
                    <img src="./images/imagen1.png" class="d-block w-100" alt="..." width="450px" height="350px">
                      <p class="floatText">
                          Hola a todos
                      </p>
                  </div>

                  <div class="carousel-item">
                    <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2018/03/Banner-Villaplanet-Principal-e1520875641843.jpg" class="d-block w-100" alt="..." width="450px" height="350px">
                      <p class="floatText">
                          Villaplanet
                      </p>
                  </div>
                </div>
              </div> 
          </div>
          

          <!-- comunidad -->
        <h2>Comunidades Virtuales</h2>
          <div class="row comunidad">
            <div class="col-12 col-xl-6 col-lg-6 col-md-12 col-sm-12">            
              <div class="divcomun">
                <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2018/05/ficha-38-3.jpg" alt="" width="100%">
                <h6>Lorem ipsum</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    nemo consequatur rerum aperiam inventore dolor nihil eaque nobis, consequuntur ullam voluptatibus, 
                    laborum vero ab? laborum vero ab? laborum vero ab? laborum vero ab?
                  </p>
              </div>
            </div>

          <div class="col-12 col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="divcomun">
                <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2018/05/ficha-38-3.jpg" alt="" width="100%">
                <h6>Lorem ipsum</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    nemo consequatur rerum aperiam inventore dolor nihil eaque nobis, consequuntur ullam voluptatibus, 
                    laborum vero ab? laborum vero ab? laborum vero ab? laborum vero ab?
                  </p>
              </div>
          </div>
        </div>

      <!-- proyectos -->

      <div class="col-12 col-xl-12 col-lg-12 col-sm-12 proyectos">
        <h2>Proyectos Educación Digital</h2>
            <div class="row bloque1">
              <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12 proyimg">
                <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2018/05/ficha-27.jpg" alt=""  width="100%">
              </div>
              <div class="col-12 col-xl-8 col-lg-8 col-md-6 col-sm-6">
                <h6>Lorem ipsum dolor</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    nemo consequatur rerum aperiam inventore dolor nihil eaque nobis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    
                  </p>
              </div>
          </div>
          
            <div class="row bloque1">
              <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12 proyimg">
                <img src="http://educared.fundaciontelefonica.com.pe/wp-content/uploads/2018/05/ficha-27.jpg" alt=""  width="100%">
              </div>
              <div class="col-12 col-xl-8 col-lg-8 col-md-6 col-sm-6">
                <h6>Lorem ipsum dolor</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    nemo consequatur rerum aperiam inventore dolor nihil eaque nobis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                    
                  </p>
              </div>
            </div>    
          </div>
        </div>
  </div>
  <!-- Aside -->
  <div class="col-12 col-xl-4 col-lg-4 col-sm-12 aside">
    
      <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <h2>Actualidad Educativa</h2>
          <div class="row bloque2">
            <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 asImg">
              <img src="./images/imgAside.png" alt=""  width="100%">
            </div>
            <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12">
              <h6>Lorem ipsum dolor</h6>
                <p style="font-size: 10px;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi.
                </p>
            </div>
          </div>

          <div class="row bloque2">
            <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 asImg">
              <img src="./images/imgAside.png" alt=""  width="100%">
            </div>
            <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12">
              <h6>Lorem ipsum dolor</h6>
                <p style="font-size: 10px;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi.
                </p>
            </div>
          </div>

        <div class="row bloque2">
          <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 asImg">
            <img src="./images/imgAside.png" alt=""  width="100%">
          </div>
          <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <h6>Lorem ipsum dolor</h6>
              <p style="font-size: 10px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi.
              </p>
          </div>
        </div>
      </div>

            <!-- Suscribete a Nuestro boletín -->
          <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <h2>Suscribete a Nuestro boletín</h2>
              <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 formulario">
                <form action="">
                  <label for="">
                    <input type="email" placeholder="Ingresa tu correo electrónico">
                  </label>
                    
                    <button type="button" class="btn btn-primary btn-sm boton">Suscribirme</button>
                    
                    <div class="custom-control custom-checkbox parrafo">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">He leído y acepto los términos y condiciones</label>
                      </div>
                </form>
              </div>
          </div>
      

            <!-- Buscar -->
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div>
                <h2>Buscar</h2>
              </div>
              <div class="buscador">
                <form action="">
                  <input class="input" type="search" name="" id="" placeholder="Buscar...">
                </form>
              </div>
            </div>

            <!-- Tags -->
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div>
                <h2>Tags</h2>
              </div>
              <div class="tags">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur corporis eligendi id ad nisi, 
                nemo consequatur rerum aperiam inventore dolor nihil eaque nobis, consequuntur ullam voluptatibus, laborum vero ab?
              </div>       
            </div>
          </div>
        </div>
    </div>

    <?php
    get_footer();

    ?>