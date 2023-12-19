<?php get_header(); ?>
    <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            _e('Aucun contenu trouvÃ©.', 'textdomain');
        endif;
        ?>
<?php get_footer(); ?>