<!DOCTYPE html>
<html>
<head>
    <title>Mintha Theater <?php echo $title ?></title>
    <meta name="keywords" content="Mintha Theater Dance Myanmar">
    <META name="verify-v1" content="7vbKx/fNEbNRikGfl0FQ5NdVv+BKGUx2NFK1VPzsbHQ="/>
    <link href="styles/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="styles/galleria.classic.css" media="screen" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/galleria-1.2.6.min.js"></script>
    <script type="text/javascript" src="scripts/galleria.classic.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>


    <script language="JavaScript" type="text/javascript">
        function setCookie(c_name, value, expiredays) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + expiredays);
            document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate);
        }

        function getCookie(c_name) {
            if (document.cookie.length > 0) {
                c_start = document.cookie.indexOf(c_name + "=")
                if (c_start != -1) {
                    c_start = c_start + c_name.length + 1
                    c_end = document.cookie.indexOf(";", c_start)
                    if (c_end == -1) c_end = document.cookie.length
                    return unescape(document.cookie.substring(c_start, c_end))
                }
            }
            return 1
        }

        function setLang(num, sl, bd) {
            var header, footer, info;
            document.getElementById("a" + parseInt(num)).blur()
            setCookie('lang', num, '100');
            for (i = 1; i < 6; i++) {
                identity = document.getElementById("a" + parseInt(i));
                identity.className = bd;
            }
            identity = document.getElementById("a" + parseInt(num));
            identity.className = sl;
//graphics done - start text
            if (num == 1) {
                header = "The Mintha Theater is dedicated to classical Myanmar dance.  <br>Performances nightly 7 days a week at 8:30 PM.";
                footer = "<font size=\"+1\">58th Street</font> between 30th and 29th <br> (new address, east of the moat)<br>Mandalay, Myanmar<br>TEL:	09-6803607";
                info = "The Mintha Theater performs a rotating repertoire of classical Myanmar dance nightly at 8:30 PM. Shows are an hour long and composed of a series of short dance pieces in lavish traditional costume. Featuring students and faculty from the Inwa School of Performing Arts with a live classical Myanmar saing waing orchestra. The dance pieces are beautifully choreographed to illustrate the wide range of the court and folk dance forms that are native to Myanmar. The program changes nightly and spans more than 12 distinct dances, some dating from the days of Bagan.<br><br>Performances nightly 7 days a week at 8:30 PM.<br><br>Ticket Price: 14,000 kyats<br><br>Contact the theater for group rates and special performances.";
            }
            else if (num == 2) {
                header = "Le Mintha Theater est d&#233;di&#233; &#224; la danse de Myanmar classique. <br>Les performances ont lieu chaque jour de la semaine &#224; 20:30 h.";
                footer = "<font size=\"+1\">58&#232;me Rue</font> entre 30&#232;me et 29&#232;me <br>(nouvelle adresse , &agrave; l'est du foss&eacute;) <br>Mandalay, Myanmar<br>TEL: 09-6803607";
                info = "Le Mintha Theater mets en scene un r&#233;pertoire changeant du danse de Myanmar classique chaque soir &#224; 20:30h. Les spectacles durent une heure et se composent d'un feuilleton des morceaux de danses courts dans des costumes traditionnels et color&#233;s. Le groupe est compos&#233; de 7 danseurs et 8 musiciens de gamelan sous la direction de U Ohn Maung. Les morceaux de danse sont admirablement chor&#233;graphi&#233;s pour illustrer la grande vari&#233;t&#233; des danses de court et folkloriques qui sont typiques pour Myanmar. Le programme est &#233;chang&#233; chaque soir et est compos&#233; de plus que 12 danses distinctes, dont quelques-uns datent du temps de Bagan.<br><br>Les performances chaque soir&#233;e &#225; 20:30 h.<br><br>Prix : 14,000 kyats<br><br>Veuillez contacter le th&#233;&#224;tre pour des taux de groupe et des performances sp&#233;ciales, s.v.p. ";
            }
            else if (num == 3) {
                header = "Das Mintha Theater ist klassischem Myanmar-Tanz gewidmet. <br>Auff&#252;hrungen t&#228;glich um 20:30 Uhr";
                footer = "<font size=\"+1\"> 58. Strasse</font> zwischen 30. und 29. <br>(neue Adresse , &ouml;stlich des Grabens) <br>Mandalay, Myanmar <br>TEL: 09-6803607";
                info = "Das Mintha Theater f&#252;hrt t&#228;glich um 20:30 Uhr klassische Myanmar-T&#228;nze aus seinem wechselnden Reperoire auf. Auff&#252;hrungen dauern eine Stunde und bestehen aus einer Reihe kurzer T&#228;nze in farbenpr&#228;chtigen traditionellen Kost&#252;men. Die Truppe besteht aus 7 T&#228;nzern und 8 gamelan-Musikern unter der Leitung von U Ohn Maung. Die Tanzst&#252;cke sind wundersch&#246;n choreographiert und illustrieren die Vielfalt der einheimischen h&#246;fischen und Volkst&#228;nze. Das Programm wechselt t&#228;glich und beinhaltet mehr als 12 verschiedene T&#228;nze, einige datierend aus der Pagan-Zeit.<br><br>Auff&#252;hrungen t&#228;glich um 20:30 Uhr<br><br>Eintritt: 14,000 kyat<br><br>F&#252;r Gruppenpreise und spezielle Auff&#252;hrungen kontaktieren Sie bitte das Theater.";
            }
            else if (num == 4) {
                header = "Il Mintha Theater &#232; consacrato al ballo di Myanmar classico. <br>Le prestazioni ogni sera 7 giorni una settimana a 8:30 PM.";
                footer = "<font size=\"+1\">La Strada 58</font> tra 30 e 29 <br>(nuovo indirizzo , ad est del fossato) <br>Mandalay, Myanmar<br>TEL: 09-6803607";
                info = "Il Mintha Theater esegue un repertorio in rotazione di ballo di Myanmar classico ogni sera alle 8:30 PM. Ogni mostre sono una hora ed e composta di una serie di pezzi di ballo brevi nei costumi prodigi tradizionali. La troupe composta di 7 ballerini e 8 musicisti al modo di gamelan sotto la regia di U Ohn Maung. La coreografia di tutti i pezzi di ballo e bellamente preparata per illustrare la vasta gamma di forme di ballo folklorico chesono indigeno a Myanmar. Il programma cambia ogni sera ed attraversa pi di 12 balli distinti; alcuni anche sono della epoca di Bagan. <br><br>Le prestazioni ogni sera, per tutta la settimana alle 8:30 PM. <br><br>Il Prezzo di biglietto: 14,000 kyats<br><br>Contattare il teatro per sapere i prezzi ribassati di gruppo e le prestazioni speciali."
            }
            else if (num == 5) {
                header = "El Mintha Theater se dedica al baile cl&#225;sico de Myanmar. <br>Ofrece funciones nocturnas 7 d&#237;as la semana a las 8:30p.m.";
                footer = "58th Street entre las calles 30 y 29<br> (nueva direcci&oacute;n , al este de la fosa) <br>Mandalay, Myanmar<br>TEL:  09-6803607";
                info = "El Mintha Theater ofrece un repertorio rotativo de baile cl&#225;sico de Myanmar todas las noches a las 8:30 p.m. Las funciones duran una hora y consisten en una serie de bailes cortos; los bailarines usan fastuosos disfraces tradicionales. La compa&#241;&#237;a est&#225; compuesta de 7 bailarines y 8 m&#250;sicos estilo gamelan dirigidos por Ohn U Maung. Los bailes tienen una hermosa coreografia para ilustrar la gran variedad de danzas de corte y populares nativas de Myanmar. El programa cambia cada noche y abarca m&#225;s de 12 diferentes bailes, algunos de los d&#237;as datan de los días de Bagan. <br><br>Funciones nocturnas 7 d&#237;as a la semana a las 8:30 p.m. <br><br>Precio de entrada: 14,000 kyats<br><br>Comuníquese con las oficinas del teatro para obtener información sobre precios para grupos y funciones especiales. "
            }
            document.getElementById('blurb1').innerHTML = header;
            document.getElementById('blurb2').innerHTML = footer;
            document.getElementById('info_blurb').innerHTML = info;
        }

        function setLangCookie() {
            var lang;
            lang = getCookie('lang');
            setLang(lang, 'selected', 'borderit');
        }
        window.onload = setLangCookie;
    </script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
        _uacct = "UA-1102291-3";
        urchinTracker();
    </script>

