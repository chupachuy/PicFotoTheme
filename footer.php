<?php


do_action( 'blossom_shop_before_footer' );


?>
<footer class="footer-picfoto">
   <div class="container footer-content">
      <div class="item-footer">
         <h3>PIC FOTO</h3>
         <p>República de Cuba 81-Local C, Centro Histórico de la Ciudad de México, Centro, Cuauhtémoc, 06010 Ciudad de México, CDMX</p>
         <p>55 5518 4687</p>
         <p>info@picfoto.mx</p>
      </div>
      <div class="item-footer">
         <h3>AYUDA</h3>
         <ul>
            <li><a href="<?php bloginfo('url'); ?>/quienes-somos">Quienes somos</a></li>
            <li><a href="<?php bloginfo('url'); ?>/contactanos">Contáctanos</a></li>
            <li><a href="<?php bloginfo('url'); ?>/terminos-y-condiciones">Términos y condiciones</a></li>
            <li><a href="<?php bloginfo('url'); ?>/politica-privacidad">Política de privacidad</a></li>
            
         </ul>
      </div>
      <div class="item-footer">
         <h3>SIGUENOS</h3>
         <ul>
            <li><a href="https://www.facebook.com/p/Pic-Foto-100060918555426/?locale=es_LA"><i class="fa-brands fa-facebook fa-2x"></i> Facebook</a></li>
            <li><a href="https://www.tiktok.com/@picfotomx"><i class="fa-brands fa-tiktok fa-2x"></i> TikTok</a></li>
            <li><a href="https://www.instagram.com/picfotomx/?hl=es-la"><i class="fa-brands fa-instagram fa-2x"></i> Instagram</a></li>
            <li><a href="https://www.youtube.com/@picfoto9813"><i class="fa-brands fa-youtube fa-2x"></i> Youtube</a></li>
         </ul>
      </div>
      
   </div>
   <div class="container text-center">
      <p><i class="fa-brands fa-cc-paypal fa-2x"></i><i class="fa-brands fa-cc-visa fa-2x"></i><i class="fa-brands fa-cc-mastercard fa-2x"></i><i class="fa-brands fa-cc-amex fa-2x"></i> <i class="fa-brands fa-cc-stripe fa-2x"></i><i class="fa-brands fa-cc-discover fa-2x"></i></p>
      <p><stronG>Pic Foto</strong> <?php echo Date('Y'); ?> Todos los derechos reservados | Developed by: <strong>Jesús López Velázquez</strong> & <strong>Liliana Esquivel Rivera</strong></p>
   </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
     $('.owl-carousel').owlCarousel({
          // Here goes default configs
         margin: 14,
         nav:true,
         loop: true,
         navText: ["<div class='siguiente'>‹</div>", "<div class='atras'>›</div>"],
          responsive : {
            // breakpoint from 0 up
            0 : {
              stagePadding: 0,
              loop: false,
              responsiveClass: true,
              dots: false,
              nav: true,
              autoHeight: true,
              items: 1
            },
            // breakpoint from 768 up
            768 : {
              items: 4
            }
          }
        });
   });
</script>



<?php wp_footer(); ?>

</body>
</html>