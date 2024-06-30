<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>

<body>
{{-- Navigation bar --}}
<header>
    <nav>
        <div class='banner'>
            <nav class="navbar" style="background-color: transparent;">
                <img src="../../image/gm.jpeg" class="logo">
                <ul>
                    <li><a href="/index">Home</a></li>
                    <li><a href="/profileFacts">Profile</a></li>
                    <li><a href="/dashboardFacts">Dashboard</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <article>
        <h1>Mijn profiel</h1>
        <img src="../../image/diploma.jpg" alt="" class="box-img">
            <div class="row">
                <div class="column">
                    <table>
                    <tr>
                        <td>
                            <h2>Persoonlijke informatie</h2>
                            <p>Mijn naam is Gio en ik ben 18 jaar oud. Mijn hobby is gymmen. Ik gym 6 keer per week. Dus
                                ik
                                skip
                                geen benen! Ik ben hiermee gedisciplineerd bezig want ik let ook op mijn slaap en
                                voeding.
                                Ik woonde
                                oorspronkelijk in Hoofddorp, maar ben pas eind augustus in Vlissingen verhuisd. Mijn
                                ouders
                                hebben daar een tweede huis. Dus woon ik nu daar zelfstandig.
                            </p>
                        </td>
                </div>
            </div>
            <div class="column">
                <td>
                    <h2>Na het voltooien van de opleiding</h2>
                    <p>Ik weet nog niet wat ik na de opleiding wil gaan doen. Maar ik heb wel een idee en dat is
                        website's maken want ik dacht aan veel website's alvast voorprogrammeren. Hierdoor hoef ik maar
                        kleine
                        dingen voor
                        de klant aan te passen. Waardoor ik vrij weinig hoef te doen. Ik wil dan 20 jaar lang werken en
                        dan op
                        mijn
                        40ste
                        al pensioen gaan. Over 4 jaar hoop ik dat mijn capaciteit over programmer veel groter is
                        geworden.</p>
                </td>
            </div>
            </tr>
            <div class="column">
                <tr>
                    <td>
                        <h2>Persoonlijke swot-analyse</h2>
                        <p>Sterkte punten - Ik leer snel.
                            <br>Zwakte punten - Dat ik nog vrij weinig weet over computers. Ik heb ook last van mijn
                            ogen.
                            <br>Welke kansen zie ik - Dat ICT veel toekomst voor je biedt. Ook kan ik mijn capaciteit
                            vergroten.
                            <br>Welke risico zie ik - Dat ik veel moet leren want ik weet letterlijk niks van
                            programmer.
                        </p>
                    </td>
            </div>
            </div>
            <td>
                <h2>Mijn karaktereigenschappen</h2>
                <p>Gedisciplineerd
                    <br>Nieuwsgierig
                    <br>Sportief
                    <br>Sociaal
                    <br>Sterk
                    <br>Zelfstandig
                </p>
            </td>
            </tr>
        </table>
    </article>
</main>
</body>

</html>
