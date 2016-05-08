<?php
/*
  Template Name: Home Page
*/

// Custom fields
$sub_header                   = get_post_meta( 11, 'sub_header', true );
$person_one_name              = get_post_meta( 11, 'person_one_name', true );
$person_two_name              = get_post_meta( 11, 'person_two_name', true );
$person_three_name            = get_post_meta( 11, 'person_three_name', true );
$person_one_description       = get_post_meta( 11, 'person_one_description', true );
$person_two_description       = get_post_meta( 11, 'person_two_description', true );
$person_three_description     = get_post_meta( 11, 'person_three_description', true );
$person_pic1                  = get_post_meta( 11, 'person_pic1', true );
$person_pic2                  = get_post_meta( 11, 'person_pic2', true );
$person_pic3                  = get_post_meta( 11, 'person_pic3', true );
$testimonials                 = get_post_meta( 11, 'testimonials', true );
$topic_one_header             = get_post_meta( 11, 'topic_one_header', true );
$topic_one_description        = get_post_meta( 11, 'topic_one_description', true );
$topic_two_header             = get_post_meta( 11, 'topic_two_header', true );
$topic_two_description        = get_post_meta( 11, 'topic_two_description', true );
$topic_three_header           = get_post_meta( 11, 'topic_three_header', true );
$topic_three_description      = get_post_meta( 11, 'topic_three_description', true );
$quote                        = get_post_meta( 11, 'quote', true );
$quote_author                 = get_post_meta( 11, 'quote_author', true );

get_header(); ?>

<!-- Main body
==============================================================||▷ -->
<section id="main">

  <!-- Header
  ============================================================||▷ -->
  <div id="header">
    <div class="header-bit">
      <h2>#<?php bloginfo('name') ?></h2>
      <img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" alt="<?php bloginfo('description') ?>" />
    </div>
  </div>
  <!-- Header :: END
  ============================================================||▷ -->

  <!-- Overview section
  ============================================================||▷ -->
  <div id="overview">
    <div class="content">
      <div class="skyline">
        <img src="<?php bloginfo('template_directory'); ?>/css/img/tokyo_skyline.png" alt="" />
        <h3>
          <?php echo $sub_header; ?>
        </h3>
      </div>
      <div class="introduction">
        <h2>
          Who we are
        </h2>
        <div class="separator separator--dark">
        </div>
        <div class="people">
          <div class="person first">
            <div class="person-under">
              <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic1 ?>.jpg" alt="" />
              <h4><?php echo $person_one_name; ?></h4>
            </div>
            <div class="person-cover">
              <div class="person-cover--photo">
                <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic1 ?>.jpg" alt="" />
              </div>
              <div class="person-cover--description">
                <h4>
                  <?php echo $person_one_name; ?>
                </h4>
                <p>
                  <?php echo $person_one_description; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="person second">
            <div class="person-under">
              <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic2 ?>.jpg" alt="" />
              <h4><?php echo $person_two_name; ?></h4>
            </div>
            <div class="person-cover">
              <div class="person-cover--photo">
                <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic2 ?>.jpg" alt="" />
              </div>
              <div class="person-cover--description">
                <h4>
                  <?php echo $person_two_name; ?>
                </h4>
                <p>
                  <?php echo $person_two_description; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="person third">
            <div class="person-under">
              <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic3 ?>.jpg" alt="" />
              <h4><?php echo $person_three_name; ?></h4>
            </div>
            <div class="person-cover">
              <div class="person-cover--photo">
                <img src="<?php bloginfo('template_directory'); ?>/css/img/<?php echo $person_pic3 ?>.jpg" alt="" />
              </div>
              <div class="person-cover--description">
                <h4>
                  <?php echo $person_three_name; ?>
                </h4>
                <p>
                  <?php echo $person_three_description; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Overview section :: END
  ============================================================||▷ -->

  <!-- Kudos section
  ============================================================||▷ -->
  <div id="quotation">
    <div class="content">
      <h3>
        <?php echo $testimonials ?>
      </h3>
    </div>
  </div>
  <!-- Kudos section :: END
  ============================================================||▷ -->

  <!-- Topics section
  ============================================================||▷ -->
  <div id="topics">
    <div class="content">
      <h2>
        What we write about
      </h2>
      <div class="separator separator--dark">
      </div>
      <div class="blocks">
        <div class="society block">
          <div class="text">
            <h4>
              <?php echo $topic_one_header; ?>
            </h4>
            <p>
              <?php echo $topic_one_description; ?>
            </p>
          </div>
          <div class="cover">
          </div>
        </div>
        <div class="travel block">
          <div class="text">
            <h4>
              <?php echo $topic_two_header; ?>
            </h4>
            <p>
              <?php echo $topic_two_description; ?>
            </p>
          </div>
          <div class="cover">
          </div>
        </div>
        <div class="critique block">
          <div class="text">
            <h4>
              <?php echo $topic_three_header; ?>
            </h4>
            <p>
              <?php echo $topic_three_description; ?>
            </p>
          </div>
          <div class="cover">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topics section :: END
  ============================================================||▷ -->

  <!-- Latest posts section
  ============================================================||▷ -->
  <div id="latest-posts">
    <div class="latest-top">
      <div class="content">
        <h2>What we have written lately</h2>
        <div class="separator separator--light"></div>
      </div>
    </div>
    <div class="latest-mid shadow--top-bottom-inset">

      <?php echo do_shortcode( '[advps-slideshow optset="1"]' ); ?>

    </div>
    <div class="latest-bottom">
      <div class="latest-bottom--inside">
        <div class="content">
          <div class="quote">
            <h3><?php echo $quote; ?></h3>
            <p><?php echo $quote_author; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Latest posts section :: END
  ============================================================||▷ -->

</section>
<!-- Main body :: END
==============================================================||▷ -->

<?php get_footer(); ?>
