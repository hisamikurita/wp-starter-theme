<?php
get_header();
?>

<div class="archive">
  <div class="pt-[90px]">
    <div class="w-[1280px] mx-auto">
      <h1 class="text-[120px] text-center">
        ARCHIVE
      </h1>
      <!-- メインループ -->
      <?php if (have_posts()) : ?>
        <ul class="grid grid-cols-3 gap-[40px]">
          <?php while (have_posts()) : the_post();
            $id = get_the_ID();
            $title = get_the_title();
            $href = get_permalink();
            $category = get_the_category()[0]->name;
            $image_id = get_post_thumbnail_id($id);
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $image_src = get_the_post_thumbnail_url();
            $images = [
              'src' => $image_src,
              'alt' => $image_alt,
            ];
          ?>
            <li>
              <?php get_template_part('./components/card-archive', null, [
                'title' => $title,
                'category' => $category,
                'href' => $href,
                'images' => $images,
              ]) ?>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>