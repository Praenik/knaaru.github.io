<? session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css"/>
    <link rel="stylesheet" href="vendor/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="vendor/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="vendor/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/index.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    
    <title>Орден рыцарей Наару</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

  <?php
    include "php/db_connect.php";
    $db_table = "news";
    require_once 'templates/nav.php';
  ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="images/main-slider/slider-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="images/main-slider/slider-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="images/main-slider/slider-3.jpg" class="d-block w-100" alt="...">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>

  <div class="news light-theme">
    <div class="container">
      <div class="news-titles">
        <h1 class="title news-main-title">Новости</h1>
        <a class="title news-main-title more" href="news.php">Еще новости</a>
      </div>
      <div class="row">
          <?php
          $query = $db->query("SELECT title, text, id FROM $db_table ORDER BY id DESC LIMIT 4");
          $news = $query->fetchAll(PDO::FETCH_ASSOC);
          foreach ($news as $new):
          ?>
          <a class="col col-md-3 news-link" href="post.php?id=<?=$new[id]?>">
              <div class="news-block">
                  <h1 class="news-title"><?=$new[title];?></h1>
                  <h2 class="news-subtitle"><?=$new[text];?></h2>
              </div>
          </a>
          <? endforeach; ?>
      </div>
    </div>
  </div>

  <div class="info dark-theme">
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-6">
          <h1 class="title">Информация</h1>
          <div class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nisi earum iusto qui quis nobis veritatis dignissimos, in totam voluptatem, pariatur incidunt cupiditate quia voluptates.</div>
        </div>
        <div class="col"></div>
      </div>
      <div class="gallery-info">
        <div class="gallery-info-block">
          <a class="fancybox" rel="gallery1" href="images/slider-gallery/slider-1.jpg" title="Test">
            <img class="gallery-info-item" src="images/slider-gallery/slider-1.jpg" alt="">
          </a>
        </div>
        <div class="gallery-info-block">
          <a class="fancybox" rel="gallery1" href="images/slider-gallery/slider-1.jpg" title="Test">
            <img class="gallery-info-item" src="images/slider-gallery/slider-1.jpg" alt="">
          </a>
        </div>
        <div class="gallery-info-block">
          <a class="fancybox" rel="gallery1" href="images/slider-gallery/slider-1.jpg" title="Test">
            <img class="gallery-info-item" src="images/slider-gallery/slider-1.jpg" alt="">
          </a>
        </div>
        <div class="gallery-info-block">
          <a class="fancybox" rel="gallery1" href="images/slider-gallery/slider-1.jpg" title="Test">
            <img class="gallery-info-item" src="images/slider-gallery/slider-1.jpg" alt="">
          </a>
        </div>
        <div class="gallery-info-block">
          <a class="fancybox" rel="gallery1" href="images/slider-gallery/slider-1.jpg" title="Test">
            <img class="gallery-info-item" src="images/slider-gallery/slider-1.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="achievement light-theme">
    <div class="container">
      <h1 class="title">Достижения</h1>
      <div class="row">
        <div class="col-sm">
          <div class="ach-item">
            <img class="ach-photo" src="https://placehold.it/200" alt="Preview" >
            <h3 class="ach-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
          </div>
        </div>
        <div class="col-sm">
          <div class="ach-item">
            <img class="ach-photo" src="https://placehold.it/200" alt="Preview" >
            <h3 class="ach-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
          </div>
        </div>
        <div class="col-sm">
          <div class="ach-item">
            <img class="ach-photo" src="https://placehold.it/200" alt="Preview" >
            <h3 class="ach-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
          </div>
        </div>
        <div class="col-sm">
          <div class="ach-item">
            <img class="ach-photo" src="https://placehold.it/200" alt="Preview" >
            <h3 class="ach-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="timetable dark-theme">
    <div class="container">
      <h1 class="title">Расписание</h1>
      <div class="row">
        <div class="col-sm">
          <h1 class="timetable-static">Длань наару</h1>
          <h2 class="timetable-raidtime">СР - 18:45-21:30 МСК</h2>
          <h2 class="timetable-raidtime">ПТ - 18:45-21:30 МСК</h2>
          <h2 class="timetable-raidtime">СБ - 18:45-21:30 МСК</h2>
          <h2 class="timetable-raidtime">ВС - 18:45-21:30 МСК</h2>
        </div>
        <div class="col-sm">
          <div class="timetable-photo">
            <img src="images/swords.png" alt="" class="timetable-photo-item">
          </div>
        </div>
        <div class="col-sm">
          <div class="col-sm">
            <h1 class="timetable-static">Гнев наару</h1>
            <h2 class="timetable-raidtime">СР - 19:45-22:00 МСК</h2>
            <h2 class="timetable-raidtime">ПТ - 19:45-22:00 МСК</h2>
            <h2 class="timetable-raidtime">ВС - 19:45-22:00 МСК</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'templates/footer.php'?>

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
  
  <script type="text/javascript" src="vendor/fancybox/lib/jquery.mousewheel.pack.js"></script>
  <script type="text/javascript" src="vendor/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
  <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
  <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


  <script type="text/javascript" src="js/info-slider.js"></script>
</body>
</html>