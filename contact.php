<?php
mb_language("Japanese");
//↑マルチバイトの言語設定を日本語にします

mb_internal_encoding("UTF-8");
//↑マルチバイトの文字エンコーディングをUTF-8にします

$adminSent = false;
$userSent  = false;

if($_POST) {
  $to = 'info@solani.co.jp'; // 管理者のアドレス
  $subject = 'お問い合わせがありました';

  // 本文（管理者宛）
  $adminMessage  = "お問い合わせがありました。\n\n";
  $adminMessage .= "入力された内容は以下の通りです。\n";
  $adminMessage .= "------------------------------\n";
  $adminMessage .= "お問い合わせ目的：" . $_POST["purpose"] . "\n\n";
  $adminMessage .= "お名前：" . $_POST["name"] . "\n\n";
  $adminMessage .= "メールアドレス：" . $_POST["email"] . "\n\n";
  $adminMessage .= "電話番号：" . $_POST["phoneNumber"] . "\n\n";
  $adminMessage .= "お問い合わせ本文：\n" . $_POST["content"] . "\n";

  // Fromヘッダーを設定（迷惑メール対策 & 返信しやすくする）
  $headers = "From: SoLaNi ENERGY <no-reply@yourdomain.jp>\r\n";
  $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

  // 管理者宛に送信
  $adminSent = mb_send_mail($to, $subject, $adminMessage, $headers);

  // 確認メール（ユーザー宛）
  $userTo = $_POST["email"];
  $userSubject = "【SoLaNi ENERGY】お問い合わせありがとうございます";
  $userMessage  = $_POST["name"] . " 様\n\n";
  $userMessage .= "この度はお問い合わせいただきありがとうございます。\n";
  $userMessage .= "以下の内容で承りました。\n\n";
  $userMessage .= "------------------------------\n";
  $userMessage .= "お問い合わせ目的：" . $_POST["purpose"] . "\n\n";
  $userMessage .= "お名前：" . $_POST["name"] . "\n\n";
  $userMessage .= "メールアドレス：" . $_POST["email"] . "\n\n";
  $userMessage .= "電話番号：" . $_POST["phoneNumber"] . "\n\n";
  $userMessage .= "お問い合わせ本文：\n" . $_POST["content"] . "\n";
  $userMessage .= "------------------------------\n\n";
  $userMessage .= "※本メールは自動返信です。\n";
  $userMessage .= "　内容を確認の上、担当者より改めてご連絡差し上げます。\n\n";
  $userMessage .= "――――――――――――――――――\n";
  $userMessage .= "SoLaNi ENERGY\n";
  $userMessage .= "https://yourdomain.jp\n";
  $userMessage .= "――――――――――――――――――\n";

  $userHeaders = "From: SoLaNi ENERGY <no-reply@yourdomain.jp>\r\n";

  $userSent = mb_send_mail($userTo, $userSubject, $userMessage, $userHeaders);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoLaNi ENERGY - お問い合わせ</title>

  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="SoLaNi ENERGY - お問い合わせ">
  <meta property="og:description" content="再生可能エネルギーを通じて人と地球に優しい未来を築く。太陽光発電システムの導入を推進し、電気代削減やCO₂削減を実現します。">
  <meta property="og:site_name" content="SoLaNi ENERGY">
  <meta property="og:image" content="assets/images/ogp.png">
  <meta property="og:locale" content="ja_JP">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

  <style>
    /* 最小限のエラースタイルだけ補強（既存CSSに統合OK） */
    .form-alert{margin:16px 0;padding:12px 16px;border-radius:8px}
    .form-alert.success{background:#E8F5E9;color:#1B5E20;border:1px solid #C8E6C9}
    .form-alert.error{background:#FDECEA;color:#B71C1C;border:1px solid #FFCDD2}
    .is-invalid{border-color:#D32F2F !important; box-shadow:0 0 0 3px rgba(211,47,47,.12)}
    .p-contact__form__item__select{position:relative}
    .p-contact__form__item__select select{appearance:none;-webkit-appearance:none;-moz-appearance:none;padding-right:44px}
    .p-contact__form__item__select::after{
      content:""; position:absolute; right:16px; top:50%; width:8px; height:8px;
      border-right:2px solid #333; border-bottom:2px solid #333;
      transform: translateY(-50%) rotate(45deg); pointer-events:none;
    }
    .u-visually-hidden{position:absolute!important;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
  </style>
</head>
<body>
  <div class="wrapper">
    <!--======== l-header ========-->
    <?php require_once 'header-contact.php'; ?>
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
            <form action="contact.php" method="post" class="p-contact__form" novalidate>
              <!-- ハニーポット（人間は触らない） -->
              <label class="u-visually-hidden" for="company_kana">会社名（カナ）</label>
              <input class="u-visually-hidden" type="text" id="company_kana" name="company_kana" tabindex="-1" autocomplete="off">

              <!-- === お問い合わせ目的 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label">
                  <label for="purpose">お問い合わせ目的 <!--<span aria-hidden="true" style="color:#D32F2F">＊</span>--></label>
                </div>
                <div class="p-contact__form__item__input p-contact__form__item__select">
                  <select name="purpose" id="purpose" required>
                    <option value="" selected>選択してください</option>
                    <option value="お見積りのご相談">お見積りのご相談</option>
                    <option value="サービスについて">サービスについて</option>
                    <option value="サポート/不具合">サポート/不具合</option>
                    <option value="その他">その他</option>
                  </select>
                </div>
              </div>

              <!-- === 名前 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label"><label for="name">名前 <!--<span aria-hidden="true" style="color:#D32F2F">＊</span>--></label></div>
                <div class="p-contact__form__item__input">
                  <input type="text" id="name" name="name" placeholder="山田 太郎" autocomplete="name" required>
                </div>
              </div>

              <!-- === メールアドレス === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label"><label for="email">メールアドレス <!--<span aria-hidden="true" style="color:#D32F2F">＊</span>--></label></div>
                <div class="p-contact__form__item__input">
                  <input type="email" id="email" name="email" placeholder="example@example.com" autocomplete="email" required>
                </div>
              </div>

              <!-- === 確認メール === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label"><label for="confirmEmail">確認のため再度ご入力ください <!--<span aria-hidden="true" style="color:#D32F2F">＊</span>--></label></div>
                <div class="p-contact__form__item__input">
                  <input type="email" id="confirmEmail" name="confirmEmail" placeholder="example@example.com" required>
                </div>
              </div>

              <!-- === 電話番号（任意） === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label"><label for="phoneNumber">電話番号（任意）</label></div>
                <div class="p-contact__form__item__input">
                  <input type="tel" id="phoneNumber" name="phoneNumber" inputmode="tel" placeholder="09012345678" pattern="^[0-9\-+\s]{10,15}$">
                </div>
              </div>

              <!-- === お問い合わせ内容 === -->
              <div class="p-contact__form__item">
                <div class="p-contact__form__item__label"><label for="content">お問い合わせ内容 <!--<span aria-hidden="true" style="color:#D32F2F">＊</span>--></label></div>
                <div class="p-contact__form__item__input p-contact__form__item__textarea">
                  <textarea id="content" name="content" rows="6" placeholder="ご用件をご記入ください" required></textarea>
                </div>
              </div>

              <button class="p-contact__form__submitBtn btn-primary" type="submit">送信</button>
            </form>
            <?php if ($adminSent && $userSent): ?>
              <div class="p-contact__thanks">送信ありがとうございました。</div>
            <?php endif; ?>
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
  <script>
    // 簡易クライアントバリデーション（任意・強化用）
    (function(){
      const form = document.querySelector('.p-contact__form');
      if(!form) return;
      form.addEventListener('submit', (e) => {
        // 必要に応じてJS側でもエラー表示（ここではHTMLのrequiredに任せる）
      });
    })();
  </script>
</body>
</html>
