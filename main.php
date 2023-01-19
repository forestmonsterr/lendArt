<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <link rel="stylesheet" href="style\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header_logo"><p>Landing page</p></div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#">Обо мне</a>
                <a href="#">Мои навыки</a>
                <a href="#">Портфолио</a>
                <a href="#">Контакты</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="main__welcome">
            <h1>Привет!</h1>
            <p>Меня зовут Диана Зверева и я программист</p>
        </div>
        <div class="wrapper">
            <div class="main__about">
                <div class="about__left">
                    <img class="mw-100" src="img/lana1.png" alt="lana">
                </div>
                <div class="about__right">
                    <h1>Обо мне</h1>
                    <p>Образование:</p>
                    <ul>
                        <li>КГУ "Программная инженерия"</li>
                        <li>УРФУ курс "Специальные разделы математики"</li>
                        <li>УРФУ курс "Методы и инструменты анализа больших данных"</li>
                        <li>Онлайн-курс на платформе Stepik "Поколение Python"</li>
                        <li>Онлайн-курс на платформе Stepik "Функциональное программирование на языке Haskell"</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="skills"><h1>Мои навыки</h1>
            <div class="main__skills">
                <div class="skills__left">
                    <p>Изучаю:</p>
                    <ul>
                        <li>PHP, Python, JavaScript</li>
                        <li>SQL и базы данных</li>
                        <li>Data Science и машинное обучение</li>
                    </ul>
                </div>
                <div class="skills__right">
                    <p>Использую:</p>
                    <ul>
                        <li>IntelliJ IDEA, PHPStorm, Visual Studio</li>
                        <li>Spring, React</li>
                        <li>Git</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portfolio"><h1>Портфолио</h1>
            <div class="main__portfolio">
                <div class="portfolio__left">
                    <p>Солнечная система</p>
                    <li>Реализовано на языке C++ с использованием OpenGL</li>
                    <img src="gif/solar.gif" alt="solar">
                </div>
                <div class="portfolio__right">
                    <p>Супер Марио</p>
                    <li>Реализовано на языке Python</li>
                    <img src="gif/mario.gif" alt="mario">
                </div>
            </div>
        </div>
        <div class="contacts"><h1>Контакты</h1>
            <div class="main__contacts">
                <p>Социальный сети:</p>
                <a href="https://t.me/jjvjwj"><img src="img/tg.png" alt="tg"></a>
                <a href="https://vk.com/id377010771"><img src="img/vk.png" alt="vk"></a>
            </div>
        </div>
    </main>

    <script src="scripts\script.js"></script>
</body>
</html>