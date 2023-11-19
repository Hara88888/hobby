<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>ホビーボックス</title>
    <link rel="stylesheet" href="../css/global.css" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#home">ホーム</a></li>
          <li><a href="#about">アバウト</a></li>
          <li><a href="#contact">コンタクト</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="page-description">
        <p>
          このページでは、あなたの趣味に合った活動を選択できます。画像をクリックして選択し、最後に決定ボタンを押してください。
        </p>
      </div>

      <div class="grid-container">
        <!-- 各 grid-item を追加 -->
        <div class="grid-item" tabindex="0">
          <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
          <img src="./../images/143133_ext_18_0.webp" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                    <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
          <img src="./../images/143133_ext_18_0.webp" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                   <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
          <img src="https://cdn2.thecatapi.com/images/9ug.jpg" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                  <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
          <img src="./../images/143133_ext_18_0.webp" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                 <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
          <img src="./../images/143133_ext_18_0.webp" alt="音楽" />
          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                  <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <div class="grid-item" tabindex="0">
                   <img src="./../images/thumbnail_omairi_mask.jpg" alt="音楽" />

          <p>音楽 - 楽器、コンサートなど</p>
        </div>
        <!-- 既存の grid-item 要素 -->
      </div>

      <div class="decision-button-container">
        <button type="button" onclick="submitSelection()">決定</button>
      </div>
    </main>

    <footer>
      <p>© 2023 ホビーボックス. すべての権利予約。</p>
      <p>
        ソーシャルメディア: <a href="#">Facebook</a>, <a href="#">Twitter</a>,
        <a href="#">Instagram</a>
      </p>
    </footer>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.grid-item');

    items.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('selected');
        });
    });
});

function submitSelection() {
    // 選択した趣味を処理するロジックをここに追加
    alert('選択が完了しました！');
    location.href = "../plan";
}

    </script>
  </body>
</html>
