<?php get_header();?>

<main>
    <div id="box">

        <?php
            $paged1 = isset( $_GET['paged1'] ) ? (int) $_GET['paged1'] : 1;
            $paged2 = isset( $_GET['paged2'] ) ? (int) $_GET['paged2'] : 1;
            $paged3 = isset( $_GET['paged3'] ) ? (int) $_GET['paged3'] : 1;
            $paged4 = isset( $_GET['paged4'] ) ? (int) $_GET['paged4'] : 1;

            $args = array(
                'post_type' => 'page',
                'post_status' => 'private'
            );
            $backgrounds = new WP_Query($args);
            foreach ($backgrounds->posts as $post) {
                if($post->post_title == "ABOUT") {
                    $aboutbg = $post;
                }
                elseif($post->post_title == "PRODUCTS") {
                    $productsbg = $post;
                }
                elseif($post->post_title == "PROJECTS") {
                    $projectsbg = $post;
                }
                elseif($post->post_title == "NEWS") {
                    $newsbg = $post;
                }
            }


    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => $paged1,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'about.php',
            )
        )
    );
$about_query = new WP_Query($args);
?>

        <section id="about" class="section">
            <img class="background-image" src="<?php echo(get_the_post_thumbnail_url($aboutbg))?>">
            <?php if ($about_query -> have_posts()):?>
            <div class="content">
                <div class="nav">
                    <h2>ABOUT</h2>
                    <?php while ($about_query -> have_posts()): $about_query -> the_post();
                    if (get_the_title() != "ABOUT"):?>
                    <a id="<?php the_ID()?>"><?php the_title()?></a>
                    <?php endif;
                    endwhile;?>
                    <div id="paginate">
                        <?php
                    echo paginate_links(
                        array(
                        'format'             => '?paged1=%#%',
                        'current'            => $paged1,
                        'end_size'           => 1,
                        'mid_size'           => 3,
                        'prev_next'          => true,
                        'prev_text'          => __('«'),
                        'next_text'          => __('»'),
                        'total'              => $about_query->max_num_pages,
                        'add_args'           => array(
                            'paged2' => $paged2,
                            'paged3' => $paged3,
                            'paged4' => $paged4
                            )
                    )
                );?>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-chevron-up"></i>
                    <i class="fas fa-chevron-down"></i>
                    <?php $about_query -> rewind_posts();
                    while ($about_query -> have_posts()):
                    $about_query -> the_post();
                    if (get_the_title() != "ABOUT"):?>

                    <div class="info-option" id="<?php the_ID()?>">
                        <?php the_content()?>
                    </div>

                    <?php endif;
                    endwhile?>

                </div>
            </div>
            <?php endif?>
        </section>

        <?php
    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => $paged2,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'products.php',
            )
        )
    );
$products_query = new WP_Query($args);
?>

        <section id="products" class="section">
            <img class="background-image" src="<?php echo(get_the_post_thumbnail_url($productsbg))?>">
            <?php if ($products_query -> have_posts()):?>
            <div class="content">
                <div class="nav">
                    <h2>PRODUCTS</h2>
                    <?php while ($products_query -> have_posts()): $products_query -> the_post();
                    if (get_the_title() != "PRODUCTS"):?>
                    <a id="<?php the_ID()?>"><?php the_title()?></a>
                    <?php endif;
                    endwhile?>
                    <div id="paginate">
                        <?php
                    echo paginate_links(
                        array(
                            'format'             => '?paged2=%#%',
                            'current'            => $paged2,
                            'end_size'           => 1,
                            'mid_size'           => 3,
                            'prev_next'          => true,
                            'prev_text'          => __('«'),
                            'next_text'          => __('»'),
                            'total'              => $products_query->max_num_pages,
                            'add_args'           => array(
                                'paged1' => $paged1,
                                'paged3' => $paged3,
                                'paged4' => $paged4
                                )
                        )
                    );
                ?>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-chevron-up"></i>
                    <i class="fas fa-chevron-down"></i>

                    <?php $products_query -> rewind_posts();
                    while ($products_query -> have_posts()):
                    $products_query -> the_post();
                    if(get_the_title() != "PRODUCTS"):?>

                    <div class="info-option" id="<?php the_ID()?>">
                        <?php the_content()?>
                    </div>

                    <?php endif;
                    endwhile?>
                </div>
            </div>
            <?php endif?>
        </section>

        <?php
    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => $paged3,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'projects.php',
            )
        )
    );
$projects_query = new WP_Query($args);
?>

        <section id="projects" class="section">
            <img class="background-image" src="<?php echo(get_the_post_thumbnail_url($projectsbg))?>">
            <?php if ($projects_query -> have_posts()):?>
            <div class="content">
                <div class="nav">
                    <h2>PROJECTS</h2>
                    <?php while ($projects_query -> have_posts()): $projects_query -> the_post();
                    if (get_the_title() != "PROJECTS"):?>
                    <a id="<?php the_ID()?>"><?php the_title()?></a>
                    <?php endif;
                    endwhile?>
                    <div id="paginate">
                        <?php
                    echo paginate_links(
                        array(
                            'format'             => '?paged3=%#%',
                            'current'            => $paged3,
                            'end_size'           => 1,
                            'mid_size'           => 3,
                            'prev_next'          => true,
                            'prev_text'          => __('«'),
                            'next_text'          => __('»'),
                            'total'              => $projects_query->max_num_pages,
                            'add_args'           => array(
                                'paged1' => $paged1,
                                'paged2' => $paged2,
                                'paged4' => $paged4
                                )
                        )
                    );
                ?>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-chevron-up"></i>
                    <i class="fas fa-chevron-down"></i>
                    <?php $projects_query -> rewind_posts();
                    while ($projects_query -> have_posts()):
                    $projects_query -> the_post();
                    if (get_the_title() != "PROJECTS"):?>

                    <div class="info-option" id="<?php the_ID()?>">
                        <?php the_content()?>
                    </div>

                    <?php endif;
                    endwhile?>

                </div>
            </div>
            <?php endif?>
        </section>

        <section id="news" class="section">
            <img class="background-image" src="<?php echo(get_the_post_thumbnail_url($newsbg))?>">
            <div class="content">
                <?php if (have_posts()):?>
                <div class="nav">
                    <h2>NEWS</h2>
                    <?php while (have_posts()): the_post();?>
                    <a id="<?php the_ID()?>"><?php the_title()?></a>
                    <?php endwhile?>
                    <div id="paginate">
                        <?php
                echo paginate_links(
                    array(
                        'format'             => '?paged4=%#%',
                        'current'            => $paged4,
                        'end_size'           => 1,
                        'mid_size'           => 3,
                        'prev_next'          => true,
                        'prev_text'          => __('«'),
                        'next_text'          => __('»'),
                        'total'              => $wp_query->max_num_pages,
                            'add_args'           => array(
                                'paged1' => $paged1,
                                'paged2' => $paged2,
                                'paged3' => $paged3
                                )
                    )
                ); ?>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-chevron-up"></i>
                    <i class="fas fa-chevron-down"></i>
                    <?php wp_reset_postdata(); while (have_posts()): the_post();?>
                    <div class="info-option" id="<?php the_ID()?>">
                        <?php the_content()?>
                    </div>
                    <?php
                    endwhile?>
                </div>
                <?php endif?>
            </div>
        </section>
    </div>
</main>

<?php get_footer()?>