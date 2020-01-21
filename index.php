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

                // Creo la struttura dati che contiene le faq con domande e risposte
                $faq = [
                    [
                        'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                        'risposta' => [
                            ['paragrafo' => "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
                            ['paragrafo' => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni."],
                            ['paragrafo' => "Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili).  Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto).  Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la prot"],
                            ['paragrafo' => "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge."],
                            ['paragrafo' => "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."]
                            ]
                    ],
                    [
                        'domanda' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
                        'risposta' => [
                            ['paragrafo' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno."],
                            ['paragrafo' => "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo."],
                            ['paragrafo' => "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online<a>."],
                            ['paragrafo' => "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."]
                        ]
                    ],
                    [
                        'domanda' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
                        'risposta' => [
                            ['paragrafo' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>."]
                        ]
                    ],
                    [
                        'domanda' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
                        'risposta' => [
                            ['paragrafo' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). "]
                        ]
                    ]
                ];
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
