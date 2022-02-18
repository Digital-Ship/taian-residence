<?php $menuPath = ($pageID == 'lp') ? "" : $Path;
$class = ($pageID == 'lp') ? 'class="anchor-link"' : ''; ?>
<ul>
  <li>
    <a href="<?php echo $menuPath; ?>#image-view" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_image_view.svg" alt="IAMGE VIEW">
      <span>建物施工イメージ</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#landscape" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_landscape.svg" alt="LANDSCAPE">
      <span>区画図</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#plan" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_plan.svg" alt="PLAN">
      <span>間取</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#equipment" class="anchor-link equipment">
      <img src="<?php echo $Path; ?>/images/common/txt-menu_equipment.svg" alt="EQUIPMENT">
      <span>設備・仕様</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#structure" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_structure.svg" alt="STRUCTURE">
      <span>構　造</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#warranty" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_warranty.svg" alt="WARRANTY">
      <span>保　証</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#location" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_location.svg" alt="LOCATION">
      <span>ロケーション</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#life_information" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_life_information.svg" alt="LIFE INFORMATION">
      <span>生活環境</span>
    </a>
  </li>
</ul>
