<?php
$title = $args['title'] ?? ''; // string
$category = $args['category'] ?? ''; // string
$href = $args['href'] ?? ''; // string
$images = $args['images'] ?? []; // array
?>

<article>
  <a href="<?= $href ?>">
    <p class="h-[280px]">
      <?php if ($images['src']) : ?>
        <img src="<?= $images['src'] ?>" width="600" height="400" decoding="async" alt="<?= $images['alt'] ?>" class="w-full h-full object-cover">
      <?php else : ?>
        <img src="<?= vite_src_images('noimage.jpg') ?>" width="800" height="560" decoding="async" alt="" class="w-full h-full object-cover">
      <?php endif; ?>
    </p>
    <p class="mt-[24px] font-bold text-[14px]"><?= $category ?></p>
    <h2 class="mt-[18px] font-bold text-[20px] line-clamp-3"><?= $title ?></h2>
  </a>
</article>