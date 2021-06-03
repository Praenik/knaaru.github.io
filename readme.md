# Орден рыцарей Наару
## Верстка cайта гильдии
![GitHub last commit](https://img.shields.io/github/last-commit/Prae-photo/knaaru.github.io) ![GitHub Repo stars](https://img.shields.io/github/stars/Prae-photo/knaaru.github.io?style=social)

Проект делался для гильдии в компьютерной игре World of Warcraft в образовательных целях, для изучения HTML5, CSS, JS, PHP и фреймворка Bootstrap 5

## Используемые библиотеки:

- [JQuery](https://jquery.com/) - JS фреймворк
- [Bootstrap 5](https://getbootstrap.com/) - HTML фреймворк
- [Slicks](https://github.com/kenwheeler/slick) - для работы слайдеров 
- [Fancybox](https://github.com/fancyapps/fancybox) - для превью изображений в галерее

## Установка

Скачать, создать БД, разархивировать, запускать на локальном сервере :)

## SQL-запрос для создания БД:

CREATE TABLE `users` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'reader',
  `name` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
);
CREATE TABLE `news` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(25) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `video` varchar(512) DEFAULT NULL,
  `views` int NOT NULL DEFAULT '0'
);
