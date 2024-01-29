<?php
//データベース接続のPHP

// class connect{
//   const DB_NAME = "LAA1579749-kinkikids";
//   const HOST = "mysql212.phy.lolipop.lan";
//   const USER = "LAA1579749";
//   const PASS = "kinkikidsPass";

//   private $dbh;

//   public function __construct(){
//     $dsn = "mysql:host=".self::HOST.";dbname=".self::DB_NAME.";charset=utf8mb4";
//     try {
//       // PDOのインスタンスをクラス変数に格納する
//       $this->dbh = new PDO($dsn, self::USER, self::PASS);

//     } catch(Exception $e){
//       // Exceptionが発生したら表示して終了
//       exit($e->getMessage());
//     }

//     // DBのエラーを表示するモードを設定
//     $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//   }

//   public function query($sql, $param = null){
//     // プリペアドステートメントを作成し、SQL文を実行する準備をする
//     $stmt = $this->dbh->prepare($sql);
//     // パラメータを割り当てて実行し、結果セットを返す
//     $stmt->execute($param);
//     return $stmt;
//   }

// }

/* ①　データベースの接続情報を定数に格納する */
//ロリポップ用接続
// const DB_HOST = 'mysql:dbname=LAA1579749-kinkikids;host=mysql212.phy.lolipop.lan';
// const DB_USER = 'LAA1579749';
// const DB_PASSWORD = 'kinkikidsPass';

//ローカル用接続
const DB_HOST = 'mysql:dbname=user;host=localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'root';

//②　例外処理を使って、DBにPDO接続する
try {
    $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES =>false
    ]);
} catch (PDOException $e) {
    echo mb_convert_encoding($e->getMessage(), "UTF-8", "Shift-JIS");
    exit();
}

?>