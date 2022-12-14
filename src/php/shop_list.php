<?php
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Class/ShopList.php');

session_start();

$company_id = (int) $_GET['company_id'];

//ログインされていない場合はログイン画面へ

if (!isset($_SESSION['USER']['admin']) || $_SESSION['USER']['admin'] !== 1 || $_SESSION['USER']['id'] !== $company_id) {
        redirect('/login.php?company_id=' . $company_id);
}

$shops = new ShopList($company_id);

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

    <title>顧客予約一覧</title>
</head>

<body class="register_shop">
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
                    <a href="shop_list.php" class="sidebar-link">店舗一覧</a>
                </li>
                <li class="sidebar-item">
                    <a href="register_shop.php?company_id=<?= $company_id ?>"  class="sidebar-link">店舗追加　＋</a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <div class="main-inner">
                <?php
                $group_by_prefectures = group_by($shops->listShops(), 'prefecture');
                // var_dump($group_by_prefectures);
                // exit;
                $prefectures = array_keys($group_by_prefectures);
                for ($i = 0; $i < count($group_by_prefectures); $i++):
                ?>
                <h3 class="shop_prefecture">
                    <?php
                        $prefecture = $prefectures[$i];
                        echo $prefecture;
                    ?>
                </h3>
                <ul class="shop-list">
                    <?php
                    foreach ($group_by_prefectures[$prefecture] as $shop):
                    $url = '/shop_login.php?shop_id=' . $shop['id'];
                    ?>
                    <li class="shop-item">
                        <a class="shop-link" href="<?= $url ?>">
                        <?= $shop['area']?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endfor; ?>
            </div>
        </div>

</body>

</html>
