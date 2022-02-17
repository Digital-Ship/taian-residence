<?php
$Path = './';
$pageID = 'lp';
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
  <?php include(__DIR__ . '/inc/head.php'); ?>
  <?php include(__DIR__ . '/inc/gtm_head.php'); ?>
</head>

<body>
  <?php include(__DIR__ . '/inc/gtm_body.php'); ?>
  <?php include(__DIR__ . '/inc/header.php'); ?>

  <main>
    <section id="lp-main">
      <div class="container lp-main-content_box_inner">
        <div class="abs-item taian-logo">
          <img src="./images/lp/main/taian-img.svg" alt="TAIAN" width="404" height="600">
        </div>
        <div class="abs-item lp-main__txt">
          <img src="./images/lp/main/lp-main-txt.svg" alt="TAIAN" width="248" height="490">
        </div>
        <div class="abs-item txt_debut">
          <img src="./images/lp/main/grand-debut-txt.svg" alt="2022.GRAND DEBUT" width="59" height="272">
        </div>

        <div class="abs-item group-action">
          <a href="javascript:void(0);" id="btn_open_menu">
            <img src="./images/lp/main/icon-menu.svg" alt="Menu" width="55" height="40">
          </a>
          <a href="inquiry" class="btn-tel">
            <img src="./images/lp/main/icon-tel.svg" alt="メールマーク" width="55" height="42">
          </a>
          <a href="inquiry" class="btn-inquiry">
            <img src="./images/lp/main/icon-letter.svg" alt="メールマーク" width="55" height="42">
          </a>
        </div>
        <div class="abs-item residence">
          <h1 class="residence__txt">［タイアンレジデンス 湘南台］</h1>
          <span class="residence__txt-small">
            RC造のデザイナーズ新築分譲住宅 全２邸
          </span>
          <div class="residence__img">
            <img src="./images/lp/main/lp-residence-txt.svg" alt="RESIDENCE" width="333" height="47">
          </div>
        </div>
        <div class="abs-item  news">
          <p>2022.2.○○ オフィシャルサイト公開</p>
        </div>
        <div class="abs-item scroll">
          <img src="./images/lp/main/icon-scroll.svg" alt="scroll" width="20" height="200">
        </div>
      </div>
    </section>
    <section id="concept">
      <div class="container">
        <h2 class="concept-title__img">
          <img class="hidden-pc" src="./images/lp/concept/concept-txt.svg" alt="CONCEPT">
          <span class="hidden-sp">CONCEPT</span>
          <span class="hidden-sp icon">
            <img src="./images/lp/concept/icon.svg" alt="Icon" width="166" height="47">
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
          <img class="hidden-pc" src="./images/lp/concept/img1.png" alt="安心・安全で世代を超える住まいを創造" width="750" height="250" />
          <img class="concept__img hidden-pc" src="./images/lp/concept/img2.png" alt="安心・安全で世代を超える住まいを創造" width="750" height="580" />
          <p class="note">
            完成後イメージパースにつき実際と異なる際は現況を優先といたします。<br />
            景観・設備等一部省略しておりますので予めご了承ください。
          </p>
        </div>
      </div>
    </section>
    <section id="image-view">
      <div class="image_view_wrap">
        <h2 class="image_view__title"><img src="./images/lp/image_view/txt_image_view.svg" alt="IMAGE VIEW" width="417" height="47"></h2>
        <div class="image_view_content">
          <p class="image_view__subtitle">
            建物竣工イメージを<br />
            動画でご確認いただけます
          </p>
          <p class="image_view__txt_jp">
            <img src="./images/lp/image_view/txt_image_view_jp.svg" alt="" width="153" height="415">
          </p>
          <div class="movie movie-a">
            <div class="movie-box">
              <img src="./images/lp/image_view/movie.jpg" alt="Movie A">
              <div class="movie_content">
                <h3 class="movie_name">
                  <img src="./images/lp/image_view/txt_movie_a.svg" alt="Movie A">
                </h3>
              </div>
            </div>
            <p class="hidden-sp">
              完成後イメージ動画につき実際と異なる際は現況を優先といたします。<br />
              家具付き販売ではございませんので予めご了承ください。</p>
          </div>
          <div class="taian-logo">
            <img src="./images/lp/image_view/taian-logo.svg" alt="TAIAN">
          </div>
          <div class="movie movie-b">
            <p class="hidden-sp">
              完成後イメージ動画につき実際と異なる際は現況を優先といたします。<br />
              家具付き販売ではございませんので予めご了承ください。</p>
            <div class="movie-box">
              <img src="./images/lp/image_view/movie.jpg" alt="Movie B">
              <div class="movie_content">
                <h3 class="movie_name">
                  <img src="./images/lp/image_view/txt_movie_b.svg" alt="Movie B">
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
            <img src="./images/lp/image_view/txt_plan_design.svg" alt="PLAN DESIGN">
          </h3>
          <div class="note-bottom">
            末永く愛される住まいは、<br />
            機能・意匠性にもこだわりが<br class="hidden-pc" />あります。
          </div>
          <div class="plan_design_imgs">
            <img src="./images/lp/image_view/plan_img1.png" alt="PLAN DESIGN 1">
            <img src="./images/lp/image_view/plan_img2.png" alt="PLAN DESIGN 2">
            <img src="./images/lp/image_view/plan_img3.png" alt="PLAN DESIGN 3">
            <img src="./images/lp/image_view/plan_img4.png" alt="PLAN DESIGN 4">
          </div>
        </div>
      </div>
      <div class="layer circle"></div>
      <div class="layer rhomb"></div>
    </section>
    <section id="landscape">
      <div class="wrap">
        <h2 class="__title">
          <img src="./images/lp/landscape/txt_landscape.svg" alt="LANDSCAPE">
          <span>［区画図］</span>
        </h2>
        <div class="__img">
          <img src="./images/lp/landscape/img.png" alt="［区画図］">
        </div>
        <div class="__txt">
          2台分の駐車スペースを確保<br />
          <span>※車種による</span>
        </div>
        <div class="__car">
          <div class="__car_content">
            開放感を存分に満喫する前面道路公道幅員約16ｍ。<br />
            お子様の送迎や来客時などにも困らない2台分の駐車<br class="hidden-pc" />スペースも確保（車種による）。<br class="hidden-pc" />ビルトインカーポートですので<br class="hidden-pc" />愛車にも優しい駐車スペース<br class="hidden-pc" />となっております。
            <img src="./images/lp/landscape/car.jpg" alt="Image Photo Car">
          </div>
        </div>
        <div class="layer hidden-sp">
          <img src="./images/lp/landscape/layer-circle.svg" alt="layer circle">
        </div>
      </div>
    </section>
    <section id="plan">
      <div class="heading hidden-sp">
        <h2>
          <img src="./images/lp/plan/txt_plan.svg" alt="Plan">
        </h2>
      </div>
      <div class="__plan _plan_a">
        <div class="plan__content">
          <img class="plan_txt" src="./images/lp/plan/txt_taian_residence.svg" alt="TAIAN RESIDENCE">
          <img class="plan_name" src="./images/lp/plan/txt_plan_a.svg" alt="PLAN A">
          <p>タップでA棟間取図をご覧いただけます</p>
        </div>
      </div>
      <div class="__plan _plan_b">
        <div class="plan__content">
          <img class="plan_txt" src="./images/lp/plan/txt_taian_residence.svg" alt="TAIAN RESIDENCE">
          <img class="plan_name" src="./images/lp/plan/txt_plan_b.svg" alt="PLAN B">
          <p>タップでB棟間取図をご覧いただけます</p>
        </div>
      </div>
    </section>
    <div id="equipment-structure-wrap">
      <section id="equipment">
        <div class="equipment-wrap">
          <h2 class="equipment__title">
            <img src="./images/common/txt-menu_equipment.svg" alt="EQUIPMENT">
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
              <img src="./images/lp/equipment/txt_kitchen.svg" alt="KITCHEN">
            </h3>
            <div class="box__img">
              <img src="./images/lp/equipment/img_kitchen.png" alt="KITCHEN">
              <p class="_txt">
                PDFで詳しく見る
              </p>
            </div>
            <div class="box__desc">
              <div class="desc_logo">
                <img class="panasonic" src="./images/lp/equipment/logo_panasonic.svg" alt="Panasonic">
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
              <img src="./images/lp/equipment/txt_bath_room.svg" alt="BATH ROOM">
            </h3>
            <div class="box__img">
              <img src="./images/lp/equipment/img_bath_room.png" alt="BATH ROOM">
              <p class="_txt">
                PDFで詳しく見る
              </p>
            </div>
            <div class="box__desc">
              <div class="desc_logo">
                <img src="./images/lp/equipment/logo_lixil.svg" alt="Panasonic">
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
      </section>
      <section id="structure">
        <img src="./images/common/txt-menu_structure.svg" alt="STRUCTURE">
        <span>構　造</span>
      </section>
    </div>
    <section id="warranty">
      <img src="./images/common/txt-menu_warranty.svg" alt="WARRANTY">
      <span>保　証</span>
    </section>
    <section id="location">
      <img src="./images/common/txt-menu_location.svg" alt="LOCATION">
      <span>ロケーション</span>
    </section>

    <section id="life_information">
      <img src="./images/common/txt-menu_life_information.svg" alt="LIFE INFORMATION">
      <span>生活環境</span>
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
            詳しくはFUJISAWA MAPからもご確認いただけます。<br class="hidden-pc" /><a href="https://webgis.alandis.jp/fujisawa14/portal/kikendo/index.html">https://webgis.alandis.jp/fujisawa14/portal/kikendo/index.html</a>
          </p>
        </div>
      </div>
      <div id="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.4256901484637!2d139.61714501525162!3d35.41948348025624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ca4b14eb889%3A0x21879ac3a3523aaf!2z5pel5pys44CB44CSMjM1LTAwMjEg56We5aWI5bed55yM5qiq5rWc5biC56Ov5a2Q5Yy65bKh5p2R77yT5LiB55uu77yW4oiS77yT77yV!5e0!3m2!1sja!2s!4v1644984629884!5m2!1sja!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
            □取引態様／専任媒介
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
            ※ご成約の際には別途仲介手数料を申し受けます。※掲載のパース画像は完成イメージパースにつき実際のものとは異なる場合があります。※図面と現況が異なる場合は現況を優先といたします。※先着順につき、売却済みの場合はご容赦ください。※別途諸費用がかかります。※お申し込みの際には、印鑑（認印）と2020年・2021年分の収入証明（源泉徴収票等）、ご本人と確認ができるもの（運転免許証・パスポート等）をご持参ください。※表示の価格には建物に係る消費税相当額が含まれております。※価格は物件の代金総額を表示しており、消費税が課税される場合は税込み価格です。（1,000円未満は切り上げ。※写真に写っている、またはパース（絵）や間取図に描かれている家具や車などは、販売価格に含まれません。※完成予想図はいずれも外構、植栽、外観等実際のものとは多少異なることがあります。※モデルルーム・モデルハウス・展示場・ショールームの画像の場合、今回販売の物件と異なる場合があります。※ＣＧ合成の画像の場合、実際とは多少異なる場合があります。</p>
        </div>
      </div>
    </section>

  </main>


  <?php include(__DIR__ . '/inc/footer.php'); ?>
  <?php include(__DIR__ . '/inc/scripts.php'); ?>
</body>

</html>
