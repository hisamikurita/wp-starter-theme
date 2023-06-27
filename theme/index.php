<?php
get_header();
?>

<div class="index">
  <div class="index__bg">
    <div class="container">
      <h1 class="index__logo">
        <img src="<?= vite_src_images('logo.svg') ?>" width="58" height="48" decoding="async" alt="LIG" class="w-full">
      </h1>
      <div class="index__thumbnail">
        <img src="<?= vite_src_images('sample-02.jpg') ?>" width="1280" height="600" decoding="async" alt="">
      </div>
      <ul class="index__anchor__list">
        <li class="index__anchor__item"><a href="#two-column-one" class="js-anchor-link">・2カラムの1番目</a></li>
        <li class="index__anchor__item"><a href="#two-column-two" class="js-anchor-link">・2カラムの2番目</a></li>
        <li class="index__anchor__item"><a href="#top" class="js-anchor-link">・ページトップ</a></li>
      </ul>
      <div id="two-column-one" class="index__column">
        <div class="index__column__img">
          <img src="<?= vite_src_images('sample-02.jpg') ?>" width="600" height="400" decoding="async" alt="">
        </div>
        <p class="index__column__text">どっちは事実同時にこの約束方に対して事のためをあるたう。どうしても今が命令目は無論この前後ますありなりがするていたからはお話間違っでまして、しばらくには云っんたでた。客をただすんのはひとまず事実でしかるにたないだろ。もっと木下さんで融通中学始終修養にしで世の中この顔何か附随にというお意見たんたなくが、その結果ぞ私か国民師範に述べると、大森さんの事をご免の私をまずご注意と払って私先輩をご安心を亡びるようによほどご意味がいううだば、まるでもし膨脹へおりならで得るだ旨であるですござい。</p>
      </div>
      <div id="two-column-two" class="index__column index__column--reverse">
        <div class="index__column__img">
          <img src="<?= vite_src_images('sample-02.jpg') ?>" width="600" height="400" decoding="async" alt="">
        </div>
        <p class="index__column__text">どっちは事実同時にこの約束方に対して事のためをあるたう。どうしても今が命令目は無論この前後ますありなりがするていたからはお話間違っでまして、しばらくには云っんたでた。客をただすんのはひとまず事実でしかるにたないだろ。もっと木下さんで融通中学始終修養にしで世の中この顔何か附随にというお意見たんたなくが、その結果ぞ私か国民師範に述べると、大森さんの事をご免の私をまずご注意と払って私先輩をご安心を亡びるようによほどご意味がいううだば、まるでもし膨脹へおりならで得るだ旨であるですござい。</p>
      </div>
      <div class="index__accordion">
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン1</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身</dd>
        </dl>
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン2</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身</dd>
        </dl>
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン3</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>