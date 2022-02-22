<header id="site-header">
  <div class="container site-header__inner">
    <?php if ($pageID != 'lp') : ?>
      <div class="ta-logo">
        <div class="img">
          <a href="<?php echo $Path; ?>">
            <img src="<?php echo $Path; ?>images/common/taian-logo.svg" alt="TAIAN" width="262">
          </a>
        </div>

        <div class="residence">
          <div class="residence__txt">［タイアンレジデンス 湘南台］</div>
          <span class="residence__txt-small">
            RC造のデザイナーズ新築分譲住宅 全２邸
          </span>
          <div class="residence__img">
            <img src="<?php echo $Path; ?>/images/common/txt_residence.svg" alt="RESIDENCE" width="333" height="47">
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="site-header__contact-box">
      <a href="tel:045-227-5031" class="site-header__tel">TEL.045-227-5031</a>
      <div class="contact-box__txt">
        お問合せ先／ワンズリアルティ株式会社<br />
        <span class="contact-box__txt-small">営業時間／10:00-18:00　定休日／火・水曜日</span>
      </div>
    </div>
    <!-- /.site-header__contact-box -->
    <div class="scroll">
      <img src="<?php echo $Path; ?>images/common/icon-scroll.svg" alt="scroll" width="20" height="200">
    </div>
    <div class="site-action">
      <a href="javascript:void(0);" id="btn_open_menu">
        <img src="<?php echo $Path; ?>/images/common/icon-menu.svg" alt="Menu" width="55" height="40">
      </a>
      <a href="tel:045-227-5031" class="btn-tel">
        <img src="<?php echo $Path; ?>/images/common/icon-tel.svg" alt="TELマーク" width="55" height="42">
      </a>
      <a href="<?php echo $Path; ?>inquiry.php" class="btn-inquiry">
        <img src="<?php echo $Path; ?>/images/common/icon-letter.svg" alt="メールマーク" width="55" height="42">
      </a>
    </div>
  </div>
  <!-- /.site-header__inner -->
</header>
<!-- /#site-header -->
<?php if ($pageID != 'lp') : ?>
  <section id="page-heading">
    <div class="page-heading__inner">
      <h1 class="page-ttl">
        <?php if (isset($pageNameEn)) : ?>
          <span class="en">
            <?php if (isset($pageNameEnImg) && $pageNameEnImg) : ?>
              <img src="<?php echo $Path; ?><?php echo $pageNameEnImg; ?>" alt="<?php echo $pageNameEn; ?>">
            <?php
            else :
              echo $pageNameEn;
            endif;
            ?>
          </span>
        <?php endif; ?>
        <span class="ja"><?php echo $pageName; ?></span>
      </h1>
    </div>
  </section>
<?php endif; ?>
