
<section class="trade__marks own-section-marcs marks">
  <div class="marks__container">
    <?php
      if (!empty($section_title)) {
        echo '<div class="marks__seporator"></div>';
        echo '<h2 class="marks__title title-full title">'. $section_title .' </h2>';
      }
    ?>

    <!-- <h2 class="marks__title title-full title">
      Cобственные торговые марки
    </h2>
    <h2 class="marks__title title-truncated title">
      Cобственные марки
    </h2> -->

    <div class="marks__content flex">
      <a href="#" class="marks__link-left marks-link grid">
        <div class="marks__content-image">
          <svg class="marks__icons">
            <use href="img/sprite.svg#ag_tech"></use>
          </svg>
        </div>

              
        <h3 class="marks__content-subtitle">
          Автохимия AG-Tech
        </h3>
        <p class="marks__content-text">
          Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
        </p>
      </a>
      <a href="#" class="marks__link-right marks-link grid">
        <div class="marks__content-image">
          <svg class="marks__icons">
            <use href="img/sprite.svg#aliance_prod_icon"></use>
          </svg>
        </div>
              
              
        <h3 class="marks__content-subtitle">
          Автохимия AP
        </h3>
        <p class="marks__content-text">
          Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
        </p>
      </a>
    </div>
  </div>
</section>