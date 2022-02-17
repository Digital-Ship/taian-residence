<?php
$Path = './';
$pageID = 'inquiry';
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
$pageName = '下層ページ';
$pageName_url = './';
?>


<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <?php include __DIR__ . '/inc/head.php';?>
    <?php include __DIR__ . '/inc/gtm_head.php';?>
</head>

<body>
    <?php include __DIR__ . '/inc/gtm_body.php';?>
    <?php include __DIR__ . '/inc/header.php';?>

    <main>
        <div class="main-heading">
            <div class="main-heading__inner">
                <div class="ta-logo">
                    <div class="img"><img src="./images/lp/main/taian-img.svg" alt="TAIAN" width="262"></div>
                </div>
                <div class="residence">
                    <div class="residence-txt">
                        <h1 class="txt01">［タイアンレジデンス 湘南台］</h1>
                        <span>RC造のデザイナーズ新築分譲住宅 全２邸</span>
                    </div>
                    <div class="img"><img src="./images/lp/main/lp-residence-txt.svg" alt="RESIDENCE" width="244"></div>
                </div>
                <div class="page-ttl">
                   <span class="en">CONTACT</span>
                   <span class="ja">ご来場予約／各種お問合せ</span>
                </div>
            </div>


        </div>
    </main>
    <footer class="footer-inquiry">

    </footer>

    <?php include __DIR__ . '/inc/scripts.php';?>
</body>

</html>