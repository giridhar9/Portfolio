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
	    <?php the_post_thumbnail(); ?>
	   </div>

	<div class="about-text">
	  <?php
	    $pageId = 86;
      $page_data = get_page($pageId);
	     echo '<h3>'. $page_data->post_content .'</h3>'; 
	     ?>
	  </div>

	</div>
    <div class="kanye-gif">
    <p><?php echo CFS()->get('title'); ?></p>
	<?php echo wp_get_attachment_image(CFS()->get('image'),'full');?>
	  <p>music/drawing/art</p>
         <p>this art piece was done on <span class="red">Microsoft Paint</span> (yes that very old paint program you probably drew line squiggles on at one point in your life)</p> 
        </div>
      <div class="gifs">
        <img src="<?php echo get_template_directory_uri();?>/images/newgif2.gif" alt="nelson-gif">

        <img src="<?php echo get_template_directory_uri();?>/images/newgif1.gif" alt="nelson-gif2">
        </div>
        <div class="gif-description">
        <p>making gifs</p>
        <p>what started out as just making funny gifs for friends has expanded into gifs, gifs and more gifs!</p>
         </div>
         <div class="video">
           <?php echo CFS()->get('description2'); ?>
           <p>making videos</p>
           <p>who doesn't like watching videos</p>
       </div>
   </div>

   <?php get_footer(); ?>