<?php 
get_header();
?>
  
  
    <!-- Parte de aRRIBA -->
    <!-- Cuerpo -->
<!-- <main>
    <section>
        <h1>Lorem Impsum</h1>
        <hr>
        <div>
            <img src="./images/imagen1.png" alt="">
        </div>
        <h2>Lorem Ipsum</h2>
        <hr>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fuga, sapiente corporis! Nulla, vel. 
            Accusantium officia blanditiis hic, nisi laborum, 
            reprehenderit repellendus aperiam molestias voluptatum 
            eius repudiandae beatae fuga, libero nobis!
            <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fuga, sapiente corporis! Nulla, vel. 
            Accusantium officia blanditiis hic, nisi laborum, 
            reprehenderit repellendus aperiam molestias voluptatum 
            eius repudiandae beatae fuga, libero nobis!
            <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fuga, sapiente corporis! Nulla, vel. 
            Accusantium officia blanditiis hic, nisi laborum, 
            reprehenderit repellendus aperiam molestias voluptatum 
            eius repudiandae beatae fuga, libero nobis! 
            <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fuga, sapiente corporis! Nulla, vel. 
            Accusantium officia blanditiis hic, nisi laborum, 
            reprehenderit repellendus aperiam molestias voluptatum 
            eius repudiandae beatae fuga, libero nobis! 
        </p>

        <div>
            <img src="./images/imgAside.png" alt="">
        </div>

        <h2>Lorem Impsum</h2>
        <hr>
        <ul>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, sapiente corporis! Nulla, vel.</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, sapiente corporis! Nulla, vel.</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, sapiente corporis! Nulla, vel.</li>
        </ul>
    </section>
</main> -->

<!-- contenido articulo -->
<div class="container">
    <div class="row">
        <!-- articulo -->
        <div class="col-12 col-md-9 my-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                      the_post_thumbnail('post-thumbnails', array('class' =>"d-block w-100 img-fluid"));
                    } ?></a>
            <h2 class="my-3"><?php the_title(); ?></h2>
            <p class="lead"><?php echo get_the_date()?></p>
            <div class="text-justify">
               <?php the_content(); ?> 
            </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- fin articulo -->
        <!-- aside -->
        <div class="col-12 col-md-3 my-5">
            <div class="my-3">
                <h3>Lorem Ipsum</h3>
                <img src="./images/imgAside.png" alt="" class="img-fluid">
            </div>

            <div class="my-3">
                    <h3>Lorem Ipsum</h3>
                    <img src="./images/imgAside.png" alt="" class="img-fluid">
            </div>

            <div class="my-3">
                    <h3>Lorem Ipsum</h3>
                    <img src="./images/imgAside.png" alt="" class="img-fluid">
            </div>
        </div>
        <!-- fin aside -->
    </div>
</div>

<!-- Footer -->

<?php get_footer();?>