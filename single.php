<?php

get_header();

while(have_posts()) {
	the_post(); ?>

<div class="container">
  <div class="row">
    <div class="col border">
      Previous Post
    </div>
    <div class="col border">
      Next Post
    </div>
  </div>
</div>

<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-title">
            <h1><?php the_title();?></h1>
          </div>
        </div>
      </div>
    </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
	<?php
}

get_footer();

?>