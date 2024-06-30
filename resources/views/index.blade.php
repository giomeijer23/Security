<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>

<body>
    {{-- Navigation bar --}}
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a
            href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20230720.pdf">Onderwijs-
            en Examenregeling</a>
        <a
            href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pd">De
            uitvoeringsregelingen</a>
        <a href="https://learn.hz.nl/my/">learn.hz</a>
        <a href="https://osiris-saml.hosted.hz.nl/osirissaml/saml2/acs/osiris-student">Studievoortgang</a>
        <a href="https://github.com/HZ-HBO-ICT">Github</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <header>
        <nav>
            <div class='indexbanner'>
                <div class="indexnavbar">
                    <img src="../../image/gm.jpeg" class="logo">
                    <ul>
                    <li><a href="/welcome">Home</a></li>
                    <li><a href="/profileFacts">Profile</a></li>
                    <li><a href="/dashboardFacts">Dashboard</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="home">
        <img src="../../image/IMG_2330.jpg" alt="" class="home-img">
        <h1>Gio Meijer</h1>
        <h4>VENI VIDI VICI</h4>
        <h4>Ik heb ICT gekozen omdat ik van mijn vrienden heb gehoord dat ICT een leuke studie is waarbij je vooral
            met projecten meebezig bent in plaats van toetsen.
            <br> Ik ben juist goed in projecten want ik kan mijn creativiteit gebruiken. Ik wou ook zelfs iets nieuws
            leren waar bij ik geen enkele kennis van heb.
            Dus zocht ik naar uitdaging.
            <br> Een andere reden is dat ICT ook veel toekomst voor je biedt dus kan ik
            bakken met geld verdienen. Met dat geld ga ik een hele mooie Bugatti kopen.
            <br> Een andere reden is dat in nu zelfstandig woont. Hierbij krijg ik van duo 440 euro in plaats van 130
            euro ofzo.
        </h4>
        <div class='icon'>
            <ol>
                <a class='social-icon' href='https://www.instagram.com/gio_meijer/' target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a class='social-icon' href='https://t.snapchat.com/9PAQtyp4' target="blank">
                    <ion-icon name="logo-snapchat"></ion-icon>
                </a>
                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
                </script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
                </script>
            </ol>
        </div>
    </div>
    <script src="build/assets/asidemenu.js"></script>
</body>

</html>
