<?php
/**
 * The Front Page Template File
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

get_header();?>


<section id="hero" data-vide-bg="wp-content/themes/ljc-awps/assets/dist/images/BG-Video/LJC_BG_WEB"
    data-vide-options="loop: true, muted: true, position: 0% 0%, className: ljcbgweb">
    <div class="container full-height">
        <div class="row">
            <img class="main-logo"
                src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/LJC-Logo_Weiss.svg"
                alt="<?php bloginfo('name');?>" title="<?php bloginfo('name');?>">
        </div>
        <div class="row">
            <div id="videobutton" class="">Video sehen</div>
        </div>
    </div>
</section>

<?php get_template_part('page-templates/front-page/section', 'ausschreibung'); // Wird nur angezeigt, wenn eine Phase mit "Status: Ausschreibung" vorhanden ist. ?>
<?php get_template_part('page-templates/front-page/section', 'konzerte'); // // Wird nur angezeigt, wenn mindestens ein Konzert noch nicht stattgefunden hat. ?>
<?php //get_template_part( 'page-templates/front-page/section', 'jubilaeum' ); ?>
<?php get_template_part('page-templates/front-page/section', 'aktuelles'); // Wird immer angezeigt. Blog + Arbeitsphasen mit Status Nachlese ?>

<?php
get_footer();