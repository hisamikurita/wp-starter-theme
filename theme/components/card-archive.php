<?php
$title = $args['title'] ?? ''; // string
$category = $args['category'] ?? ''; // string
$href = $args['href'] ?? ''; // string
$images = $args['images'] ?? []; // string
?>

<article>
  <a href="<?= $href ?>">
    <p>
      <img src="<?= vite_src_images('sample-02.jpg') ?>" width="600" height="400" decoding="async" alt="" class="w-full h-full object-cover">
    </p>
    <p class="font-bold text-[14px]"><?= $category ?></p>
    <h2 class="font-bold text-[20px]"><?= $title ?></h2>
  </a>
</article>