<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php echo $pageTitle; ?></title>
<link rel="canonical" href="">
<meta name="keywords" content="<?php echo $keyword; ?>">
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:title" content="<?php echo $pageTitle; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:site_name" content="<?php echo $pageName; ?>">
<meta property="og:email" content="<?php echo $pageName_url; ?>">
<meta property="og:locale" content="ja_JP">
<link rel="shortcut icon" href="<?php echo $Path; ?>favicon.png">
<link rel="apple-touch-icon" href="<?php echo $Path; ?>favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Noto+Serif+JP:wght@500;600;700&display=swap&subset=japanese" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $Path; ?>css/reset.css">
<link rel="stylesheet" href="<?php echo $Path; ?>css/common.css">
<link rel="stylesheet" href="<?php echo $Path; ?>css/header.css">
<link rel="stylesheet" href="<?php echo $Path; ?>css/footer.css">
<?php if ($pageID === 'lp') : //IDがsampleのページのみに反映
?>
  <link rel="stylesheet" href="<?php echo $Path; ?>css/lp.css">
<?php else : ?>
  <link rel="stylesheet" href="<?php echo $Path; ?>css/<?php echo $pageID; //pageIDと同じ名前のCSS読み込み
                                                        ?>.css">
<?php endif; ?>
