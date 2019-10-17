<!-- Footer -->

<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 footer">
      <div class="container">
          <div class="row">
              <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 fund"><a href="#">Fundación Telefónica</a></div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 who"><a href="#">¿Quiénes Somos? | </a><a href="#">Texto Legal</a></div>
                    <!-- <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4 who"><a href="#">Texto Legal</a></div> -->
                </div>
              </div>
              <!-- logos al final -->
              <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                <img class="fotimg" src="<?php bloginfo('template_url'); ?>/images/footer.png" alt="">
              </div>
            </div>
          </div>
      </div>

      <!-- Footer Responsive -->
      <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 footerR">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="row">
                      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4 fund"><a href="#">Fundación Telefónica</a></div>
                      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4 who"><a href="#">¿Quiénes Somos?</a></div>
                      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4 who"><a href="#">Texto Legal</a></div>
                  </div>
                </div>
                <!-- logos al final -->
                <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                  <img class="fotimg" src="<?php bloginfo('template_url'); ?>/images/footer.png" alt="">
                </div>
              </div>
            </div>
        </div>
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
      <script>
        var nav = document.getElementById('navbar')
        
        window.onscroll = function(){

          if(window.pageYOffset > 100){
            nav.style.position = "fixed"
            nav.style.top = 0
          }
          else{
            nav.style.position = "absolute"
            nav.style.top = "150px"
          }
        }

        
        
      </script>
      

      
</body>

</html>