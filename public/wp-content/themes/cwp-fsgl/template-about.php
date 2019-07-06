<?php 
/*
Template Name: About Page
*/

get_header(); ?>

        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="<?php the_field('image'); ?>" alt="">
                        
                        <?php the_field('text',false,false); ?>
                        <!-- <p> At Fountain-Smith Governance Lawyers, we advise on driving best practice governance and culture. Your governance controls – your policies, processes, systems and procedures are critical links to business continuity and achieving objectives in a compliant way. Fail – and ‘reputational risk and damage’ can result in irreparable harm.</p>

                        <p>Garth Fountain-Smith is a lawyer with in-depth regulatory and legal compliance experience (including as a lawyer and manager at ASIC) and he is a governance professional. Garth is a director of the Governance Institute of Australia Ltd, the peak professional body for ‘whole of organisation governance’. Garth speaks with experience from the board table. With 21 years’ + professional standing - Garth is a Corporate lawyer who practises in:</p>

                        <ul>
                            <li>corporations law</li>
                            <li>directors’ & officers’ duties</li>
                            <li>legal and regulatory compliance law </li>
                            <li>financial services law</li>
                            <li>corporate governance, risk management, board/director review/assessment, meeting practice and procedure</li>
                            <li>professional conduct matters</li>
                            <li>commercial litigation and commercial law; and employment law.</li>
                        </ul>
                            

                        <p>We don’t need to promote ourselves as highly experienced, cost effective, achieving client solutions in a pragmatic way - our clients know that.</p> -->
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>