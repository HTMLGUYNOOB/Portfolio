// SHORTCODE [my_projects_loop]
add_shortcode('my_projects_loop', function() {
    ob_start();

    // Το Query τραβάει 3 projects και βάζει το "featured" ΠΡΩΤΟ
    $query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'category_name'  => 'projects',
        'meta_query'     => array(
            array('key' => 'pinned_project', 'value' => '1')
        ),
        'meta_key'       => 'project_position',
        'orderby'        => 'meta_value', 
        'order'          => 'ASC' // Το featured (f) έρχεται πριν το secondary (s)
    ));

    if ($query->have_posts()) :
        echo '<div class="custom-projects-grid">'; // Κράτα το δικό σου container class εδώ
        
        while ($query->have_posts()) : $query->the_post();
            
            $p_id = get_the_ID();
            $link = get_field('project_url');
            $btn_text = get_field('button_text');
            $content = get_the_content();
            ?>
            
            <div class="project-card-custom"> 
                <div class="project-card-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                  
                <div class="project-card-content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words($content, 20, '...'); ?></p>
                    
                    <button class="read-more-btn" onclick="document.getElementById('modal-<?php echo $p_id; ?>').style.display='flex'">
                        Περισσότερα
                    </button>
                    
                    <?php if($btn_text && $link): ?>
                        <a href="<?php echo esc_url($link); ?>" class="project-btn" target="_blank">
                            <?php echo esc_html($btn_text); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div id="modal-<?php echo $p_id; ?>" class="custom-modal">
                    <div class="modal-content">
                        <span class="close-btn" onclick="document.getElementById('modal-<?php echo $p_id; ?>').style.display='none'">&times;</span>
                        <h2><?php the_title(); ?></h2>
                        <div class="modal-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        
        echo '</div>';
        wp_reset_postdata();
    endif;

    return ob_get_clean();
});