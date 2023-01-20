<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <link rel="stylesheet" href="style\style.css">
    <link rel="stylesheet" href="style/remodal.css">
    <link rel="stylesheet" href="style/remodal-default-theme.css">
</head>
<body>
    <header>
        <div class="header_logo"><p>Landing page</p></div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#about">Обо мне</a>
                <a href="#skills">Мои навыки</a>
                <a href="#portfolio">Портфолио</a>
                <a href="#contacts">Контакты</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="main__welcome">
            <h1>Привет!</h1>
            <p>Меня зовут Диана Зверева и я программист</p>
        </div>
        <a name="about"></a>
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
        <a name="skills"></a>
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
        <a name="portfolio"></a>
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
        <a name="contacts"></a>
        <div class="contacts"><h1>Контакты</h1>
            <div class="main__contacts">
                <p>Социальный сети:</p>
                <a href="https://t.me/jjvjwj"><img src="img/tg.png" alt="tg"></a>
                <a href="https://vk.com/id377010771"><img src="img/vk.png" alt="vk"></a>

                <a href="#modal"><img src="img/feedback.png" alt="feedback"></a>
                <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">

                    <div class="remodalBorder">


                        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                        <form id="form">

                            <h2 id="modal1Title">Оставьте ваши контактные данные и я свяжусь с вами</h2>

                            <input type="text" class="putName" name="name" placeholder="Введите ваше имя" required>
                            <input type="text" class="emailName" name="email" placeholder="Введите ваш email" required>
                            <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
                            <input type="submit" name="submit" class="btn" value="ОТПРАВИТЬ">
                            <input type="hidden" name="formData" value="Заявка с сайта">

                        </form>

                    </div>

                </div>
    </main>

    <script src="scripts\script.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="scripts/remodal.min.js"></script>
    <script src="scripts/remodal.js"></script>
</body>
</html>