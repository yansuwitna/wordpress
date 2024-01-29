<?php get_header(); ?>



<div class="container">
    <div class="header">
        <div class="judul">
            <h1><?php  bloginfo('name'); ?></h1>
        </div>
        <div class="menuatas">
            <?php 
                if (has_nav_menu('menuku')) {
                    wp_nav_menu(array(
                        'theme_location' => 'menuku',
                        'container' => 'div',
                        'container_class' => 'sidebar-menu-container',
                        'menu_class' => 'sidebar-menu'
                    ));
                }

            ?>
        </div>

    </div>
    <div class="foto">
    <?php if(is_active_sidebar('foto')){
        dynamic_sidebar('foto');
    }
        ?>
    </div>
    <div class="isi">
        <div class="post">
            <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>

                    <h3>Judul</h3>
                    <div class="identitas">Dibuat Oleh <?php the_author(); ?> Waktu <?php the_time(); ?></div>
                    <div class="isi-pos">
                        <?php the_content(); ?>
                    </div>

                    <?php
                }
            }


            ?>
        </div>
        <div class="widget">
        <?php if(is_active_sidebar('kanan')){
            dynamic_sidebar('kanan');
            
        }
        ?>
        </div>
    </div>
    <div class="footer">
        Copyright &copy; Suwitna 2024
    </div>
    
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>