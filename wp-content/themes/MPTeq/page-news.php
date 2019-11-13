<?php get_header()?>
<main>
    <section id="news1" class="design">

        <?php
            $args = array(
            'post_type'      => 'post',
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>

        <a href="<?php the_permalink()?>" class="news">
            <div class="left">
                <div class="day"><?php the_time("d")?></div>
                <div class="month"><?php the_time("F")?></div>
            </div>
            <div class="right">
                <h2><?php the_title()?></h2>
                <p><?php the_excerpt()?></p>
            </div>
        </a>
        <?php endwhile; endif; wp_reset_query()?>
    </section>
    <section id="news2" class="design">
        <?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>
        <article class="news">
            <div class="wrap">
                <img src="<?php the_post_thumbnail_url()?>">
                <div class="title-date">
                    <a href="<?php the_permalink()?>">
                        <h2><?php the_title()?></h2>
                    </a>
                    <p><?php the_time("jS F Y")?></p>
                </div>
                <p><?php the_excerpt()?></p>
            </div>
        </article>
        <?php endwhile; endif?>
        <article class="news">
            <div class="wrap">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/10/IMG_20190409_093800.jpg">
                <div class="title-date">
                    <h2>News Article</h2>
                    <p>18 November</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.</p>
            </div>
        </article>
        <article class="news">
            <div class="wrap">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/10/IMG_20190409_093800.jpg">
                <div class="title-date">
                    <h2>News Article</h2>
                    <p>18 November</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.</p>
            </div>
        </article>
        <article class="news">
            <div class="wrap">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/10/IMG_20190409_093800.jpg">
                <div class="title-date">
                    <h2>News Article</h2>
                    <p>18 November</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quas, provident explicabo itaque
                    temporibus illum exercitationem ea, nulla fugit accusamus nobis. Earum placeat ex tempora fuga,
                    omnis quod amet facere.</p>
            </div>
        </article>
    </section>
    <input id="main-toggle" class="toggle" type="range" min="0" max="1" value="0">
</main>
<?php get_footer()?>