<?php get_header(); ?>
<?php $page = get_page(get_the_ID(), ARRAY_A); ?>
    <!-- INFOS -->
    <div id="marketing_title">
      <?php
          echo get_the_title(get_the_ID());
      ?>
    </div>
    <?php
          echo $page['post_content'];
    ?>
    <!--<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>-->
    <br><br>
    <?php get_footer() ?>