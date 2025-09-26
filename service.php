<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoLaNi ENERGY - サービス概要</title>

  <!-- OGP -->
  <meta property="og:url" content=""> <!-- //ページのURLを設定 -->
  <meta property="og:type" content="website"> <!-- //ページの種類を設定 -->
  <meta property="og:title" content="SoLaNi ENERGY - サービス概要"> <!-- //ページのタイトルを設定 -->
  <meta property="og:description" content="再生可能エネルギーを通じて人と地球に優しい未来を築く。太陽光発電システムの導入を推進し、電気代削減やCO₂削減を実現します。"> <!-- //ページのディスカッションを設定 -->
  <meta property="og:site_name" content="SoLaNi ENERGY"> <!-- //サイトの名前を設定 -->
  <meta property="og:image" content="assets/images/ogp.png"> <!-- //ogp画像の設定 -->
  <meta property="og:locale" content="ja_JP"> <!-- //ページの国コードの設定 -->

  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">

  <!-- Import CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Import JS/jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
          crossorigin="anonymous">
  </script>
</head>
<body>
  <div class="wrapper">
    <!--======== l-header ========-->
    <?php require_once 'header.php'; ?>
    <main class="l-main p-service-main">
      <section class="p-service-hero l-section">
        <div class="p-service-hero__inner l-inner">
          <div class="p-service-hero__body">
            <h2 class="p-service-hero__body__heading">
              <img src="assets/images/title-icon.png" alt="">
              <div class="p-service-hero__body__heading__heading">Service</div>
              <p class="p-service-hero__body__heading__text">提供するサービス</p>
            </h2>
            <div class="p-service-hero__body__border"></div>
            <div class="p-service-hero__body__desc">
              <div class="p-service-hero__body__desc__heading">太陽光だけで<br>あなたの“エコ＋安心”を自給自足へ</div>
              <p class="p-service-hero__body__desc__text">
                太陽の光から生まれる電力は、クリーンでサステナブルなエネルギーの代表です。光熱費の高騰や災害リスクが高まる現代において、太陽光発電は生活の「安心バッファー」として欠かせません。<br>
                さらに、発電した電力を余剰電力として電力会社へ売ることができるため、将来的には収益の一環としても活用可能です。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="p-service-explain l-section">
        <div class="p-service-explain_inner l-inner">
          <div class="p-service-explain__content">
            <div class="p-service-explain__content__body">
              <h2>蓄電池で実現する<br>  “完全自給型ライフ”</h2>
              <p>
                太陽光による発電は主に昼間に集中しますが、<br>
                蓄電池を併用すれば電力の無駄遣いを防ぎ、<br>
                夜間や非常時にも安心して使えるようになります。<br>
                <br>
                この組み合わせにより、光熱費の大幅な削減だけでなく、<br>
                環境への負荷を抑えた持続可能なライフスタイルが実現できます。
              </p>
            </div>
            <div class="p-service-explain__content__img">
              <picture>
                <!-- モバイル（〜767px）で表示する画像 -->
                <source srcset="assets/images/service-explain-sp.png" media="(max-width: 768px)">
                <!-- タブレット以上で表示する画像 -->
                <source srcset="assets/images/service-explain.png" media="(min-width: 769px)">
                <!-- フォールバック（必須！） -->
                <img src="assets/images/service-explain.png" alt="サービス説明のイメージ">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section class="p-service-reason l-section">
        <div class="p-service-reason__inner l-inner">
          <div class="p-service-reason__heading">
            <div class="p-service-reason__heading__icon p-service-reason__heading__icon__1">
              <img src="assets/images/service-heading-icon_01.png" alt="">
            </div>
            <h2 class="p-service-reason__heading__title">選ばれる理由</h2>
            <div class="p-service-reason__heading__icon p-service-reason__heading__icon__2">
              <img src="assets/images/service-heading-icon_02.png" alt="">
            </div>
          </div>
          <div class="p-service-reason__cards">
            <div class="p-service-reason__card">
              <div class="p-service-reason__card__img">
                <img src="assets/images/service-reason-img_01.png" alt="">
              </div>
              <div class="p-service-reason__card__body">
                <div class="p-service-reason__card__body__flex">
                  <span class="p-service-reason__card__body__number">Point01</span>
                  <h3 class="p-service-reason__card__body__title">家計にやさしいご提案</h3>
                  <p class="p-service-reason__card__body__text">電気代の削減はもちろん、補助金や売電収入も含めて「長い目でお得」になるプランをご提案します。</p>
                </div>
              </div>
            </div>
            <div class="p-service-reason__card">
              <div class="p-service-reason__card__img">
                <img src="assets/images/service-reason-img_02.png" alt="">
              </div>
              <div class="p-service-reason__card__body">
                <div class="p-service-reason__card__body__flex">
                  <span class="p-service-reason__card__body__number">Point02</span>
                  <h3 class="p-service-reason__card__body__title">安心のアフターサポート</h3>
                  <p class="p-service-reason__card__body__text">設置して終わりではなく、点検・メンテナンスで長く安心して使えるようにサポートします。</p>
                </div>
              </div>
            </div>
            <div class="p-service-reason__card">
              <div class="p-service-reason__card__img">
                <img src="assets/images/service-reason-img_03.png" alt="">
              </div>
              <div class="p-service-reason__card__body">
                <div class="p-service-reason__card__body__flex">
                  <span class="p-service-reason__card__body__number">Point03</span>
                  <h3 class="p-service-reason__card__body__title">わかりやすい説明</h3>
                  <p class="p-service-reason__card__body__text">専門用語をなるべく使わず、初めての方でも安心できるように丁寧にご案内します。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="p-service-maker l-section">
        <div class="p-service-maker__inner l-inner">
          <div class="c-heading-header p-service-maker__heading">
            <h2 class="c-heading-title-en">Maker</h2>
            <div class="c-heading-icon p-service-maker__heading__icon">
              <img src="assets/images/title-icon-blue.png" alt="">
            </div>
            <h3 class="c-heading-title-jp p-service-maker__heading__title__jp">サービス内容</h3>
          </div>
          <div class="p-service-maker__cards">
            <div class="p-service-maker__card">
              <span class="p-service-maker__card__number">Service01</span>
              <h3 class="p-service-maker__card__title">太陽光発電システムの設置</h3>
              <div class="p-service-maker__card__img">
                <img src="assets/images/service-maker-icon_01.png" alt="">
              </div>
              <p class="p-service-maker__card__text">屋根の形やご家庭のライフスタイルに合わせた、最適なシステムをプランニングします。</p>
            </div>
            <div class="p-service-maker__card">
              <span class="p-service-maker__card__number">Service02</span>
              <h3 class="p-service-maker__card__title">蓄電池の導入</h3>
              <div class="p-service-maker__card__img">
                <img src="assets/images/service-maker-icon_02.png" alt="">
              </div>
              <p class="p-service-maker__card__text">昼間に発電した電気をためて夜使えるから、電気代の削減だけでなく停電対策にも安心。</p>
            </div>
            <div class="p-service-maker__card">
              <span class="p-service-maker__card__number">Service03</span>
              <h3 class="p-service-maker__card__title">エコキュート・省エネ機器</h3>
              <div class="p-service-maker__card__img">
                <img src="assets/images/service-maker-icon_03.png" alt="">
              </div>
              <p class="p-service-maker__card__text">光熱費をまとめて節約できるよう、太陽光と相性の良いエコ機器もご提案しています。</p>
            </div>
            <div class="p-service-maker__card">
              <span class="p-service-maker__card__number">Service04</span>
              <h3 class="p-service-maker__card__title">補助金・申請サポート</h3>
              <div class="p-service-maker__card__img">
                <img src="assets/images/service-maker-icon_04.png" alt="">
              </div>
              <p class="p-service-maker__card__text">面倒な手続きもおまかせください。最新の補助金制度を活用して、できるだけ負担を減らします。</p>
            </div>
            <div class="p-service-maker__card">
              <span class="p-service-maker__card__number">Service05</span>
              <h3 class="p-service-maker__card__title">無料相談・現地調査</h3>
              <div class="p-service-maker__card__img">
                <img src="assets/images/service-maker-icon_05.png" alt="">
              </div>
              <p class="p-service-maker__card__text">「本当にうちの屋根でもできるの？」そんな疑問にも無料でお答えします。お気軽にお問い合わせください。</p>
            </div>
          </div>
        </div>
      </section>
      <section class="p-service-handling l-section">
        <div class="p-service-handling__inner l-inner">
          <div class="c-heading-header p-service-handling__heading">
            <h2 class="c-heading-title-en">Maker</h2>
            <div class="c-heading-icon p-service-handling__heading__icon">
              <img src="assets/images/title-icon-blue.png" alt="">
            </div>
            <h3 class="c-heading-title-jp p-service-handling__heading__title__jp">取扱メーカー</h3>
          </div>
          <ul class="p-service-handling__list">
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__tyoshu">
                <img src="assets/images/tyosyu_logo.png" alt="">
              </div>
              <p>長州産業</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__sharp">
                <img src="assets/images/sharp_logo.png" alt="">
              </div>
              <p>シャープ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__panasonic">
                <img src="assets/images/panasonic_logo.png" alt="">
              </div>
              <p>パナソニック</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__canadian">
                <img src="assets/images/canadian_logo.png" alt="">
              </div>
              <p>カナディアン・<br class="u-sp-only">ソーラー</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__nextEnegy">
                <img src="assets/images/nextenegy_logo.png" alt="">
              </div>
              <p>ネクストエナジー</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__huawei">
                <img src="assets/images/huawei_logo.png" alt="">
              </div>
              <p>ファーウェイ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__mitshubishi">
                <img src="assets/images/mitsubishi_logo.png" alt="">
              </div>
              <p>三菱</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__kyocera">
                <img src="assets/images/kyocera_logo.png" alt="">
              </div>
              <p>京セラ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__qcells">
                <img src="assets/images/qcells_logo.png" alt="">
              </div>
              <p>ハンファQセルズ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__toyota">
                <img src="assets/images/toyota_logo.png" alt="">
              </div>
              <p>トヨタ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__denso">
                <img src="assets/images/denso_logo.png" alt="">
              </div>
              <p>デンソー</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__nichikon">
                <img src="assets/images/nichikon_logo.png" alt="">
              </div>
              <p>ニチコン</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__omron">
                <img src="assets/images/omron_logo.png" alt="">
              </div>
              <p>オムロン</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__looop">
                <img src="assets/images/looop_logo.png" alt="">
              </div>
              <p>Looop</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__kyocera">
                <img src="assets/images/kyocera_logo.png" alt="">
              </div>
              <p>京セラ</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__hitachi">
                <img src="assets/images/hitachi_logo.png" alt="">
              </div>
              <p>日立</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__mitsubishi">
                <img src="assets/images/mitsubishi_logo.png" alt="">
              </div>
              <p>三菱</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__lixil">
                <img src="assets/images/lixil_logo.png" alt="">
              </div>
              <p>リクシル</p>
            </li>
            <li class="p-service-handling__item">
              <div class="p-service-handling__item__logo p-service-handling__item__logo__takaraStandard">
                <img src="assets/images/takarastandard_logo.png" alt="">
              </div>
              <p>タカラスタンダード　他</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="c-contact-banner" id="contact">
        <div class="c-contact-banner-content">
          <div class="c-contact-banner-info">
            <div class="c-contact-banner-header">
              <div class="c-contact-banner-icon">
                <img src="assets/images/title-icon-blue.png" alt="">
              </div>
              <h2 class="c-contact-banner-title">お問い合わせ</h2>
            </div>
            <h3 class="c-contact-banner-main-title">
              <span>OUR</span>
              <span>CONTACT</span>
            </h3>
            <a href="contact.php" class="btn-primary c-contact-banner-btn c-contact-banner-pc-only">お問い合わせ</a>
          </div>
          <div class="c-contact-banner-image">
            <img src="assets/images/contact-img.png" alt="">
          </div>
          <a href="contact.php" class="btn-primary c-contact-banner-btn c-contact-banner-sp-only">お問い合わせ</a>
        </div>
      </section>
    </main>
    <!--======== l-footer ========-->
    <?php require_once 'footer.php'; ?>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>