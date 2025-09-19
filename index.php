<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoLaNi ENERGY - 太陽光発電で持続可能な社会をつくる</title>

  <!-- OGP -->
  <meta property="og:url" content=""> <!-- //ページのURLを設定 -->
  <meta property="og:type" content="website"> <!-- //ページの種類を設定 -->
  <meta property="og:title" content="SoLaNi ENERGY - 太陽光発電で持続可能な社会をつくる"> <!-- //ページのタイトルを設定 -->
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

    <!--======== l-main ========-->
    <main class="l-main">
      <!-- Hero Section -->
      <section class="hero">
        <img src="assets/images/bg_mv.png" alt="" class="hero-bg" />
        <div class="hero-content">
          <div class="hero-content-inner">
            <h1 class="hero-title">
            <span>Lighting the Future,</span>
            <span>Together with You.</span>
          </h1>
          <p class="hero-subtitle">未来を照らすエネルギーを、あなたと共に</p>
          <a href="#contact" class="btn-primary">お問い合わせ</a>
          </div>
        </div>
      </section>

      <!-- Mission Section -->
      <section class="mission">
        <div class="mission-content">
          <h2 class="mission-title">
            <span class="gradient-text">再生可能エネルギー</span><span>で</span>
            <br>
            <span class="gradient-text">持続可能</span><span>な</span><span class="gradient-text">社会</span><span>をつくる</span>
          </h2>
          <p class="mission-description">
            SoLaNi ENERGIEは、再生可能エネルギーを通じて人と地球に優しい未来を築くことを使命としています。
            <br>
            エネルギーの安定供給だけでなく、地域社会への貢献、そして次世代へ受け継ぐ環境価値を大切にしています。
          </p>
          <div class="mission-features">
            <div class="feature-card">
              <p class="feature-subtitle">業界トップクラスの</p>
              <p class="feature-title">販売実績数</p>
            </div>
            <div class="feature-card">
              <p class="feature-subtitle">購入後も安心できる</p>
              <p class="feature-title">アフターサポート</p>
            </div>
            <div class="feature-card">
              <p class="feature-subtitle">優秀施工士が行う</p>
              <p class="feature-title">安心施工</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Service Section -->
      <section class="service" id="service">
        <div class="service-content">
          <div class="section-header">
            <h2 class="section-title-en">Service</h2>
            <div class="section-icon">
              <img src="assets/images/title-icon-blue.png" alt="">
            </div>
            <h3 class="section-title-jp">太陽光発電を中心とした<br>エネルギー事業</h3>
          </div>
          <div class="service-image">
            <picture>
              <!-- 768px以下のときにSP用画像を読み込む -->
              <source srcset="assets/images/service-head-img-sp.png" media="(max-width: 768px)">
              <!-- それ以外はPC用 -->
              <img src="assets/images/service-head-img.png" alt="太陽光発電システム">
            </picture>
          </div>
          <p class="service-description">
            SoLaNi ENERGIEでは、住宅に向けて太陽光発電システムの導入を推進しています。
            <br>
            電気代の削減や災害時の安心、そしてCO₂削減といった多くのメリットを提供し、地域と地球環境に優しい未来を実現します。
            <br>
            現在は太陽光発電を中心に事業を展開しながら、今後さらに多様な再生可能エネルギーの可能性を広げていきます。
          </p>
        </div>
      </section>

      <!-- Reason Section -->
      <section class="reason">
        <div class="reason-content">
          <div class="section-header reason-section-header">
            <h2 class="section-title-en">Reason</h2>
            <div class="section-icon">
              <img src="assets/images/title-icon-blue.png" alt="">
            </div>
            <h3 class="section-title-jp">選ばれる理由</h3>
          </div>

          <div class="reason-cards">
            <div class="reason-card">
              <div class="reason-image">
                <img src="assets/images/service-img_01.png" alt="安心の自社施工" />
              </div>
              <div class="reason-text">
                <p class="reason-number">Service01</p>
                <h4 class="reason-title">専門チームでの施工</h4>
                <p class="reason-description">計画から施工・アフターの工程を各専門家が対応</p>
              </div>
            </div>
            <div class="reason-card reverse">
              <div class="reason-text reason-text-reverse">
                <p class="reason-number">Service02</p>
                <h4 class="reason-title">地域密着型</h4>
                <p class="reason-description">地元に根ざした信頼のサポート体制</p>
              </div>
              <div class="reason-image">
                <img src="assets/images/service-img_02.png" alt="地域密着型" />
              </div>
            </div>
            <div class="reason-card">
              <div class="reason-image">
                <img src="assets/images/service-img_03.png" alt="再エネ専門の知見" />
              </div>
              <div class="reason-text">
                <p class="reason-number">Service03</p>
                <h4 class="reason-title">再エネ専門の知見</h4>
                <p class="reason-description">最新技術と豊富なノウハウで安心</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="cta">
        <div class="cta-bg">
          <img src="assets/images/cta-bg.png" alt="">
        </div>
        <div class="cta-content">
          <div class="cta-contact-inner">
            <h2 class="cta-title">持続可能な<br class="sp-only">社会のために</h2>
            <p class="cta-description">
              私たちは、太陽光発電を通じてCO₂削減や自然との共生を目指しています。<br>
              エネルギーの自給自足を支援し、環境負荷を軽減することで、未来の子どもたちに美しい地球を残していきます。
            </p>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
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