<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" loop="true">    
                <?php 
                while($characters_query->have_posts()) : $characters_query->the_post();
                $main_char=get_post_meta(get_the_ID(),"_main_char_field",true);
                $char_name=get_the_title();
                ?> 
                 <swiper-slide>
                  <?php echo get_the_post_thumbnail(get_the_ID(),"full");?>
                  <?php echo $char_name ;?>
                 </swiper-slide> 
                 <?php endwhile; ?>
                 </swiper-container>

                </div>
            </article>


