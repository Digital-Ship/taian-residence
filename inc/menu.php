<?php $menuPath = ($pageID == 'lp') ? "" : $Path;
$class = ($pageID == 'lp') ? 'class="anchor-link"' : ''; ?>
<ul>
  <li>
    <a href="<?php echo $menuPath; ?>#image-view" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_image_view.svg" alt="IAMGE VIEW" width="162" height="20">
      <span>建物施工イメージ</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#landscape" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_landscape.svg" alt="LANDSCAPE" width="153" height="20">
      <span>区画図</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#plan" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_plan.svg" alt="PLAN" width="65" height="20">
      <span>間取</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#equipment" class="anchor-link equipment">
      <img src="<?php echo $Path; ?>/images/common/txt-menu_equipment.svg" alt="EQUIPMENT" width="147" height="29">
      <span>設備・仕様</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#structure" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_structure.svg" alt="STRUCTURE" width="154" height="20">
      <span>構　造</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#warranty" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_warranty.svg" alt="WARRANTY" width="153" height="20">
      <span>保　証</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#location" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_location.svg" alt="LOCATION" width="129" height="20">
      <span>ロケーション</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $menuPath; ?>#life_information" <?php echo $class; ?>>
      <img src="<?php echo $Path; ?>/images/common/txt-menu_life_information.svg" alt="LIFE INFORMATION" width="245" height="20">
      <span>生活環境</span>
    </a>
  </li>
</ul>
