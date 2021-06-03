<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 left">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">Новости</a>
              </li>
<!--              <li class="nav-item">-->
<!--                <a class="nav-link" href="rules.php">Устав</a>-->
<!--              </li>-->
          </ul>
          <? if (!isset($_SESSION['email']) && !isset($_SESSION['password'])): ?>
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
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">Профиль</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <? if ($_SESSION['role'] == 'admin'): ?>
                    <li><a class="dropdown-item" href="admin/admin.php">Панель управления</a></li>
                    <? endif; ?>
                    <li><a class="dropdown-item" href="profile.php">Личный кабинет</a></li>
                    <li><a class="dropdown-item" href="php/logout.php">Выйти</a></li>
                  </ul>
              </li>
          </ul>
          <? endif ?>
        </div>
    </div>
</nav>