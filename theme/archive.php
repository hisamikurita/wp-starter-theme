<?php
get_header();
?>

<div class="archive">
  <div class="pt-[90px]">
    <div class="w-[1280px] mx-auto">
      <h1 class="text-[120px] text-center">
        ARCHIVE
      </h1>
      <ul>
        <li>
          <?php get_template_part('./components/article') ?>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php
get_footer();
?>