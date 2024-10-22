<div class="related-photo-item">
    <a href="<?php the_permalink(); ?>" class="photo-link">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <div class="photo-overlay">
            <span class="icon-eye"><i class="fas fa-eye"></i></span>
            <!-- L'icône qui déclenche la lightbox -->
            <span class="icon-fullscreen" data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>">
                <i class="fas fa-expand-arrows-alt"></i>
            </span>
        </div>
    </a>
</div>