<?php 
/*
Template Name: Service Page
*/
get_header(); ?>

        <div class="hero_area services_hero">
            <div class="image_holder">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('hero_title',false,false); ?></h1>
                    <hr class="orange_bar">
                </div>
            </div>
        </div>

        <div class="poor_culture_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php the_field('second_section',false,false); ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="reputational_damage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="heading"><?php the_field('third_section_title',false,false); ?></h1>
                    </div>
                    <div class="col-md-7">
                        <?php the_field('third_section_text',false,false); ?>
                        
                    </div>
                </div>
            </div>
        </div>

        
        <div class="home_about_us call_to_action">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?php the_field('call_to_action_title',false,false); ?></h2>
                        <hr class="orange_bar">
                        <p><?php the_field('call_to_action_text',false,false); ?></p>
                        <a href="<?php the_field('call_to_action_button_target',false,false); ?>"><?php the_field('call_to_action_button_text',false,false); ?></a>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>