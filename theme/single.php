<?php
get_header();
?>

<div class="about">
  <div class="pt-[90px]">
    <div class="w-[1280px] mx-auto">
      <?php get_template_part('./components/heading-page', null, [
        'title' => 'SINGLE',
      ]) ?>
      <div class="mt-[100px]">
        <div class="editor">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>