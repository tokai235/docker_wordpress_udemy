<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Navigation -->
  <?php get_template_part('template-parts/header-nav'); ?>

  <?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>

  <!-- Page Header -->
  <header class="masthead"
    style="background-image: url(<?php echo get_eyecatch_image_url_with_default(); ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- Footer -->
  <?php get_template_part('template-parts/footer-buttons'); ?>

  <?php get_footer(); ?>
</body>

</html>