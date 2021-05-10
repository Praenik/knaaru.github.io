<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 left">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rules.php">Устав</a>
              </li>
          </ul>
          <?php if (!isset($_SESSION['email']) && !isset($_SESSION['password'])): ?>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 right">
              <li class="nav-item">
                <a class="nav-link" href="auth.php">Войти</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reg.php">Регистрация</a>
              </li>
          </ul>
          <? else: ?>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 right">
              <li class="nav-item">
                  <a class="nav-link" href="#">Профиль</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="php/logout.php">Выйти</a>
              </li>
          </ul>
          <? endif ?>
        </div>
    </div>
</nav>