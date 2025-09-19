<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoLaNi ENERGY - お問い合わせ</title>

  <!-- OGP -->
  <meta property="og:url" content=""> <!-- //ページのURLを設定 -->
  <meta property="og:type" content="website"> <!-- //ページの種類を設定 -->
  <meta property="og:title" content="SoLaNi ENERGY - お問い合わせ"> <!-- //ページのタイトルを設定 -->
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
    <main class="l-main p-contact-main">
      <section class="p-contact l-section">
        <div class="p-contact__inner l-inner">
          <div class="p-contact__body">
            <h2 class="p-contact__body__title">お問い合わせ</h2>
            <h3 class="p-contact__body__subTitle">CONTACT</h3>
            <p class="p-contact__body__text">
              ※この問い合わせフォームを使用しての商材やサービスの<br class="u-pc-only">営業は、ご遠慮くださいますようお願い致します。<br>
              ※人材紹介業など、当社に対する営業行為は「電話・メー<br class="u-pc-only">ル」ともにお断りしております。
            </p>
          </div>
          <div class="p-contact__border"></div>
          <div class="p-contact__formInner">
            <form action="" class="p-contact__form">
              <!-- === お問い合わせ目的 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">お問い合わせ目的</label>
                </div>
                <div class="p-contact__form__item__input p-contact__form__item__select">
                  <select name="purpose" id="">
                    <option value="" selected>Select item</option>
                  </select>
                </div>
              </div>
              <!-- === 名前 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">名前</label>
                </div>
                <div class="p-contact__form__item__input">
                  <input type="text" name="name" placeholder="Placeholder" >
                </div>
              </div>
              <!-- === メールアドレス === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">メールアドレス</label>
                </div>
                <div class="p-contact__form__item__input">
                  <input type="text" name="email" placeholder="Placeholder" >
                </div>
              </div>
              <!-- === 確認のため再度ご入力ください === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">確認のため再度ご入力ください</label>
                </div>
                <div class="p-contact__form__item__input">
                  <input type="text" name="confirm-email" placeholder="Placeholder" >
                </div>
              </div>
              <!-- === 電話番号 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">電話番号</label>
                </div>
                <div class="p-contact__form__item__input">
                  <input type="text" name="phoneNumber" placeholder="Placeholder" >
                </div>
              </div>
              <!-- === お問い合わせ内容 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="">お問い合わせ内容</label>
                </div>
                <div class="p-contact__form__item__input p-contact__form__item__textarea">
                  <textarea name="content" id="" placeholder="Placeholder"></textarea>
                </div>
              </div>
              <button class="p-contact__form__submitBtn" type="submit">送信</button>
            </form>
            <div class="p-contact__policy">
              <p>個人情報の取り扱いについて、<br><a href="#">プライバシーポリシー</a>に同意したものとみなされます</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--======== l-footer ========-->
    <?php require_once 'footer.php'; ?>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>