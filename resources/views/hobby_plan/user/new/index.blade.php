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
      <form action="./" method="post" class="userNew" id="form">
        <div>
          <p>ユーザ名</p>
          <input type="text" required name="name" placeholder="ホビー 太郎" />
          <p>住所</p>
          <input type="text" required name="address" placeholder="" />
          <p>メールアドレス</p>
          <input
            type="email"
            name="email"
            placeholder="hobby@gmail.com"
            id="email"
            required
          />
          <p>メールアドレス（確認）</p>
          <input type="text" required id="email_re" />
          <p>性別</p>
          <label for="gender_1">男</label>
          <input type="radio" name="gender" value="1" id="gender_1" required />
          <label for="gender_2">女</label>
          <input type="radio" name="gender" value="2" id="gender_2" />
          <label for="gender_3">その他</label>
          <input type="radio" name="gender" value="3" id="gender_3" />
          <p>パスワード</p>
          <input type="password" name="password" id="password" />
          <p>パスワード（確認）</p>
          <input type="password" id="password_re" />
          <p>支払方法</p>
          <label for="method_1">現金</label>
          <input type="radio" name="method" value="1" id="method_1" required />
          <label for="method_2">クレジット</label>
          <input type="radio" name="method" value="2" id="method_2" />
          <label for="method_3">その他</label>
          <input type="radio" name="method" value="3" id="method_3" />
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