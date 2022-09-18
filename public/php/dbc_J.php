<?php 
function dbConnect() {
    $dsn = 'mysql:host=localhost;dbname=jbeauty_website;charset=utf8';
    $user = 'magoshichi';
    $pass = 'magoshichi789';

    try {
        $dbh = new \PDO($dsn,$user,$pass,[
            \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
        ]);
    } catch(PDOException $e) {
        echo '接続失敗'. $e->getMessage();
        exit();
    };

    return $dbh;
}

// 2. データを取得する
// 引数 : なし
// 返り値 : 取得したデータ
function getAllTest() {
    $dbh = dbConnect();
     //➀SQL文の準備
     $sql = 'SELECT * FROM forms';
     //➁SQLの実行 
     $stmt = $dbh->query($sql);
     //➂SQlの結果を受け取る
     $result = $stmt->fetchall(\PDO::FETCH_ASSOC);
     return $result;
     $dbh = null;
}

function getAllPro() {
    $dbh = dbConnect();
     //➀SQL文の準備
     $sql = 'SELECT * FROM forms';
     //➁SQLの実行
     $stmt = $dbh->query($sql);
     //➂SQlの結果を受け取る
     $result = $stmt->fetchall(\PDO::FETCH_ASSOC);
     return $result;
     $dbh = null;
}

// 3. カテゴリー名を表示
// 引数 : 数字
// 返り値 : カテゴリーの文字列
function setCategoryName($category) {
    if ($category === 1) {
        return 'Eyelash extention';
    } elseif ($category === 2) {
        return 'Hair Slon';
    } else {
        return 'Shop';
    }
}

function setCategoryClass($category) {
    if ($category === 1) {
        return 'topic-detail-list-p';
    } elseif ($category === 2) {
        return 'topic-detail-list-p-hairslon';
    } else {
        return 'topic-detail-list-p-shop';
    }
}

function getTest($id) {
    if(empty($id)) {
        exit('IDが不正です');
    }
    
    $dbh = dbConnect();
    
    // 1. SQL準備
    $stmt = $dbh->prepare('SELECT * FROM jbeauty_test_news2 Where id = :id');
    $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
    
    // 2. SQL実行
    $stmt->execute();
    
    // 3. 結果を取得
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
    if(!$result) {
        exit('ブログがありません');
    }

    return $result;
}

?>