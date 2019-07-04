<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/flexnav.css" media="screen, projection" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

        <?php wp_head(); ?>
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<div class="header_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 my-auto">
                        <a class="logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
                        <div class="menu_holder">
                            <ul id="menu">
                                <li><a href="#">about us</a> </li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>                
                        </div>           

                    </div>
                </div>
            </div>
		</div>

        <div class="hero_area">
            <div class="image_holder">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>It's all about Governance</h1>
                    <hr class="orange_bar">
                </div>
            </div>
        </div>

        <div class="poor_culture_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Poor culture?  Poor compliance?  Poor risk management?  Poor visibility between the executive and the board?</h2>
                        <p>A breach of legal or regulatory compliance is a breach of Governance. It’s not just about ticking the box or going through the motions. “A director is not an ornament, but an essential component of corporate governance” (Court defined)</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="reputational_damage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="heading">What is reputational <br>risk and damage?</h1 class="heading">
                    </div>
                    <div class="col-md-7">
                        <p>It can be as simple as a breach of contract or relate to more complex litigation </p>
                        <ul>
                            <li>a failure to discharge ethical, statutory or fiduciary duties with care and diligence as directors or officers or employees </li>
                            <li>a failure to comply with legislation or common law resulting in a breach of duty</li>
                            <li>a failure to comply with professional codes of conduct or meeting practice and procedure</li>
                            <li>a failure to comply with financial service standards – breach reporting, ‘client interest duty’ not acting “efficiently, honestly and fairly”</li>
                            <li>a failure to delegate authority or manage, review and calibrate risk</li>
                            <li>a failure to embed ‘ethical’ or ‘best practice’ culture aligned to vision and values</li>
                            <li>a failure to assess performance at board or employment in ‘whole of organisation’ giving rise to workplace negligence or adverse action</li>
                            <li>a failure to implement adequate whistle blower policies </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="home_about_us">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>At Fountain-Smith Governance Lawyers, we advise on driving best practice governance and culture.</h2>
                        <hr class="orange_bar">
                        <p>Your governance controls – your policies, processes, systems and procedures are critical links to business continuity and achieving objectives in a compliant way.  Fail – and ‘reputational risk and damage’ can result in irreparable harm.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <ul class="footer_menu">
                          <li><a href="#">Stockists</a></li>
                          <li><a href="#">Faq</a></li>
                          <li><a href="#">Privacy</a></li>
                          <li><a href="#">Terms of use</a></li>
                          <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>













        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/fontawesome-all.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexnav.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slicknav.min.js" type="text/javascript"></script>
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
