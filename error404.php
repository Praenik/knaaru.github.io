<? session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/error.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    
    <title>Орден рыцарей Наару</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

  <?php require_once 'templates/nav.php'?>  

  <div class="error">
    <div class="container">
      <div class="error_content">
        <div class="error_logo"><img src="images/error.gif" alt="Error 404"></div>
        <h1 class="error_code">error 404</h1>
        <div class="error_info">Наару не знают куда делась эта страница...</div>
        <a href="index.php" class="error_index">вернуться на главную</a>
      </div>
    </div>
  </div>

</body>
</html>