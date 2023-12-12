<style>
    .portfolio-items {
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
    }

    .portfolio-item {
        flex: 0 0 50%;
        box-sizing: border-box;
        padding: 15px;
        width: 100%;
    }
</style>

<?php
/**
 * Template for displaying a single portfolio item.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$project_url = get_post_meta(get_the_ID(), 'project_url', true);
$client_name = get_post_meta(get_the_ID(), 'client_name', true);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?> style="border: 1px solid #ccc; margin-bottom: 20px; padding: 20px; background-color: #f9f9f9; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="portfolio-item-inner">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php echo esc_url(set_url_scheme($project_url, 'https')); ?>" target="_blank">
                <div class="portfolio-item-image">
                    <?php the_post_thumbnail('portfolio-thumbnail', array('style' => 'max-width: 100%; height: auto; border: 1px solid #ddd;')); ?>
                </div>
            </a>
        <?php endif; ?>

        <div class="portfolio-item-content" style="margin-top: 20px;">
            <h3 style="font-size: 24px; margin-bottom: 10px; color: #333; border-bottom: 2px solid #3498db; padding-bottom: 10px;"><?php the_title(); ?></h3>

            <?php if (!empty($project_url)) : ?>
                <p class="project-url" style="font-style: italic; margin-bottom: 10px;">
                    <strong style="color: #333;"><?php esc_html_e('Project URL:', 'textdomain'); ?></strong>
                    <a href="<?php echo esc_url(set_url_scheme($project_url, 'https')); ?>" target="_blank" style="color: #3498db;"><?php echo esc_url($project_url); ?></a>
                </p>
            <?php endif; ?>

            <?php if (!empty($client_name)) : ?>
                <p class="client-name" style="font-style: italic; margin-bottom: 10px;">
                    <strong style="color: #333;"><?php esc_html_e('Client Name:', 'textdomain'); ?></strong>
                    <?php echo esc_html($client_name); ?>
                </p>
            <?php endif; ?>

            <h4 style="font-size: 18px; margin-bottom: 10px; color: #333;"><?php esc_html_e('Project Description:', 'textdomain'); ?></h4>
            <?php the_content(); ?>
        </div>
    </div>
</article>
