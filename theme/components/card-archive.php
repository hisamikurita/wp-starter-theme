<?php
$title = $args['title'] ?? ''; // string
$category = $args['category'] ?? ''; // string
$href = $args['href'] ?? ''; // string
$images = $args['images'] ?? []; // array
?>

<article>
  <a href="<?= $href ?>">
    <p>
      <img src="<?= $images['src'] ?>" width="600" height="400" decoding="async" alt="<?= $images['alt'] ?>" class="w-full h-full object-cover">
    </p>
    <p class="mt-[12px] font-bold text-[14px]"><?= $category ?></p>
    <h2 class="mt-[12px] font-bold text-[20px] line-clamp-3"><?= $title ?></h2>
  </a>
</article>