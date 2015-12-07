<?php get_header(); ?>
<div class="single-project">
	<div class="project-content">
	 <div class="project-image">
      <?php echo wp_get_attachment_image(CFS()->get('image'),'large');?>
      </div>
     </div>

     <div class="project-content"> 
       <p><h2>What is <span class="red"><?php the_title() ?></span>?</h2></p>
         <p><?php echo CFS()->get('description'); ?></p>
     </div>

    <div class="project-content">
    <div class="project-image">
     <?php echo wp_get_attachment_image(CFS()->get('image2'),'large');?>
     </div>
         <h2><?php echo CFS()->get('title2'); ?></h2>
         <p><?php echo CFS()->get('description2'); ?></p>
         </div>

     <div class="prject-content">
     	<div class="project-image">
         <?php echo wp_get_attachment_image(CFS()->get('image3'),'large');?>
        </div>
        <h2><?php echo CFS()->get('title3'); ?></h2>
        <p><?php echo CFS()->get('description3'); ?></p>
    </div>

    <div class="project-content">
    <div class="project-image">
     <?php echo wp_get_attachment_image(CFS()->get('image4'),'large');?>
    </div>
        <h2><?php echo CFS()->get('title4'); ?></h2>
        <p><?php echo CFS()->get('description4');?></p>
    </div>

    <div class="project-content">
    <div class="project-image">
     <?php echo wp_get_attachment_image(CFS()->get('image5'),'large');?>
    </div>
        <h2><?php echo CFS()->get('title5'); ?></h2>
        <p><?php echo CFS()->get('description5');?></p>
    </div>

    <div class="project-content">
    <div class="project-image">
     <?php echo wp_get_attachment_image(CFS()->get('image6'),'large');?>
    </div>
        <h2><?php echo CFS()->get('title6'); ?></h2>
        <p><?php echo CFS()->get('description6');?></p>
    </div>

</div>

                             
         