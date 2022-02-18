<?php
$Path = './';
$pageID = 'sampge';
$pageTitle = 'タイトルタグ用';
$pageSlug = 'ヘッダーの文言用';
$keyword = 'META,キーワード';
$description = 'METAディスクリプション用';
$h1 = 'ヘッダー内にH1がある時用';

//ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
//以下パンくず用
//ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
// $pageName4 = '下層ページテンプレート4';
// $pageName_url4 = './';
// $pageName3 = '下層ページテンプレート3';
// $pageName_url3 = './';
//$pageName2 = '最新情報';
//$pageName_url2 = './';
$pageName1 = 'TOPページ';
$pageName_url1 = "./";
$pageName = 'ご来場予約／各種お問合せ';
$pageNameEn = 'CONTACT';
$pageNameEnImg = 'images/contact/contact-ttl.svg';
$pageName_url = './';
?>


<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php include __DIR__ . '/inc/head.php'; ?>
  <?php include __DIR__ . '/inc/gtm_head.php'; ?>
</head>

<body>
  <?php include __DIR__ . '/inc/gtm_body.php'; ?>
  <?php include __DIR__ . '/inc/header.php'; ?>

  <main style="height: 100rem;">
  </main>
  <?php include __DIR__ . '/inc/footer.php'; ?>

  <?php include __DIR__ . '/inc/scripts.php'; ?>
</body>

</html>
