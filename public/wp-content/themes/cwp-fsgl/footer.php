        <div class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $facebook = get_option_tree( 'facebook', '', false );
                        ?>
                        <a class="social" href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <!-- <ul class="footer_menu">
                          <li><a href="#">Stockists</a></li>
                          <li><a href="#">Faq</a></li>
                          <li><a href="#">Privacy</a></li>
                          <li><a href="#">Terms of use</a></li>
                          <li><a href="#">Contact</a></li>
                        </ul> -->


                        <?php wp_nav_menu( array( 'theme_location' => 'menu_footer' ,'container' => false,'menu_class'=> 'footer_menu') ); ?>
                    </div>
                </div>
            </div>
        </div>













        
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
    	
		<script type="text/javascript">
		

			jQuery(document).ready(function($) {
				
				// initialize FlexNav
				$(".flexnav").flexNav({
					'transitionSpeed' : '0.4s', 'itemHeight': 50
				});

                $(function(){
                    $('#menu').slicknav({
                        prependTo: '.menu_holder'
                    });
                });


			});
		
	    </script>

	
		
		
		
		<?php wp_footer(); ?>
    </body>
</html>
