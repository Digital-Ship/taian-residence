<?php
$Path = './';
$pageID = 'lp';
$pageTitle = 'タイアンレジデンス湘南台　RC造のデザイナーズ新築分譲住宅全2邸｜藤沢市湘南台1丁目｜ワンズリアルティ株式会社';
$pageSlug = 'ヘッダーの文言用';
$keyword = '新築分譲住宅,一戸建て,不動産,デザイナーズ,RC造,湘南台,藤沢市,湘南台駅,小田急江ノ島線,ブルーライン,相鉄いずみ野線,ワンズリアルティ株式会社';
$description = 'タイアンレジデンス湘南台　RC造のデザイナーズ新築分譲住宅全2邸の物件情報サイトです。湘南台駅徒歩7分。耐久性に優れた安全安心な住まい。';
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
  <?php include(__DIR__ . '/inc/head.php'); ?>
  <?php include(__DIR__ . '/inc/gtm_head.php'); ?>
</head>

<body class="page-lp">
  <?php include(__DIR__ . '/inc/gtm_body.php'); ?>
  <?php include(__DIR__ . '/inc/header.php'); ?>

  <main>
    <section id="lp-main">
      <div class="container lp-main-content_box_inner">
        <div class="abs-item taian-logo">
          <img src="<?php echo $Path; ?>/images/lp/main/taian-img.svg" alt="TAIAN" width="404" height="600">
        </div>
        <div class="abs-item lp-main__txt">
          <img src="<?php echo $Path; ?>/images/lp/main/lp-main-txt.svg" alt="TAIAN" width="248" height="490">
        </div>
        <div class="abs-item txt_debut">
          <img src="<?php echo $Path; ?>/images/lp/main/grand-debut-txt.svg" alt="2022.GRAND DEBUT" width="59" height="272">
        </div>

        <div class="abs-item group-action">
          <a href="javascript:void(0);" id="btn_open_menu">
            <img src="<?php echo $Path; ?>/images/lp/main/icon-menu.svg" alt="Menu" width="55" height="40">
          </a>
          <a href="inquiry" class="btn-tel">
            <img src="<?php echo $Path; ?>/images/lp/main/icon-tel.svg" alt="メールマーク" width="55" height="42">
          </a>
          <a href="inquiry" class="btn-inquiry">
            <img src="<?php echo $Path; ?>/images/lp/main/icon-letter.svg" alt="メールマーク" width="55" height="42">
          </a>
        </div>
        <div class="abs-item residence">
          <h1 class="residence__txt">［タイアンレジデンス 湘南台］</h1>
          <span class="residence__txt-small">
            RC造のデザイナーズ新築分譲住宅 全２邸
          </span>
          <div class="residence__img">
            <img src="<?php echo $Path; ?>/images/lp/main/lp-residence-txt.svg" alt="RESIDENCE" width="333" height="47">
          </div>
        </div>
        <div class="abs-item  news">
          <p>2022.2.○○ オフィシャルサイト公開</p>
        </div>
        <div class="abs-item scroll">
          <img src="<?php echo $Path; ?>/images/lp/main/icon-scroll.svg" alt="scroll" width="20" height="200">
        </div>
      </div>
    </section>
    <section id="concept">
      <div class="container">
        <h2 class="concept-title__img">
          <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/concept/concept-txt.svg" alt="CONCEPT">
          <span class="hidden-sp">CONCEPT</span>
          <span class="hidden-sp icon">
            <img src="<?php echo $Path; ?>/images/lp/concept/icon.svg" alt="Icon" width="166" height="47">
          </span>
        </h2>
        <div class="concept-content">
          <h3 class="concept-title__txt">
            安心・安全で世代を超える<br class="hidden-pc" />住まいを創造
          </h3>
          <p>
            世界でも類を見ない4つのプレートが交わり地震が頻発する日本。南海トラフなども警戒が必要です。さらには大雨・豪雨は30年前の1.6倍に増加。過去10年間では全国の市町村の97％以上で水害・土砂災害を確認、世界で起こる自然災害の2割が日本で発生している現状です（日本国土は世界の広さの0.25％ほど）。そもそも古くから日本は災害に見舞われやすい環境下にあり、さらには災害頻度や被害規模も活発化する地震活動、気候変動、都市化などに起因し、まずます甚大なものとなっています。<br />
            住まいに携わる私たちはこの事態を急務と捉え“日本の住宅市場に耐久性に優れ安全で安心できる住まいを届けたい”そんな思いからタイアンレジデンスプロジェクトを始動いたしました。
          </p>
          <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/concept/img1.png" alt="安心・安全で世代を超える住まいを創造" width="750" height="250" />
          <img class="concept__img hidden-pc" src="<?php echo $Path; ?>/images/lp/concept/img2.png" alt="安心・安全で世代を超える住まいを創造" width="750" height="580" />
          <p class="note">
            完成後イメージパースにつき実際と異なる際は現況を優先といたします。<br />
            景観・設備等一部省略しておりますので予めご了承ください。
          </p>
        </div>
      </div>
    </section>
    <section id="image-view">
      <div class="image_view_wrap">
        <h2 class="image_view__title"><img src="<?php echo $Path; ?>/images/lp/image_view/txt_image_view.svg" alt="IMAGE VIEW" width="417" height="47"></h2>
        <div class="image_view_content">
          <p class="image_view__subtitle">
            建物竣工イメージを<br />
            動画でご確認いただけます
          </p>
          <p class="image_view__txt_jp">
            <img src="<?php echo $Path; ?>/images/lp/image_view/txt_image_view_jp.svg" alt="" width="153" height="415">
          </p>
          <div class="movie movie-a">
            <div class="movie-box">
              <img src="<?php echo $Path; ?>/images/lp/image_view/movie.jpg" alt="Movie A">
              <div class="movie_content">
                <h3 class="movie_name">
                  <img src="<?php echo $Path; ?>/images/lp/image_view/txt_movie_a.svg" alt="Movie A">
                </h3>
              </div>
            </div>
            <p class="hidden-sp">
              完成後イメージ動画につき実際と異なる際は現況を優先といたします。<br />
              家具付き販売ではございませんので予めご了承ください。</p>
          </div>
          <div class="taian-logo">
            <img src="<?php echo $Path; ?>/images/lp/image_view/taian-logo.svg" alt="TAIAN">
          </div>
          <div class="movie movie-b">
            <p class="hidden-sp">
              完成後イメージ動画につき実際と異なる際は現況を優先といたします。<br />
              家具付き販売ではございませんので予めご了承ください。</p>
            <div class="movie-box">
              <img src="<?php echo $Path; ?>/images/lp/image_view/movie.jpg" alt="Movie B">
              <div class="movie_content">
                <h3 class="movie_name">
                  <img src="<?php echo $Path; ?>/images/lp/image_view/txt_movie_b.svg" alt="Movie B">
                </h3>
              </div>
            </div>
            <p class="sp_txt hidden-pc">
              ※完成後イメージ動画につき実際と異なる際は現況を優先といたします。<br />
              ※家具付き販売ではございませんので予めご了承ください。
            </p>
          </div>
        </div>
        <div class="plan_design">
          <h3 class="plan_design_txt">
            <img src="<?php echo $Path; ?>/images/lp/image_view/txt_plan_design.svg" alt="PLAN DESIGN">
          </h3>
          <div class="note-bottom">
            末永く愛される住まいは、<br />
            機能・意匠性にもこだわりが<br class="hidden-pc" />あります。
          </div>
          <div class="plan_design_imgs">
            <img src="<?php echo $Path; ?>/images/lp/image_view/plan_img1.png" alt="PLAN DESIGN 1">
            <img src="<?php echo $Path; ?>/images/lp/image_view/plan_img2.png" alt="PLAN DESIGN 2">
            <img src="<?php echo $Path; ?>/images/lp/image_view/plan_img3.png" alt="PLAN DESIGN 3">
            <img src="<?php echo $Path; ?>/images/lp/image_view/plan_img4.png" alt="PLAN DESIGN 4">
          </div>
        </div>
      </div>
      <div class="layer circle"></div>
      <div class="layer rhomb"></div>
    </section>
    <section id="landscape">
      <div class="wrap">
        <h2 class="__title">
          <img src="<?php echo $Path; ?>/images/lp/landscape/txt_landscape.svg" alt="LANDSCAPE">
          <span>［区画図］</span>
        </h2>
        <div class="__img">
          <img src="<?php echo $Path; ?>/images/lp/landscape/img.png" alt="［区画図］">
        </div>
        <div class="__txt">
          2台分の駐車スペースを確保<br />
          <span>※車種による</span>
        </div>
        <div class="__car">
          <div class="__car_content">
            開放感を存分に満喫する前面道路公道幅員約16ｍ。<br />
            お子様の送迎や来客時などにも困らない2台分の駐車<br class="hidden-pc" />スペースも確保（車種による）。<br class="hidden-pc" />ビルトインカーポートですので<br class="hidden-pc" />愛車にも優しい駐車スペース<br class="hidden-pc" />となっております。
            <img src="<?php echo $Path; ?>/images/lp/landscape/car.jpg" alt="Image Photo Car">
          </div>
        </div>
        <div class="layer hidden-sp">
          <img src="<?php echo $Path; ?>/images/lp/landscape/layer-circle.svg" alt="layer circle">
        </div>
      </div>
    </section>
    <section id="plan">
      <div class="heading hidden-sp">
        <h2>
          <img src="<?php echo $Path; ?>/images/lp/plan/txt_plan.svg" alt="Plan">
        </h2>
      </div>
      <div class="__plan _plan_a btn_open_popup" data-popup="#popup-plan-a">
        <div class="plan__content ">
          <img class="plan_txt" src="<?php echo $Path; ?>/images/lp/plan/txt_taian_residence.svg" alt="TAIAN RESIDENCE">
          <img class="plan_name" src="<?php echo $Path; ?>/images/lp/plan/txt_plan_a.svg" alt="PLAN A">
          <p>タップでA棟間取図をご覧いただけます</p>
        </div>
      </div>
      <div class="__plan _plan_b btn_open_popup" data-popup="#popup-plan-b">
        <div class="plan__content ">
          <img class="plan_txt" src="<?php echo $Path; ?>/images/lp/plan/txt_taian_residence.svg" alt="TAIAN RESIDENCE">
          <img class="plan_name" src="<?php echo $Path; ?>/images/lp/plan/txt_plan_b.svg" alt="PLAN B">
          <p>タップでB棟間取図をご覧いただけます</p>
        </div>
      </div>
    </section>
    <div id="equipment-structure-wrap">
      <section id="equipment">
        <div class="equipment-wrap">
          <h2 class="equipment__title">
            <img src="<?php echo $Path; ?>/images/common/txt-menu_equipment.svg" alt="EQUIPMENT">
            <span>［設備・仕様］</span>
          </h2>
          <div class="equipment-top">
            <div class="top__content">
              日常に快適さを添え、家事の捗る設備・仕様は<br />
              上質クラスをご用意いたしました。<br />
              空間のバランスもアクセントも加味した<br />
              自慢の設備・仕様です。
            </div>
          </div>
          <div class="equipment-box right">
            <h3 class="box__title">
              <img src="<?php echo $Path; ?>/images/lp/equipment/txt_kitchen.svg" alt="KITCHEN">
            </h3>
            <div class="box__img">
              <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/equipment/img_kitchen.png" alt="KITCHEN">
              <img class="hidden-sp" src="<?php echo $Path; ?>/images/lp/equipment/img_kitchen_2.png" alt="KITCHEN">
              <a class="_txt" href="<?php echo $Path; ?>pdf/設備／システムキッチン.pdf" target="_blank">
                PDFで詳しく見る
              </a>
            </div>
            <div class="box__desc">
              <div class="desc_logo panasonic">
                <img src="<?php echo $Path; ?>/images/lp/equipment/logo_panasonic.svg" alt="Panasonic">
              </div>
              <div class="sub__title">L-CLASS KITCHEN</div>
              <p>
                先進の機能と、空間の美しさを両立するスタイリングを追求、目指したのは最上の機能美。<br />
                美しい空間をかなえる無駄のないディティール、”らしさ”が活きる空間づくり、先進機器による快適性を備え、さらにはお掃除やメンテナンス性にも優れたⅡ型システムキッチンです。
              </p>
              <div class="btn__group">
                <div class="btn_item">
                  <span class="btn">食器洗い乾燥機</span>
                </div>
                <div class="btn_item">
                  <span class="btn">混合水栓ワイドシャワー</span>
                </div>
                <div class="btn_item">
                  <span class="btn">浄水器一体型</span>
                </div>
                <div class="btn_item">
                  <span class="btn">トリプルワイドIH</span>
                </div>
              </div>
            </div>
          </div>

          <div class="equipment-box left">
            <h3 class="box__title">
              <img src="<?php echo $Path; ?>/images/lp/equipment/txt_bath_room.svg" alt="BATH ROOM">
            </h3>
            <div class="box__img">
              <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/equipment/img_bath_room.png" alt="BATH ROOM">
              <img class="hidden-sp" src="<?php echo $Path; ?>/images/lp/equipment/img_bath_room_2.png" alt="BATH ROOM">
              <a class="_txt" href="<?php echo $Path; ?>pdf/設備／ユニットバス.pdf" target="_blank">
                PDFで詳しく見る
              </a>
            </div>
            <div class="box__desc">
              <div class="desc_logo">
                <img src="<?php echo $Path; ?>/images/lp/equipment/logo_lixil.svg" alt="LIXIL">
              </div>
              <div class="sub__title">SPAGE 〈スパージュ〉</div>
              <p>
                お風呂を愛する国のバスルーム。湯を、愉しむ。時を、味わう。 SPAGE〈スパージュ〉。くつろぎを育み空間を構成するすべてにこだわりましたベール吐水「肩湯」・ウェーブ吐水「肩ほぐし湯」・ウェーブ吐水「腰ほぐし湯」3種類の吐水により心地よさが想像を超えるリラックステクノロジー搭載。
              </p>
              <div class="btn__group">
                <div class="btn_item">
                  <span class="btn">32型TV</span>
                </div>
                <div class="btn_item">
                  <span class="btn">浴室暖房乾燥機</span>
                </div>
                <div class="btn_item">
                  <span class="btn">フルデジタルサウンドシステム</span>
                </div>
                <div class="btn_item">
                  <span class="btn">1620サイズ</span>
                </div>
              </div>
            </div>
          </div>

          <div class="equipment-box right">
            <h3 class="box__title">
              <img src="<?php echo $Path; ?>/images/lp/equipment/txt_wash_stand.svg" alt="WASH STAND">
            </h3>
            <div class="box__img">
              <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/equipment/img_wash_stand.png" alt="WASH STAND">
              <img class="hidden-sp" src="<?php echo $Path; ?>/images/lp/equipment/img_wash_stand_2.png" alt="WASH STAND">
              <a class="_txt" href="<?php echo $Path; ?>pdf/設備／洗面化粧台.pdf" target="_blank">
                PDFで詳しく見る
              </a>
            </div>
            <div class="box__desc">
              <div class="desc_logo">
                <img src="<?php echo $Path; ?>/images/lp/equipment/logo_lixil.svg" alt="LIXIL">
              </div>
              <div class="sub__title">LUMISIS ボウル一体タイプ</div>
              <p>
                上質な大理石カウンターの風合い。美しい納まり。ホテルのような洗練された洗面空間が日常を豊かにします。大理石の質感と素材感を再現した人造大理石カウンター。<br />
                上質なボウルデザインで、優雅で豊かな洗面空間を楽しみたい方におすすめです。
              </p>
              <div class="btn__group">
                <div class="btn_item">
                  <span class="btn">三面鏡  上部LED照明</span>
                </div>
                <div class="btn_item">
                  <span class="btn">フェイスフルライト</span>
                </div>
                <div class="btn_item">
                  <span class="btn">タッチレス水栓ナビッシュ</span>
                </div>
                <div class="btn_item">
                  <span class="btn">W1200</span>
                </div>
              </div>
            </div>
          </div>
          <div class="equipment-box left last">
            <h3 class="box__title">
              <img src="<?php echo $Path; ?>/images/lp/equipment/txt_accent_tile.svg" alt="ACCENT TILE">
            </h3>
            <div class="box__img">
              <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/equipment/img_accent_tile.png" alt="ACCENT TILE">
              <img class="hidden-sp" src="<?php echo $Path; ?>/images/lp/equipment/img_accent_tile_2.png" alt="ACCENT TILE">

            </div>
            <div class="box__desc">
              <div class="desc_logo">
                <img src="<?php echo $Path; ?>/images/lp/equipment/logo_lixil.svg" alt="LIXIL">
              </div>
              <div class="sub__title">
                黒彩、グレイミックス、<br />
                インテリアモザイク
              </div>
              <p>
                インテリアコーディネーターを兼任する建築士の手によって、住み手にとって優越を誇れる優美なる意匠のためのアクセントにも注力いたしました。<br />
                各所の設備との相性も良く、重厚感を醸し出す角タイル部材。そして、カラーアクセントクロスとの相性も◎です。
              </p>
              <div class="btn__group">
                <div class="btn_item"><img src="<?php echo $Path; ?>/images/lp/equipment/img_accent_tile_img1.png" alt="ACCENT TILE 1">
                </div>
                <div class="btn_item">
                  <img src="<?php echo $Path; ?>/images/lp/equipment/img_accent_tile_img2.png" alt="ACCENT TILE 2">
                </div>
              </div>
            </div>
          </div>
          <div class="btn__group equipment-btn-group">
            <div class="btn_item">
              <span class="btn"> 間接照明・ダウンライト</span>
            </div>
            <div class="btn_item">
              <span class="btn">各階タンクレストイレ・手洗い器</span>
            </div>
            <div class="btn_item">
              <span class="btn">二重床・二重天井</span>
            </div>
            <div class="btn_item">
              <span class="btn">LDK床暖房（TES温水式）</span>
            </div>
            <div class="btn_item">
              <span class="btn">エコジョーズ</span>
            </div>
            <div class="btn_item">
              <span class="btn">マルチメディアコンセント</span>
            </div>
            <div class="btn_item">
              <span class="btn">屋上・バルコニー10年保証</span>
            </div>
            <div class="btn_item">
              <span class="btn">石目調フロアタイル</span>
            </div>
          </div>
          <div class="equitement__note">
            RC造住宅は、夏は暑くて、冬は寒く結露もしやすい<br class="hidden-pc" />
            イメージをお持ちではございませんか？
          </div>
          <div class="equitement__bot">
            <div class="bot_content">
              <div class="__img">
                <img src="<?php echo $Path; ?>/images/lp/equipment/logo_jpd.png" alt="JPD">
              </div>

              <div class="red_line">
                建築物断熱用硬質ウレタンフォーム（ハイブリッドフォーム）
              </div>
              <p>
                ハイブリットフォームは2液の原液で構成されています。<br />
                ひとつはベニヤや集成材を作る際に一般的に使われている糊、もうひとつは、水、触媒、樹脂、整泡剤、難燃剤等が含まれるポリオールという水溶液です。ハイブリッドフォームは発泡剤として水を利用しています。温暖化に悪影響を与える高濃度なガスを使わないため、地球にやさしく、そして住宅を高性能に断熱化することにより、省エネで快適で人にも優しい住宅に出来る素材です。
              </p>
              <div class="tags">
                <div class="tag_item">
                  <span class="tag center">断熱性能</span>
                </div>
                <div class="tag_item">
                  <span class="tag center">気密性能</span>
                </div>
                <div class="tag_item">
                  <span class="tag center">健康性能</span>
                </div>
                <div class="tag_item">
                  <span class="tag center">経年変化</span>
                </div>
                <div class="tag_item">
                  <span class="tag center">結露対策</span>
                </div>
                <div class="tag_item">
                  <span class="tag center">耐火性能</span>
                </div>
              </div>
              <p>
                住宅をすっぽり断熱材と空気層断で家を魔法瓶のように気密性を高め断熱するため、冷暖房の効きが良く夏場はより涼しく、冬場はより暖かく快適にお過ごしいただけます。<br />
                ハイブリッドフォームはフォースターに準拠した安心、安全な断熱材です。
              </p>
            </div>
            <div class="bot_img">
              <p class="ttl">■外周壁の断面図</p>
              <img src="<?php echo $Path; ?>/images/lp/equipment/img_bot.png" alt="外周壁の断面図">
            </div>
          </div>
          <div class="note__out">
            ※その他設備・仕様につきましてはお気軽にお問い合わせください。<br class="hidden-pc" />
            ※情勢により予告なく設備・仕様の変更をする場合がございますので予めご了承ください。
          </div>
        </div>
      </section>
      <section id="structure">
        <div class="structure_wrap">
          <div class="structure_top">
            <h2 class="structure__title">
              <img src="<?php echo $Path; ?>/images/lp/structure/txt_structure.svg" alt="STRUCTURE">
              <span>［構　造］</span>
            </h2>
            <div class="_logo">
              <img src="<?php echo $Path; ?>/images/lp/structure/logo_structure.svg" alt="法定耐用年数47年">
            </div>
          </div>
          <div class="st_content">
            「RC住宅」とは、セメントと砂・砂利などの骨材に水を混ぜて固まるコンクリートに鉄筋を入れ、異なる性質をもった材料が一体となって建物を支えます。<br />
            特徴は、高気密・高断熱・優れた耐久性、そして地震に対して非常に強い構造です。<br />
            RC造には、木造住宅を大幅に上回る外力に対する強さがあり、中でもRC壁式構造（モノコック構造）は、壁・床・天井の6面体（ダイアフラム）全体をRCで構成。面全体で地震や台風などの外力を受け止めるため強度的にも最も優れていると評価されています。<br />
            さらに柱や梁に干渉されないすっきりとした空間も保てます。
          </div>
          <div class="strong_point">
            <div class="point_item">
              <div class="point">
                <img src="<?php echo $Path; ?>/images/lp/structure/strong_point_1.svg" alt="STRONG POINT 1">
                <div class="point_txt">
                  その性質により地震の力で伸縮する建物に対し、鉄筋が持つ引張力とコンクリートが持つ圧縮力が支えとなり耐震性を発揮。
                </div>
              </div>
            </div>
            <div class="point_item">
              <div class="point">
                <img src="<?php echo $Path; ?>/images/lp/structure/strong_point_2.svg" alt="STRONG POINT 2">
                <div class="point_txt">
                  不燃材ですので、万一火災に見舞われた場合は、構造から建て替えするのではなくリフォームで済むことが多くなります。
                </div>
              </div>
            </div>
            <div class="point_item">
              <div class="point">
                <img src="<?php echo $Path; ?>/images/lp/structure/strong_point_3.svg" alt="STRONG POINT 3">
                <div class="point_txt">
                  気密性が高いため内外ともに音の透過が少なく、木造住宅に比べて高い遮音性を発揮。比較的近隣を気にせず生活できます。
                </div>
              </div>
            </div>
            <div class="point_item">
              <div class="point">
                <img src="<?php echo $Path; ?>/images/lp/structure/strong_point_4.svg" alt="STRONG POINT 4">
                <div class="point_txt">
                  台風は強大な力で建物を破壊します。RC住宅は建物の重厚さでその強さを発揮。沖縄県ではRC造が主流となっています。
                </div>
              </div>
            </div>
          </div>
          <div class="structure_bot">
            <div class="layer">
              <img src="<?php echo $Path; ?>/images/lp/structure/layer.svg" alt="layer">
            </div>
            <div class="structure_bot_wrap">
              <img class="hidden-pc" src="<?php echo $Path; ?>/images/lp/structure/img.png" alt="モノコック構造を採用しています">
              <div class="structure_bot_wrap_txt">
                <div class="txt_black_bg center">
                  <p>
                    タイアンレジデンスは地震の力を面に分散し軽減させる
                    <span>モノコック構造を採用しています</span>
                  </p>
                </div>
                <div class="imgs">
                  <img src="<?php echo $Path; ?>/images/lp/structure/img2.png" alt="モノコック構造を採用しています 2">
                  <img src="<?php echo $Path; ?>/images/lp/structure/img3.png" alt="モノコック構造を採用しています 3">
                </div>
              </div>
              <div class="structure_bot_wrap_img hidden-sp">
                <img src="<?php echo $Path; ?>/images/lp/structure/img_pc.png" alt="モノコック構造を採用しています">
              </div>
            </div>
            <div class="structure_content">
              <h3>
                <span>国土交通省 住宅局</span>
                「熊本地震における建築物被害の原因<br class="hidden-pc" />分析を行う委員会」報告書
              </h3>
              <p>
                平成28年4月14日及び16日に発生した熊本地震においては、益城町中心部で震度7が2回観測されるなど、過去に例を見ない大きな地震により、建築物に甚大な被害が発生。 本委員会においては、大地震が2回発生したことを前提として被害原因の分析を行った。
              </p>
              <p>
                <strong>木造建築物の倒壊の原因分析（新耐震基準）</strong>
                新耐震基準導入以降で倒壊した建築物（83棟）のうち、建築物の状況が把握できなかったもの（6棟）を除いた77棟について、被害要因分析を行った。
              </p>
              <p>
                ○分析の結果、被害要因として、著しい地盤変状の影響（2棟）、隣接建物の衝突による影響（1棟）、蟻害（2棟）、現行規定の仕様となっていない接合部（73棟）が確認できた。また、震源や地盤の特性に起因して局所的に大きな地震動が建築物に作用した可能性があるもの※も一定数あった。（被害要因の重複含む）
              </p>
              <p>○また、接合部の仕様を明確化した平成12年6月以降に建築されたもので倒壊したもの（7棟）のみで見ると、被害要因は、現行規定の仕様となっていない接合部（3棟）、著しい地盤変状の影響（1棟）、震源や地盤の特性に起因して局所的に大きな地震動が建築物に作用した可能性があるもの※（3棟）であった。

              </p>
              <p>
                <small>※引き続き、特定の地盤が地震動に与える影響を詳細に調査・分析。</small>
              </p>
            </div>
            <div class="txt_blue_bg center">
              <p>
                鉄筋コンクリート造建築物は新耐震基準導入以<br class="hidden-pc" />降で倒壊が確認されたものはなかった
              </p>
            </div>
            <div class="txt__bottom">
              と報告されています。<br class="hidden-pc" />
              このことからも木造に比べRC住宅は<br class="hidden-pc" />
              各段に安心であると言えます。
            </div>
          </div>
        </div>
      </section>
      <div class="warranty__top">
        <div class="warranty__top_wrap">
          <h2 class="__ttl">
            <img src="<?php echo $Path; ?>/images/lp/warranty/txt_warranty.png" alt="WARRANTY">
            <span>［保　証］</span>
          </h2>
          <p class="__subttl">その性質がゆえの安心を付随。</p>
        </div>
        <p class="__btn">
          <img src="<?php echo $Path; ?>/images/lp/warranty/btn.svg" alt="建物・地盤10年保証">
        </p>
      </div>
    </div>

    <section class="security-gua" id="warranty">
      <h3 class="secrurity-ttl">
        第三者機関による安心保証制度
      </h3>
      <div class="container">


        <div class="security-content">
          <div class="secu-col ">
            <div class="secu-info">
              <div class="secu-name">国土交通大臣指定住宅瑕疵担保責任保険法人</div>
              <div class="secu-logo">
                <img src="./images/lp/security/img_security-company.svg" alt="">
              </div>
              <div class="img01">
                <img src="./images/lp/security/img_sec-01.svg" alt="" width="182">
              </div>
            </div>
          </div>
          <div class="secu-col secu-support">
            <ul class="list-support">
              <li class="support-item">
                <div class="img">
                  <img src="./images/lp/security/support-01.svg" alt="">
                </div>
                <div class="text">
                  工事中に第三者による現場検査を実施しています
                </div>
              </li>
              <li class="support-item">
                <div class="img">
                  <img src="./images/lp/security/support-01.svg" alt="">
                </div>
                <div class="text">
                  万が一瑕疵が見つかった際には修繕費用を保険でサポート
                </div>
              </li>
              <li class="support-item">
                <div class="img">
                  <img src="./images/lp/security/support-01.svg" alt="">
                </div>
                <div class="text">
                  万が一業者が倒産してしまった場合には直接保険金が支払われます
                </div>
              </li>
              <li class="support-item">
                <div class="img">
                  <img src="./images/lp/security/support-01.svg" alt="">
                </div>
                <div class="text">
                  万が一事業者とのトラブルになっても専門処理制度が利用できます
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="location" id="location">
      <h2 class="img-heading">
        <img src="./images/lp/location/location-heading.png" alt="">
      </h2>
      <div class="container">
        <div class="location-ttl">
          <img src="./images/lp/location/location-ttl.svg" alt="LOCATION" width="400">
        </div>
        <div class="location-content">
          <div class="location-dir">
            <span class="dr-big">「湘南台」</span>駅<br class="sp">徒歩 <span class="num-7">7</span>分
          </div>
          <div class="location-snip">
            <p class="txt-01">
              小田急江ノ島線、横浜市営地下鉄ブルーラインと<br class="sp">相鉄いずみ野線の始発駅。
            </p>
            <p class="txt-02">
              3路線利用ならではの快適さが魅力的な「湘南台」駅。<br>
              「相鉄・JR直通線」の開業によって都心へも<br class="sp">座ってアクセスも可能となっています。
            </p>
          </div>
          <div class="location-map">
            <img src="./images/lp/location/location-map.png" alt="">
          </div>
          <div class="list-station">
            <div class="station-item">
              <div class="station-item__in">
                <div class="img">
                  <img src="./images/lp/location/img-station-01.svg" alt="「横浜」駅">
                </div>
                <div class="text">
                  横浜市営地下鉄ブルーライン利用。<br>
                  「戸塚」駅でJR東海道本線（上野東京ライン）に乗換え。
                </div>
              </div>
            </div>
            <div class="station-item">
              <div class="station-item__in">
                <div class="img">
                  <img src="./images/lp/location/img-station-02.svg" alt="「品川」駅">
                </div>
                <div class="text">
                  横浜市営地下鉄ブルーライン利用。<br>
                  「戸塚」駅でJR東海道本線（上野東京ライン）に乗換え。
                </div>
              </div>
            </div>
            <div class="station-item">
              <div class="station-item__in">
                <div class="img">
                  <img src="./images/lp/location/img-station-03.svg" alt="「渋谷」駅">
                </div>
                <div class="text">
                  小田急江ノ島線快速急行利用。<br>
                  「下北沢」駅で京王井の頭線急行に乗換え。
                </div>
              </div>
            </div>
            <div class="station-item">
              <div class="station-item__in">
                <div class="img">
                  <img src="./images/lp/location/img-station-04.svg" alt="「新宿」駅">
                </div>
                <div class="text">
                  小田急江ノ島線快速急行利用。
                </div>
              </div>
            </div>
          </div>
          <div class="train-station-note">
            ※掲載の電車の所要時間は目安であり、時間帯により異なります。<br class="sp">
            待ち時間・乗換え時間は含みません。<br>
            ※Yahoo路線情報 2022年1月調べ
          </div>
        </div>
      </div>
    </section>
    <section id="life_information">
      <section class="life-topsecion">
        <div class="container">
          <div class="life-heading">
            <div class="life-ttl">
              <img src="./images/lp/life_information/life-info-ttl.svg" alt="LIFE INFORMATION">
            </div>
            <div class="text-heading">日々の生活にも子育てにも、恵まれた住環境も魅力です。</div>
          </div>
          <div class="life-gallery">
            <div class="item-big">
              <div class="img">
                <img src="./images/lp/life_information/life-01.png" alt="「湘南台」駅東口　約500m">
              </div>
              <div class="text">
                <span class="txt-big">「湘南台」</span>駅東口　約<span class="num-500 txt-big">500</span>m
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-01.png" alt="藤沢市立六会小学校 約650m">
              </div>
              <div class="text">
                藤沢市立六会小学校<br>
                <span class="unit-txt">約<span class="txt-num">650</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-02.png" alt="藤沢市立湘南台中学校 約650m">
              </div>
              <div class="text">
                藤沢市立湘南台中学校<br>
                <span class="unit-txt">約<span class="txt-num">650</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-03.png" alt="ヨークプライス湘南台店 約200m">
              </div>
              <div class="text">
                ヨークプライス湘南台店<br>
                <span class="unit-txt">約<span class="txt-num">200</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-04.png" alt="湘南台公園 約500m">
              </div>
              <div class="text">
                湘南台公園<br>
                <span class="unit-txt">約<span class="txt-num">500</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-05.png" alt="ダイエー湘南台店 約550m">
              </div>
              <div class="text">
                ダイエー湘南台店<br>
                <span class="unit-txt">約<span class="txt-num">550</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-06.png" alt="サンドラッグ湘南台一丁目店 約210m">
              </div>
              <div class="text">
                サンドラッグ湘南台一丁目店<br>
                <span class="unit-txt">約<span class="txt-num">210</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-07.png" alt="湘南台市民図書館 約350m">
              </div>
              <div class="text">
                湘南台市民図書館<br>
                <span class="unit-txt">約<span class="txt-num">350</span>m</span>
              </div>
            </div>
            <div class="item">
              <div class="img">
                <img src="./images/lp/life_information/life-gallery-08.png" alt="湘南台文化センター 約500m">
              </div>
              <div class="text">
                湘南台文化センター<br>
                <span class="unit-txt">約<span class="txt-num">500</span>m</span>
              </div>
            </div>
          </div>
          <ul class="list-station-txt">
            <li class="item">湘南台よつば保育園･･･<span class="unit-txt">約<span class="txt-num">550</span>m</span></li>
            <li class="item">湘南台郵便局･･･<span class="unit-txt">約<span class="txt-num">850</span>m</span></li>
            <li class="item">きらぼし銀行 湘南台支店･･･<span class="unit-txt">約<span class="txt-num">500</span>m</span></li>
            <li class="item">横浜銀行 湘南台支店･･･<span class="unit-txt">約<span class="txt-num">650</span>m</span></li>
            <li class="item">みずほ銀行 湘南台支店･･･<span class="unit-txt">約<span class="txt-num">850</span>m</span></li>
            <li class="item">静岡銀行 湘南台支店･･･<span class="unit-txt">約<span class="txt-num">850</span>m</span></li>
            <li class="item">湘南台第一病院･･･<span class="unit-txt">約<span class="txt-num">300</span>m</span></li>
            <li class="item">OK湘南台店･･･<span class="unit-txt">約<span class="txt-num">450</span>m</span></li>
            <li class="item">そうてつローゼン･･･<span class="unit-txt">約<span class="txt-num">500</span>m</span></li>
            <li class="item">ウエストプラザ･･･<span class="unit-txt">約<span class="txt-num">800</span>m</span></li>
            <li class="item">なかよし薬局湘南台店･･･<span class="unit-txt">約<span class="txt-num">130</span>m</span></li>
            <li class="item">青葉公園･･･<span class="unit-txt">約<span class="txt-num">180</span>m</span></li>
            <li class="item">四ツ辻公園･･･<span class="unit-txt">約<span class="txt-num">200</span>m</span></li>
            <li class="item">原谷公園･･･<span class="unit-txt">約<span class="txt-num">500</span>m</span></li>
          </ul>
        </div>
      </section>
      <div id="shonan_area">
        <div class="shonan_area__title">
          湘南エリア<span>有数の人気アドレス</span>
        </div>
        <div class="shonan_area__content">
          <p>湘南エリアのターミナル的「湘南台」駅より徒歩７分。<br />
            そんな駅近ならではの快適な住環境ですので商業施設はもちろん、<br class="hidden-pc" />
            図書館や湘南台のランドマーク的シンボルであるプラネタリウム、<br />
            家族で休日にはたっぷり遊べる公園なども徒歩圏に充実する子育て<br class="hidden-pc" />
            ご家族にも人気のエリアとなっています。<br />
            また、湘南台は湘南エリア内の中で街全体が高台となっていて、<br class="hidden-pc" />
            海との程よい距離感、さらには美しく形成された街並みも<br class="hidden-pc" />
            人気の要因となっています。</p>
          <p class="percent">私たちがお届けするタイアンレジデンスは<br />
            藤沢市の公表する『地域危険度マップ 湘南台地区』では<br class="hidden-pc" />
            全壊率の危険度は10％以上20％未満と<br />
            市内有数の安心できるエリアでもあります。</p>
          <p class="img"><img src="./images/lp/life_information/shonan_area-img.png" alt="湘南エリア有数の人気アドレス"></p>
          <p>
            詳しくはFUJISAWA MAPからもご確認いただけます。<br class="hidden-pc" /><a href="https://webgis.alandis.jp/fujisawa14/portal/kikendo/index.html" target="_blank">https://webgis.alandis.jp/fujisawa14/portal/kikendo/index.html</a>
          </p>
        </div>
      </div>
      <div id="google-map">
        <div class="address">
          <div class="container">
            <p class="address-txt">
              ▼神奈川県藤沢市湘南台1-30-9（旧住居表示）
            </p>
          </div>
        </div>
        <div class="gmap-iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.4256901484637!2d139.61714501525162!3d35.41948348025624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ca4b14eb889%3A0x21879ac3a3523aaf!2z5pel5pys44CB44CSMjM1LTAwMjEg56We5aWI5bed55yM5qiq5rWc5biC56Ov5a2Q5Yy65bKh5p2R77yT5LiB55uu77yW4oiS77yT77yV!5e0!3m2!1sja!2s!4v1644984629884!5m2!1sja!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="outline">
        <h3 class="outline__title">
          <img src="./images/lp/outline/txt_outline.svg" alt="OUTLINE">
          <span>［物件概要］</span>
        </h3>
        <div class="container outline__content">
          <p class="text-center">
            　□所在地／藤沢市湘南台１丁目30番地8、30番地39<br />
            　□交通／小田急江ノ島線・相鉄いずみ野線・<br class="hidden-pc" />横浜市営地下鉄ブルーライン「湘南台」駅徒歩7分<br />
            　□販売価格／各8,480万円（税込）<br class="hidden-pc" />
            　□敷地面積／各100.32㎡<br class="hidden-pc" />
            　□建物面積／各124.70㎡（駐車場部分25.33㎡含む）<br class="hidden-pc" />
            　□間取／各4LDK+SIC+パントリー<br />
            　□規模構造／鉄筋コンクリート造陸屋根2階建<br class="hidden-pc" />
            　□現況／建築中　□完成予定／2022年6月下旬完成予定<br class="hidden-pc" />
            　□引渡／相談　　都市計画／市街化区域<br />
            　□用途地域／第2種低層住居専用地域<br class="hidden-pc" />
            　□建蔽率／60％　□容積率／100％<br class="hidden-pc" />
            　□防火指定／なし（建築基準法第22条の指定区域）<br class="hidden-pc" />
            　□地目／宅地　□土地権利／所有権<br />
            　□接道／北側約16ｍ公道に約6.77ｍ接道<br class="hidden-pc" />
            　□設備／公営水道・公共下水・都市ガス・東京電力<br />
            □その他／土地家屋調査士・司法書士は売主指定となります、<br class="hidden-pc" />
            図面と現況が異なる際は現況を優先とします、<br class="hidden-pc" />
            分筆前につき敷地面積が増減する場合があります、<br />
            建築確認番号A：第21KAK建確03365号（令和3年11月25日）・<br class="hidden-pc" />
            B：第21KAK建確03366号（令和3年11月25日）<br />
            □取引態様／専任媒介<br />
            □情報公開日／2022年2月OO日<br class="hidden-pc" />　□次回更新予定日／2022年3月OO日
          </p>
          <p class="text-center">
            ［販売・仲介］<br />
            ワンズリアルティ株式会社<br class="hidden-pc" />
            〒231-0013 神奈川県横浜市中区住吉町1-12-1<br class="hidden-pc" />
            神奈川県知事免許（3）第27643号<br />
            （公社）全国宅地建物取引業保証協会<br class="hidden-pc" />
            （公社）神奈川県宅地建物取引業協会<br class="hidden-pc" />
            （公社）首都圏不動産公正取引協議会<br class="hidden-pc" />
            （公財）東日本不動産流通機構<br />
            全国不動産ネットワーク「ワンズRETOS」
          </p>
          <p class="text-center">
            ［売主］<br />
            株式会社廣瀬興業<br />
            〒235-0021 神奈川県横浜市磯子区岡村3-6-35<br class="hidden-pc" />
            神奈川県知事（1）第29838号<br />
            神奈川県知事許可（特-1）第71878号<br class="hidden-pc" />
            （公社）不動産保証協会 （公社）全日本不動産協会 神奈川県本部
          </p>
          <p>
            ※ご成約の際には別途仲介手数料を申し受けます。※掲載のパース画像は完成イメージパースにつき実際のものとは異なる場合があります。※図面と現況が異なる場合は現況を優先といたします。※先着順につき、売却済みの場合はご容赦ください。※別途諸費用がかかります。※お申し込みの際には、印鑑（認印）と2020年・2021年分の収入証明（源泉徴収票等）、ご本人と確認ができるもの（運転免許証・パスポート等）をご持参ください。※表示の価格には建物に係る消費税相当額が含まれております。※価格は物件の代金総額を表示しており、消費税が課税される場合は税込み価格です。（1,000円未満は切り上げ。※写真に写っている、またはパース（絵）や間取図に描かれている家具や車などは、販売価格に含まれません。※完成予想図はいずれも外構、植栽、外観等実際のものとは多少異なることがあります。※モデルルーム・モデルハウス・展示場・ショールームの画像の場合、今回販売の物件と異なる場合があります。※ＣＧ合成の画像の場合、実際とは多少異なる場合があります。
          </p>
        </div>
      </div>
    </section>

  </main>
  <div class="plan-popup" id="popup-plan-a">
    <div class="btn_close_popup"></div>
    <div class="plan-popup-content">
      <div class="__txt">
        <p class="__txt_ttl">
          <img src="<?php echo $Path; ?>images/lp/plan/popup_plan_a.svg" alt="TAIAN RESIDENCE PLAN A">
        </p>
        <p>
          <span class="txt_tt">販売価格</span>
          8,480万円（税込）
        </p>
        <p>
          <span class="txt_tt">敷地面積</span>
          100.32㎡
        </p>
        <p>
          <span class="txt_tt">建物面積</span>
          124.70㎡
          <span class="txt_sm">（駐車場部分25.33㎡含む）</span>
        </p>
        <p>
          <span class="txt_tt">間　取</span>
          4LDK+SIC+パントリー
        </p>
        <div class="movie">
          <img src="<?php echo $Path; ?>images/lp/plan/movie_a.svg" alt="Movie A">
        </div>
      </div>
      <div class="__img">
        <img src="<?php echo $Path; ?>images/lp/plan/popup_plan_a.png" alt="Plan A">
      </div>

    </div>
    <div class="layer"></div>
  </div>

  <div class="plan-popup" id="popup-plan-b">
    <div class="btn_close_popup"></div>
    <div class="plan-popup-content">
      <div class="__txt">
        <p class="__txt_ttl">
          <img src="<?php echo $Path; ?>images/lp/plan/popup_plan_b.svg" alt="TAIAN RESIDENCE PLAN B">
        </p>
        <p>
          <span class="txt_tt">販売価格</span>
          8,480万円（税込）
        </p>
        <p>
          <span class="txt_tt">敷地面積</span>
          100.32㎡
        </p>
        <p>
          <span class="txt_tt">建物面積</span>
          124.70㎡
          <span class="txt_sm">（駐車場部分25.33㎡含む）</span>
        </p>
        <p>
          <span class="txt_tt">間　取</span>
          4LDK+SIC+パントリー
        </p>
        <div class="movie">
          <img src="<?php echo $Path; ?>images/lp/plan/movie_b.svg" alt="Movie B">
        </div>
      </div>
      <div class="__img">
        <img src="<?php echo $Path; ?>images/lp/plan/popup_plan_a.png" alt="Plan A">
      </div>

    </div>
    <div class="layer"></div>
  </div>

  <?php include(__DIR__ . '/inc/footer.php'); ?>
  <?php include(__DIR__ . '/inc/scripts.php'); ?>
</body>

</html>
