<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url()?>"><strong>Déclic-Maths-Phys-Prog</strong> </a>
            </h1>
            <p>Tel:<a class="site-footer__link" href="#"> 514-261-9750</a></p>
            <p>email:<a class="site-footer__link" href="#"> a.mijiyawa@gmail.com</a></p>
            <p>adresse:<a class="site-footer__link" href="#"> 2730, rue Goyer, H3S 1H3, Montréal-Québec</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explorer</h3>
              <nav class="nav-list">

                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'footerLocationOne'
                  ));
                ?>

              <!--
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul>
                -->
              </nav>
            </div>
            <!--
            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Apprendre</h3>
              <nav class="nav-list">

              <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'footerLocationTwo'
                  ));
                ?>

              
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy')?>">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
                
              </nav>
            </div>
            -->
          </div>

          <div class="site-footer__col-four">
            <h5 class="headline headline--small">Connecter-vous avec nous</h5>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>


<?php wp_footer(); ?>

</body>


</html>