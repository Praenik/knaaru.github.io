<?php
include "db_connect.php";
$db_table = "news";
$offset_get = $_GET['offset'];
$offset = (int)$offset_get;
$query = $db->query("SELECT * FROM $db_table ORDER BY id DESC LIMIT $offset, 4");
$news = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($news as $new):
    $date = date("d.m.y", strtotime($new[date]));
    ?>
    <div class="news_block">
        <? if ($new[img] != '0'): ?>
            <div class="news_header">
                <a href="post.php?id=<?=$new[id]?>"><img src="images/news/<?=$new[img]?>" alt=""></a>
            </div>
        <? endif; ?>
        <div class="news_content">
            <a class="news_header_link" href="post.php?id=<?=$new[id]?>"><h2 class="news_title"><?=$new[title];?></h2></a>
            <div class="text_preview"><?=$new[text];?></div>
        </div>
        <div class="news_footer">
            <ul class="news_list" type="none">
                <li class="news_list_item"><time datetime="2021-12-31"><?=$date;?></time></li>
                <li class="news_list_item"><?=$new[author];?></li>
                <li class="news_list_item"><?=$new[category];?></li>
            </ul>
            <a href="post.php?id=<?=$new[id]?>" class="news_read">читать полностью</a>
        </div>
    </div>
<? endforeach; ?>