<?php
session_start();
$get_degree = isset($_GET['degree']) ? $_GET['degree'] : null;
$get_degree = intval($get_degree);
$_SESSION['degree'] = $get_degree;
// ファイルと回転角
$filename = 'W000017561-006_1_S.jpg';
$degrees = $get_degree;
$_SESSION['degree']=$degrees;

// コンテントタイプ
$header = header('Content-type: image/jpg');
$_SESSION['header']=$header;

// 読み込み
$source = imagecreatefromjpeg($filename);
$_SESSION['source']=$source;
//ブレンドモードを無効にする
$source = imagealphablending($source, false);
//完全なアルファチャネル情報を保存するフラグをonにする
$source = imagesavealpha($source, true);
// $source = imagecreatefromjpeg($source);
// 回転
$rotate = imagerotate($source, $degrees, 0,0);

// 出力
// $_SESSION['image']=imagejpeg($rotate);
$_SESSION['image']=imagejpeg($rotate);

// メモリの解放

// require_once('rotate_view.php');
// var_dump($get_degree);
?>
