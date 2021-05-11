<? session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/news.css">
        
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
        
    <title>Новости</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

    <?php require_once 'templates/nav.php';

    include 'php/db_connect.php';
    $db_table = 'news';

    $id = $_GET['id'];
    ?>

    <div class="news">
        <div class="container">
            <?php
            $query = $db->query("SELECT * FROM $db_table WHERE id=$id");
            $news = $query->fetch(PDO::FETCH_ASSOC);
            $date = date("d.m.y", strtotime($news[date]));
            ?>
            <div class="news_block">
                <? if ($news[img]): ?>
                    <div class="news_header">
                        <img src="images/news/<?=$news[img]?>" alt="">
                    </div>
                <? endif; ?>
                <div class="news_content">
                    <h2 class="news_title"><?=$news[title];?></h2>
                    <div class=""><?=$news[text];?></div>
                </div>
                <div class="news_footer">
                    <ul class="news_list" type="none">
                        <li class="news_list_item"><time datetime="2021-12-31"><?=$date;?></time></li>
                        <li class="news_list_item"><?=$news[author];?></li>
                        <li class="news_list_item"><?=$news[category];?></li>
                    </ul>
                </div>
            </div>

<!--            <div class="news_block">-->
<!--                <div class="news_header">-->
<!--                    <img src="https:placehold.it/1000x300" alt="">-->
<!--                </div>-->
<!--                <div class="news_content">-->
<!--                   <h2 class="news_title">Lorem ipsum dolor sit amet</h2>-->
<!--                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi velit tenetur reiciendis atque mollitia magnam iste officiis amet, nobis possimus excepturi deleniti recusandae provident rerum laudantium. Suscipit aut optio dolorum nostrum libero dolore, quisquam, accusantium quia recusandae veniam minus earum sapiente blanditiis animi voluptates rem veritatis similique temporibus. Quos dolorum dignissimos repudiandae incidunt dolorem temporibus, laborum beatae, sequi exercitationem earum laudantium ad libero officiis doloribus mollitia deleniti numquam adipisci ut nobis doloremque sit repellat, voluptatum perferendis vitae! Blanditiis veniam laborum voluptatem dolor, error molestias ea voluptate quos consequuntur optio repellendus omnis voluptates quo illo perferendis architecto repellat nihil aut obcaecati.</p>-->
<!--                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi velit tenetur reiciendis atque mollitia magnam iste officiis amet, nobis possimus excepturi deleniti recusandae provident rerum laudantium. Suscipit aut optio dolorum nostrum libero dolore, quisquam, accusantium quia recusandae veniam minus earum sapiente blanditiis animi voluptates rem veritatis similique temporibus. Quos dolorum dignissimos repudiandae incidunt dolorem temporibus, laborum beatae, sequi exercitationem earum laudantium ad libero officiis doloribus mollitia deleniti numquam adipisci ut nobis doloremque sit repellat, voluptatum perferendis vitae! Blanditiis veniam laborum voluptatem dolor, error molestias ea voluptate quos consequuntur optio repellendus omnis voluptates quo illo perferendis architecto repellat nihil aut obcaecati.</p>-->
<!--                    <ul>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                    </ul>-->
<!--                    <ol>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                    </ol>-->
<!--                    <table>-->
<!--                        <tr>-->
<!--                            <td>1</td>-->
<!--                            <td>2</td>-->
<!--                            <td>3</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>4</td>-->
<!--                            <td>5</td>-->
<!--                            <td>6</td>-->
<!--                        </tr>-->
<!--                    </table>-->
<!--                    <img src="https://placehold.it/1920x1080" alt="">-->
<!--                </div>-->
<!--                <div class="news_footer">-->
<!--                    <ul class="news_list" type="none">-->
<!--                        <li class="news_list_item"><time datetime="2021-12-31 19:21">31.12.2020</time></li>-->
<!--                        <li class="news_list_item">author</li>-->
<!--                        <li class="news_list_item">category</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>

    <?php require_once 'templates/footer.php' ?>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/info-slider.js"></script>

</body>
</html>