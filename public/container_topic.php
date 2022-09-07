<?php

require_once("./php/dbc_J.php");
//  取得したデータを表示
$testData = getAllTest();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="all" href="./css/style.css">
    <link rel="stylesheet" media="all" href="./css/topic.css">
    <link rel="stylesheet" media="all" href="./css/body-center.css">
    <link rel="stylesheet" media="all" href="./css/topicsMenu.css">
    <link rel="stylesheet" media="all" href="./css/instagram.css">
</head>
<body>
    <div class="topic-wrapper">
    <?php foreach ($testData as$column): ?>
        <div class="topic-center">
        <a href="./news_single.php?id=<?php echo $column['id'] ?>">
            <div class="topic-outer">
                <div class="topic-detail-top">
                    <div class="topic-detail-list">
                        <p class="<?php echo setCategoryClass($column['category']) ?>"><?php echo setCategoryName($column['category']) ?></p>
                    </div>
                </div>
                <div class="topic-detail-center">
                        <p><?php echo $column['title'] ?></p>
                </div>
                <div class="topic-detail-bottom">
                    <p><?php echo $column['name'] ?></p>
                </div>
            </div>
        </a>
        </div>
        <?php endforeach; ?>    
    </div>
</body>
</html>
