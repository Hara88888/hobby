<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>新規ユーザ登録</title>
    <link rel="stylesheet" href="./../../css/global.css" />
    <link rel="stylesheet" href="./../../css/userNew.css" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="./../../">ホーム</a></li>
          <li><a href="#about">アバウト</a></li>
          <li><a href="#contact">コンタクト</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>ユーザ登録</h1>
      <form action="" method="post" class="userNew" id="form">
        <div>
          <p>満足度</p>
          <input type="range" name="" id="" />
          <p>感想</p>
          <textarea name="feel" id="" cols="30" rows="10"></textarea>

          <div>
            <button type="submit">送信する</button>
          </div>
        </div>
      </form>
    </main>
    <footer>
      <p>© 2023 ホビーボックス. すべての権利予約。</p>
      <p>
        ソーシャルメディア: <a href="#">Facebook</a>, <a href="#">Twitter</a>,
        <a href="#">Instagram</a>
      </p>
    </footer>
    <script>
      "use strict";
      const formElm = document.getElementById("form");
      const emailElm = document.getElementById("email");
      const emailReElm = document.getElementById("email_re");
      const passwordElm = document.getElementById("password");
      const passwordReElm = document.getElementById("password_re");
      formElm.addEventListener("submit", (e) => {
        e.preventDefault();
        if (emailElm.value !== emailReElm.value) {
          alert("メールアドレスが異なります！");
          return;
        }
        if (passwordElm.value !== passwordReElm.value) {
          alert("パスワードが異なります！");
          return;
        }
        // 改めてsubmitする
        formElm.submit();
      });
    </script>
  </body>
</html>
