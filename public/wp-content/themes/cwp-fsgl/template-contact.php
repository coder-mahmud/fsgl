<?php 
/*
Template Name: Contact Page
*/
get_header(); ?>

        <div class="contact_content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?php the_field('left_title',false,false); ?></h1>
                        <p><?php the_field('left_text',false,false); ?></p>
                        <?php the_field('contact_form');  ?>
                    </div>
                    <div class="col-md-4">
                        <p class="smaller">Our Office</p>
                        <p>
                            <?php the_field('office_address',false,false); ?> 
                        </p><br/><br/>

                        <?php the_field('map_iframe',false,false); ?>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>