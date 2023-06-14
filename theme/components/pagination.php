<?php
$pagination = $args['pagination'] ?? [];
?>

<nav class="pagination">
  <ul class="pagination__list">
    <?php
    if ($pagination['prev']) :
    ?>
      <li class="pagination__item">
        <a class="pagination__arrow pagination__arrow--prev pagination__hover" href="<?= get_pagenum_link($pagination['prev']) ?>">
          <?= get_svg_sprite('arrow-pagination') ?>
        </a>
      </li>
    <?php
    endif;

    foreach ($pagination['numbers'] as $k => $i) :
    ?>
      <li class="pagination__item">
        <?php if ($i !== $pagination['current']) : ?>
          <a class="pagination__link pagination__hover" href="<?= get_pagenum_link($i) ?>">
            <?= $i ?>
          </a>
        <?php else : ?>
          <span class="pagination__link pagination__hover is-current">
            <?= $i ?>
          </span>
        <?php endif; ?>
      </li>
      <?php
      if (
        array_key_exists($k + 1, $pagination['numbers']) &&
        $pagination['numbers'][$k + 1] - $i > 1
      ) :
      ?>
        <li class="pagination__item">
          <span class="pagination__leader">
            ...
          </span>
        </li>
      <?php
      endif; ?>
    <?php
    endforeach;

    if ($pagination['next']) :
    ?>
      <li class="pagination__item">
        <a class="pagination__arrow pagination__arrow--next pagination__hover" href="<?= get_pagenum_link($pagination['next']) ?>">
          <?= get_svg_sprite('arrow-pagination') ?>
        </a>
      </li>
    <?php
    endif;
    ?>
  </ul>
</nav>