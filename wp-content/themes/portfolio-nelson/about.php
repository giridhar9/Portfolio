<?php
/**
*
*Template Name:about page
* @package RED_Starter_Theme
*/
get_header(); ?>
  <div class="about-page">
	<div class="about-content">
	  <div class="about-image">
	    <h2><?php echo CFS()->get('title3'); ?></h2>
    <div class="video">
      <?php echo CFS()->get('description3'); ?>
    </div>
    <div class="resume">
      <a href="<?php echo ot_get_option( 'resume-file' ); ?>">
      <h2>DOWNLOAD MY RESUME</h2>
      </a>
    </div>
    <div class="about-text">
      <div class="about-nelson">
       <?php
       $pageId = 86;
       $page_data = get_page($pageId);
       echo '<h3>'. $page_data->post_content .'</h3>'; 
       ?>
     </div>
    </div>
	   </div>


	</div>
    <div class="kanye-gif">
    <h2><?php echo CFS()->get('title'); ?></h2>
	<?php echo wp_get_attachment_image(CFS()->get('image'),'full');?>
         <h2>Some call Nelson the <span class="red">Microsoft Painter</span>
        </div>
      <div class="gifs">
        <img src="<?php echo get_template_directory_uri();?>/images/newgif2.gif" alt="nelson-gif">

        <img src="<?php echo get_template_directory_uri();?>/images/newgif1.gif" alt="nelson-gif2">
        </div>
        <div class="gif-description">
        <h2>Some say he is obsessed with making gifs</h2>
         </div>
         <div class="video">
           <?php echo CFS()->get('description2'); ?>
           <h2>Others say he is going to be the next youtube sensation</h2>
       </div>
   </div>

   <?php get_footer(); ?>