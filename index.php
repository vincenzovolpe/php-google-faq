<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google Faq</title>
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <header>
            <div class="header-top">
                <h1>
                    <a href="https://www.google.com/">
                        <img alt="Google" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" srcset="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png 2x">
                    </a>
                </h1>
                <h2>
                    <a href="">Privacy e termini</a>
                </h2>
            </div>
            <div class="header-bottom">
                <ul>
                    <li>
                        <a href="">Introduzione</a>
                    </li>
                    <li>
                        <a href="privacy">Norme sulla privacy</a>
                    </li>
                    <li>
                        <a href="terms">Termini di servizio</a>
                    </li>
                    <li>
                        <a href="technologies">Tecnologie</a>
                    </li>
                    <li>
                        <a class="selezione" href="faq">Domande frequenti</a>
                    </li>
                    <li>
                        <a href="https://myaccount.google.com/" data-track-as="pgc-header-myaccount">Account Google</a>
                    </li>
                </ul>
            </div>
            <div class="sticker"></div>
        </header>
        <a href="#"></a>

        <main>
            <div class="container">

                <?php
                    include 'faq.php';

                    foreach ($faq as $elemento) { ?>
                        <h2><?php echo $elemento['domanda'] ?></h2>
                            <?php
                                foreach ($elemento['risposta'] as $risposta) { ?>
                                    <p>
                                        <?php echo $risposta['paragrafo'] ?>
                                    </p>
                            <?php
                                }
                    }?>
            </div>
        </main>

        <footer>
            <div class="container">
                <ul>
                    <li>
                        <a href="https://www.google.com/">Google</a>
                    </li>
                    <li>
                        <a href="https://about.google/">Tutto su Google</a>
                    </li>
                    <li>
                        <a href="privacy">Privacy</a>
                    </li>
                    <li>
                        <a href="terms">Termini</a>
                    </li>
                </ul>
                <img src="/ESERCIZI_BOOLEAN/php-google-faq/public/images/image.png" alt="">
                <select>
                    <option value="af">Afrikaans</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="ca">Català</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="et">Eesti</option>
                    <option value="en">English</option>
                    <option value="en-GB">English (United Kingdom)</option>
                    <option value="es">Español</option>
                    <option value="es-419">Español (Latinoamérica)</option>
                    <option value="eu">Euskara</option>
                    <option value="fil">Filipino</option>
                    <option value="fr">Français</option>
                    <option value="fr-CA">Français (Canada)</option>
                    <option value="gl">Galego</option>
                    <option value="hr">Hrvatski</option>
                    <option value="zu">Isizulu</option>
                    <option value="is">Íslenska</option>
                    <option selected="" value="it">Italiano</option>
                    <option value="sw">Kiswahili</option>
                    <option value="lv">Latviešu</option>
                    <option value="lt">Lietuvių</option>
                    <option value="hu">Magyar</option>
                    <option value="nl">Nederlands</option>
                    <option value="no">Norsk</option>
                    <option value="pl">Polski</option>
                    <option value="pt-BR">Português (Brasil)<option>
                        <option value="pt-PT">Português (Portugal)</option>
                        <option value="ro">Română</option>
                        <option value="sk">Slovenčina</option>
                        <option value="sl">Slovenščina</option>
                        <option value="fi">Suomi</option>
                        <option value="sv">Svenska</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="tr">Türkçe</option>
                        <option value="el">Ελληνικά</option>
                        <option value="bg">Български</option>
                        <option value="ru">Русский</option>
                        <option value="sr">Српски</option>
                        <option value="uk">Українська</option>
                        <option value="iw">‫עברית‬</option>
                        <option value="ur">‫اردو‬</option>
                        <option value="ar">‫العربية‬</option>
                        <option value="fa">‫فارسی‬</option>
                        <option value="am">አማርኛ</option>
                        <option value="mr">मराठी</option>
                        <option value="hi">हिन्दी</option>
                        <option value="bn">বাংলা</option>
                        <option value="gu">ગુજરાતી</option>
                        <option value="ta">தமிழ்</option>
                        <option value="te">తెలుగు</option>
                        <option value="kn">ಕನ್ನಡ</option>
                        <option value="ml">മലയാളം</option>
                        <option value="th">ไทย</option>
                        <option value="ko">한국어</option>
                        <option value="zh-HK">中文 (香港)</option>
                        <option value="zh-CN">中文（简体中文）</option>
                        <option value="zh-TW">中文（繁體中文）</option>
                        <option value="ja">日本語</option>
                    </select>

                </div>
        </footer>
    </body>
</html>
