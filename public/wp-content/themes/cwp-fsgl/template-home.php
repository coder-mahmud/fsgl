<?php 
/*
Template Name: Home Page
*/
get_header(); ?>

        <div class="hero_area">
            <div class="image_holder" style="background:url('<?php the_field('hero_image'); ?>') no-repeat; background-size:cover;">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1>It's all about Governance</h1> -->
                    <h1><?php the_field('hero_title'); ?></h1>
                    <hr class="orange_bar">
                </div>
            </div>
        </div>

        <div class="poor_culture_area">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-12">
                        <h2>Poor culture?  Poor compliance?  Poor risk management?  Poor visibility between the executive and the board?</h2>
                        <p>A breach of legal or regulatory compliance is a breach of Governance. It’s not just about ticking the box or going through the motions. “A director is not an ornament, but an essential component of corporate governance” (Court defined)</p>
                    </div> -->
                    <div class="col-12">
                        <?php the_field('home_page_second_section',false,false); ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="reputational_damage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="heading"><?php the_field('third_section_left_heading',false,false); ?></h1>
                    </div>
                    <div class="col-md-7">
                        <!-- <p>It can be as simple as a breach of contract or relate to more complex litigation </p>
                        <ul>
                            <li>a failure to discharge ethical, statutory or fiduciary duties with care and diligence as directors or officers or employees </li>
                            <li>a failure to comply with legislation or common law resulting in a breach of duty</li>
                            <li>a failure to comply with professional codes of conduct or meeting practice and procedure</li>
                            <li>a failure to comply with financial service standards – breach reporting, ‘client interest duty’ not acting “efficiently, honestly and fairly”</li>
                            <li>a failure to delegate authority or manage, review and calibrate risk</li>
                            <li>a failure to embed ‘ethical’ or ‘best practice’ culture aligned to vision and values</li>
                            <li>a failure to assess performance at board or employment in ‘whole of organisation’ giving rise to workplace negligence or adverse action</li>
                            <li>a failure to implement adequate whistle blower policies </li>
                        </ul> -->

                        <?php the_field('third_section_right_content',false,false); ?>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="home_about_us">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?php the_field('fourth_section_heading',false,false); ?></h2>
                        <hr class="orange_bar">
                        <p><?php the_field('fourth_section_text',false,false); ?></p>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>