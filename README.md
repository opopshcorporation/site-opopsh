# Opopsh Site
Небольшой сайт с авторизацией, блогом и играми.
Написан на PHP и HTML. Сайт также доступен в сети: https://opopsh.ru/ . Вы можете посмотреть поведение и корректность работы сайта.
<hr>
<br>
<h2><b>Стек</b></h2>
<b>ОС</b>: <i>Ubuntu</i>.<br>
Причина выбора: удобная для администратирования сервера и работы с nginx и PHP.<br><br>
<b>Веб-сервер</b>: <i>nginx</i>. <br>
Причина выбора: несмотря на некоторую сложность в настройке, он более продвинутый и гибкий, по сравнению с Apache или другими.<br><br>
<b>Язык программирования</b>: <i>PHP 8.5.</i><br>
Причина выбора: у PHP довольно невысокий порог входа и он хорошо справляется с серверными задачами. У меня стоит php8.5-fpm.<br><br>
<b>БД</b>: <i>MySQL(MariaDB)</i><br>
Причина выбора: Популярная и несложная СУБД для небольших проектов, хорошо работает с PHP
<hr>
<br>
<h2>Безопасность</h2>
<menu>
<li>Сайт защищен от <b>SQL-инъекций</b>. Запросы, использующие данные от ввода пользователя работают через <b>подготовленные запросы(prepare + execute).</b></li>
<li>Сайт защищен от <b>XSS</b>. Ввод пользователя экранируется через <b>htmlspecialchars</b>, а также все алгоритмы сайта продуманы и безопасны.</li>
<li>Сайт защищен от <b>CSRF</b>. Злоумышленники не смогут перехватить файлы cookie, а также их прочитать. <b>Защита от XSS прямо влияет на этот пункт.</b> Cookie защищены параметром <b>samesite=Lax</b>. </li>
<li>Мошенники или хакеры не смогут получить доступ к БД, потому что предыдущие пункты защищают от опасных запросов, а также зайти на PhpMyAdmin может только владелец через localhost или 127.0.0.1, это указано в конфиге nginx.</li>
<li>При публикации поста сайт проверяет файл, загружаемый пользователем. Он может быть только картинкой, это проверяется через <b>getimagesize</b>. Если функция не смогла определить размеры картинки - значит он ею не является. Злоумышленник не сможет загрузить вирус.</li>
</menu>
<hr>
<br>
<h2><b>Скриншоты:</b></h2>
<ol>
<li>Главная страница: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/home.png?raw=true"></li><br>
<li>Страница о проекте: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/about.png?raw=true"></li><br>
<li>Страница с игровыми проектами: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/games.png?raw=true"></li><br>
<li>Страница с примерами кода: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/coding.png?raw=true"></li><br>
<li>Страница управления аккаунтом: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/account.png?raw=true"></li><br>
<li>Страница сброса пароля: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/p_reset.png?raw=true"></li><br>
<li>Страница публикации поста: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/createpost.png?raw=true"></li><br>
<li>Страница удаления аккаунта: <img src="https://github.com/opopshcorporation/site-opopsh/blob/main/screenshots/delete_account.png?raw=true"></li><br>
</ol>
<hr>
<br>
<h2><b>Благодарности: </b></h2>
Спасибо программисту <i>nasipov</i> за создание отчета перед публикацией сайта в репозиторий.

