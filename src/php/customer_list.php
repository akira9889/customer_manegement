<?php
require_once(__DIR__ . '/functions.php');

session_start();

if (!(isset($_SESSION['USER']) && $_SESSION['USER']['shop_id'] === (int) $_GET['shop_id']) && $_SESSION['USER']['admin'] !== 1) {
  //ログインされていない場合はログイン画面へ
  redirect('/shop_login.php?shop_id=' . $_GET['shop_id']);
}

?>
<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <!-- Original CSS -->
  <link href="/css/style.css" rel="stylesheet" type="text/css">

  <title>顧客情報一覧</title>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <div class="header-content">
        <h1 class="header-logo">Sample shop</h1>
        <nav id="header-nav" class="header-nav">
          <ul id="header-list" class="header-list">
            <li class="header-item">
              <a class="header-item-link" href="/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
        </nav>
      </div>
    </div>
  </header>

  <div class="content">
    <div class="sidebar">
      <ul class="sidebar-list">
        <li class="sidebar-item">
          <a href="customer_list.php" class="sidebar-link active">顧客情報一覧</a>
        </li>
        <li class="sidebar-item">
          <a href="visit-history.php" class="sidebar-link">来店履歴一覧</a>
        </li>
        <li class="sidebar-item">
          <a href="reserve_list.php" class="sidebar-link">予約一覧</a>
        </li>
        <li class="sidebar-item">
          <a href="register_user.php" class="sidebar-link">設定</a>
        </li>
      </ul>
    </div>

    <div class="main-content">
      <div class="main-head">
        <form class="search-container">
          <input type="text" placeholder="検索" class="search">
        </form>
        <div class="adding-btn">
          <a href="register_customer.php">顧客新規作成<span>＋</span></a>
        </div>
      </div>

      <div class="table-wrap">
        <table class="customer-table">
          <thead>
            <tr>
              <th>顧客名</th>
              <th>電話番号</th>
              <th>メールアドレス</th>
              <th>生年月日</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>000-0000-0000</td>
              <td>test@gmail.com</td>
              <td>1990-09-09</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="pagenation-inner">
        <ul class="pagenation-list">
          <li class="pagenation-item">
            <a href="#" class="pagenation-link prev">&lt;&lt;</a>
          </li>
          <li class="pagenation-item">
            <a href="#" class="pagenation-link">1</a>
          </li>
          <li class="pagenation-item">
            <a href="#" class="pagenation-link active">2</a>
          </li>
          <li class="pagenation-item">
            <a href="#" class="pagenation-link">3</a>
          </li>
          <li class="pagenation-item">
            <a href="#" class="pagenation-link next">&gt;&gt;</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>
