<?php
/**
 * The main template file.
 *
 * @package Portfolio-Nelson
 */

get_header(); 
?>

<div class="logo">
	<img src="<?php echo get_template_directory_uri(); ?>/images/HomepageLogo.gif?<?php echo date("Ymdgis");?>" alt="logo">
</div>


<?php
$args = array( 'posts_per_page' => 12, 'post_type' => 'projects' );
$blog_posts = get_posts( $args ); 
?>
<div class="project-images">

 <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
 <div class="project-single"> 
   <div class="image"> 
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="content">
    <div class="content-text">
      <?php the_content(); ?>
    </div>

    <div class="home-button">

      <a href="<?php the_permalink(); ?>">
       <button id="button">
         <p>Learn More</p>
       </button>
     </a>
   </div>
 </div>
</div>

<?php endforeach; wp_reset_postdata(); ?>

</div>

<?php
$args = array( 'posts_per_page' => 12, 'post_type' => 'skills' );
$skills_posts = get_posts( $args ); 
?>
<div class="skills">
 <ul> 
   <?php foreach ( $skills_posts as $post ) : setup_postdata( $post ); ?>

   <li> 
     <div class="skills-image"> 
      <?php the_post_thumbnail(); ?>
    </div>
    <div>
      <h3>
        <?php the_title(); ?>
      </h3>
      <div>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="caption">
        <p><?php echo CFS()->get('title'); ?></p> 
      </div>
    </div>
  </li>


<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>

<?php
$args = array( 'posts_per_page' => 12, 'post_type' => 'softwares' );
$software_posts = get_posts( $args ); 
?>
<div class="softwares">
  <h2>Softwares Used</h2>
  <ul> 
   <?php foreach ( $software_posts as $post ) : setup_postdata( $post ); ?>

   <li> 
    <div class="softwares-image">
      <?php the_post_thumbnail(); ?>
    </div>
  </li>

<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>

<?php get_footer(); ?>