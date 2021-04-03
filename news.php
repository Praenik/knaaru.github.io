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

  <?php require_once 'templates/nav.php'?>

    <div class="news">
        <div class="container">

            <div class="news_block">
                <div class="news_header">
                    <a href="post.php"><img src="https://placehold.it/1000x300" alt=""></a>
                </div>
                <div class="news_content">
                    <a class="news_header_link" href="post.php"><h2 class="news_title">Lorem ipsum dolor sit amet</h2></a>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit eos placeat ipsam officiis assumenda eius blanditiis dignissimos enim tempora nisi reprehenderit possimus, numquam laboriosam!
                </div>
                <div class="news_footer">
                    <ul class="news_list" type="none">
                        <li class="news_list_item"><time datetime="2021-12-31 19:21">31.12.2020</time></li>
                        <li class="news_list_item">author</li>
                        <li class="news_list_item">category</li>
                    </ul>
                    <a href="post.php" class="news_read">читать полностью</a>
                </div>
            </div>

            <div class="news_block">
                <div class="news_header">
                    <a href="post.php"><img src="https://placehold.it/2000x1000" alt=""></a>
                </div>
                <div class="news_content">
                    <a class="news_header_link" href="post.php"><h2 class="news_title">Lorem ipsum dolor sit amet</h2></a>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit eos placeat ipsam officiis assumenda eius blanditiis dignissimos enim tempora nisi reprehenderit possimus, numquam laboriosam!
                </div>
                <div class="news_footer">
                    <ul class="news_list" type="none">
                        <li class="news_list_item"><time datetime="2021-12-31 19:21">31.12.2020</time></li>
                        <li class="news_list_item">author</li>
                        <li class="news_list_item">category</li>
                    </ul>
                    <a href="post.php" class="news_read">читать полностью</a>
                </div>
            </div>

            <div class="news_block">
                <div class="news_header">
                    <a href="post.php"><img src="https://placehold.it/500x100" alt=""></a>
                </div>
                <div class="news_content">
                    <a class="news_header_link" href="post.php"><h2 class="news_title">Lorem ipsum dolor sit amet</h2></a>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit eos placeat ipsam officiis assumenda eius blanditiis dignissimos enim tempora nisi reprehenderit possimus, numquam laboriosam!
                </div>
                <div class="news_footer">
                    <ul class="news_list" type="none">
                        <li class="news_list_item"><time datetime="2021-12-31 19:21">31.12.2020</time></li>
                        <li class="news_list_item">author</li>
                        <li class="news_list_item">category</li>
                    </ul>
                    <a href="post.php" class="news_read">читать полностью</a>
                </div>
            </div>

            <div class="news_block">
                <div class="news_content">
                    <a class="news_header_link" href="post.php"><h2 class="news_title">Lorem ipsum dolor sit amet</h2></a>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit eos placeat ipsam officiis assumenda eius blanditiis dignissimos enim tempora nisi reprehenderit possimus, numquam laboriosam!
                </div>
                <div class="news_footer">
                    <ul class="news_list" type="none">
                        <li class="news_list_item"><time datetime="2021-12-31 19:21">31.12.2020</time></li>
                        <li class="news_list_item">author</li>
                        <li class="news_list_item">category</li>
                    </ul>
                    <a href="post.php" class="news_read">читать полностью</a>
                </div>
            </div>

        </div>
    </div>

    <?php require_once 'templates/footer.php'?>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/info-slider.js"></script>
</body>
</html>