</head>
<body class="<?php echo $title ?>" id="<?php echo $title ?>_page">

<div id="wrapper">

    <div id="logo" class="gradient">

        <div id="featured_in">
            Featured by
            <br/><img src="asetts/LonelyPlanet-170.png" alt="Lonely Planet"/>
        </div>

        <img src="asetts/logo1.png">

        <p id="blurb1">
            The Mintha Theater is dedicated to classical Myanmar dance.
            <br>Performances nightly 7 days a week at 8:30 PM.
        </p>


        <ul class="nav">
            <li><a class="link" href="index.php">-Home-</a></li>
            <li><a class="link" href="info.php">Info</a></li>
            <li><a class="link" href="gallery.php">Gallery</a></li>
            <li><a class="link" href="dances.php">Dances</a></li>
            <li><a class="link" href="reviews.php">Reviews</a></li>
            <li><a class="link highlighted last" href="film.php">Film</a></li>
        </ul>

        <div style="clear: both"></div>


        <div id="flags">
                <a class="borderit" id="a1" href="#" onclick="setLang('1','selected','borderit');"><img
                        src="asetts/United-Kingdom_flag.gif" width="30" alt="en"></a><br>
                <a class="borderit" id="a2" href="#" onclick="setLang('2','selected','borderit');"><img
                        src="asetts/France_flag.gif" width="30" height="20" alt="fr"></a><br>
                <a class="borderit" id="a3" href="#" onclick="setLang('3','selected','borderit');"><img
                        src="asetts/Germany_flag.gif" width="30" height="20" alt="ge"></a><br>
                <a class="borderit" id="a4" href="#" onclick="setLang('4','selected','borderit');"><img
                        src="asetts/Italy_flag.gif" width="30" height="20" alt="it"></a><br>
                <a class="borderit" id="a5" href="#" onclick="setLang('5','selected','borderit');"><img
                        src="asetts/Spain_flag.gif" width="30" height="20" alt="it"></a>
            </div>
    </div>


    <div class="opening-banner">
        Open for the 2016-2017 Season
        <div class="small">
            Group discounts available
            <br/>Myanmar phone: 09 6803607<span style="font-size: 1.2em; color: white;">/</span> 09 45897 4512
        </div>
     </div>