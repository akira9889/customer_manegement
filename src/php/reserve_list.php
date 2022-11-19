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

  <title>顧客予約一覧</title>
</head>

<body>
  <header>
    <div class="header">
      <h1>Sample shop</h1>
    </div>
  </header>

  <div class="content">
    <div class="sidebar">
      <ul class="sidebar-list">
        <li class="sidebar-item">
          <a href="customer_list.php" class="sidebar-link">顧客情報一覧</a>
        </li>
        <li class="sidebar-item">
          <a href="visit-history.php" class="sidebar-link">来店履歴一覧</a>
        </li>
        <li class="sidebar-item">
          <a href="reserve_list.php" class="sidebar-link active">予約一覧</a>
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
        <form class="select-container">
          <select name="select_date" id="select_date" class="select_date">
            <option value="2022-10">2022 / 10</option>
            <option value="2022-09">2022 / 09</option>
            <option value="2022-08">2022 / 08</option>
            <option value="2022-07">2022 / 07</option>
            <option value="2022-06">2022 / 06</option>
            <option value="2022-05">2022 / 05</option>
            <option value="2022-04">2022 / 04</option>
            <option value="2022-03">2022 / 03</option>
            <option value="2022-02">2022 / 02</option>
            <option value="2022-01">2022 / 01</option>
            <option value="2022-12">2021 / 12</option>
            <option value="2022-11">2021 / 11</option>
          </select>
        </form>
      </div>

      <div class="table-wrap">
        <table class="customer-table reserve-list-table">
          <thead>
            <tr>
              <th>顧客名</th>
              <th>予約日</th>
              <th>メモ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
              <td class="row-link"><a href="customer_detail.php"></a></td>
            </tr>
            <tr>
              <th>鈴木太郎</th>
              <td>1990-09-09</td>
              <td class="memo">テキストテキストテキストテキスト</td>
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
