<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Giorno 1 PHP</title>
</head>
<body>
    <div class="container">
        <h1>Data e ora di oggi :
        /* Stampare la data di oggi in italiano in modo dinamico. Es: Mercoledì, 16 dicembre 2020 */
        <?php
            date_default_timezone_set("CET");
            echo date("d-m-Y")."". date("H:i");
        ?>
        </h1>
 
        /*Crea l'array delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati  */
        <h2>Formazione Squadre Serie A</h2>
        <?php
        $serieA = [
                "Juventus" => ["Buffon", "Chiellini", "Bonucci", "De Ligt", "Danilo", "Cuadrado", "Arthur", "Rabiot", "Chiesa", "Dybala", "Ronaldo"],
                "Inter" => ["Handanovic", "De Vrij", "Bastoni", "Hakimi", "Perisic", "Barella", "Brozovic", "Vidal", "Eriksen", "Lukaku", "Martinez"],
                "Milan" => ["Donnarumma", "Kjaer", "Romagnoli", "Calabria", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"],
                "Roma" => ["Mirante", "Mancini", "Ibanez", "Karsdorp", "Spinazzola", "Veretout", "Pellegrini", "Mkhitaryan", "Pedro", "Dzeko", "Mayoral"],
                "Napoli" => ["Ospina", "Koulibaly", "Manolas", "Di Lorenzo", "Ghoulam", "Bakayoko", "Ruiz", "Politano", "Insigne", "Lozano", "Mertens"],
                "Atalanta" => ["Gollini", "Toloi", "Romero", "Hateboer", "Gosens", "De Roon", "Freuler", "Pessina", "Malinovskyi", "Muriel", "Zapata"],
                "Lazio" => ["Strakosha", "Acerbi", "Patric", "Lazzari", "Marusic", "Leiva", "Milinkovic", "Luis Alberto", "Correa", "Immobile", "Caicedo"],
                "Sassuolo" => ["Consigli", "Marlon", "Chiriches", "Muldur", "Kyriakopoulos", "Locatelli", "Bourabia", "Djuricic", "Berardi", "Caputo", "Defrel"],
                "Verona" => ["Silvestri", "Cetin", "Lovato", "Faraoni", "Dimarco", "Veloso", "Tameze", "Barak", "Zaccagni", "Salcedo", "Lasagna"],
                "Sampdoria" => ["Audero", "Yoshida", "Tonelli", "Bereszynski", "Augello", "Thorsby", "Ekdal", "Candreva", "Jankto", "Quagliarella", "Gabbiadini"],
                "Bologna" => ["Skorupski", "Danilo", "Tomiyasu", "Dijks", "De Silvestri", "Svanberg", "Schouten", "Orsolini", "Soriano", "Barrow", "Palacio"],
                "Udinese" => ["Musso", "Becao", "Samir", "Becao", "Molina", "De Paul", "Walace", "Makengo", "Pereyra", "Lasagna", "Okaka"],
                "Fiorentina" => ["Dragowski", "Milenkovic", "Caceres", "Biraghi", "Venuti", "Amrabat", "Castrovilli", "Bonaventura", "Ribery", "Kouame", "Vlahovic"],
                "Genoa" => ["Perin", "Goldaniga", "Masiello", "Zappacosta", "Criscito", "Badelj", "Sturaro", "Zajc", "Pandev", "Scamacca", "Shomurodov"],
                "Cagliari" => ["Cragno", "Klavan", "Godin", "Lykogiannis", "Zappa", "Nandez", "Marin", "Rog", "Joao Pedro", "Simeone", "Pavoletti"],
                "Spezia" => ["Zoet", "Erlic", "Ismajli", "Vignali", "Marchizza", "Maggiore", "Ricci", "Pobega", "Farias", "Galabinov", "Gyasi"],
                "Parma" => ["Sepe", "Iacoponi", "Bruno Alves", "Gagliolo", "Grassi", "Kucka", "Kurtic", "Hernani", "Karamoh", "Gervinho", "Cornelius"],
                "Crotone" => ["Cordaz", "Golemic", "Molina", "Luperto", "Pereira", "Vulic", "Benali", "Messias", "Molina", "Simy", "Ounas"],
                "Benevento" => ["Montipo", "Glik", "Caldirola", "Barba", "Foulon", "Hetemaj", "Schone", "Ionita", "Lapadula", "Caprari", "Insigne"]
            ];
            
            echo "<ul>";
            foreach ($serieA as $squadra => $formazione) {
                echo "<li><h3>$squadra</h3>";
                echo "<ul>";
                foreach ($formazione as $giocatore) {
                    echo "<li>$giocatore</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
        ?>
    
        /* Crea l'array delle partite e delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati */
        <h2>Partite Serie A e la loro formazione</h2>
        <?php
        $partiteserieA = [
                "Juventus - Inter" => ["Juventus" => ["Buffon", "Chiellini", "Bonucci", "De Ligt", "Danilo", "Cuadrado", "Arthur", "Rabiot", "Chiesa", "Dybala", "Ronaldo"], "Inter" => ["Handanovic", "De Vrij", "Bastoni", "Hakimi", "Perisic", "Barella", "Brozovic", "Vidal", "Eriksen", "Lukaku", "Martinez"]],
                "Milan - Roma" => ["Milan" => ["Donnarumma", "Kjaer", "Romagnoli", "Calabria", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"], "Roma" => ["Mirante", "Mancini", "Ibanez", "Karsdorp", "Spinazzola", "Veretout", "Pellegrini", "Mkhitaryan", "Pedro", "Dzeko", "Mayoral"]],
                "Napoli - Atalanta" => ["Napoli" => ["Ospina", "Koulibaly", "Manolas", "Di Lorenzo", "Ghoulam", "Bakayoko", "Ruiz", "Politano", "Insigne", "Lozano", "Mertens"], "Atalanta" => ["Gollini", "Toloi", "Romero", "Hateboer", "Gosens", "De Roon", "Freuler", "Pessina", "Malinovskyi", "Muriel", "Zapata"]],
                "Lazio - Sassuolo" => ["Lazio" => ["Strakosha", "Acerbi", "Patric", "Lazzari", "Marusic", "Leiva", "Milinkovic", "Luis Alberto", "Correa", "Immobile", "Caicedo"], "Sassuolo" => ["Consigli", "Marlon", "Chiriches", "Muldur", "Kyriakopoulos", "Locatelli", "Bourabia", "Djuricic", "Berardi", "Caputo", "Defrel"]],
                "Verona - Sampdoria" => ["Verona" => ["Silvestri", "Cetin", "Lovato", "Faraoni", "Dimarco", "Veloso", "Tameze", "Barak", "Zaccagni", "Salcedo", "Lasagna"], "Sampdoria" => ["Audero", "Yoshida", "Tonelli", "Bereszynski", "Augello", "Thorsby", "Ekdal", "Candreva", "Jankto", "Quagliarella", "Gabbiadini"]],
                "Bologna - Udinese" => ["Bologna" => ["Skorupski", "Danilo", "Tomiyasu", "Dijks", "De Silvestri", "Svanberg", "Schouten", "Orsolini", "Soriano", "Barrow", "Palacio"], "Udinese" => ["Musso", "Becao", "Samir", "Becao", "Molina", "De Paul", "Walace", "Makengo", "Pereyra", "Lasagna", "Okaka"]],
                "Fiorentina - Genoa" => ["Fiorentina" => ["Dragowski", "Milenkovic", "Caceres", "Biraghi", "Venuti", "Amrabat", "Castrovilli", "Bonaventura", "Ribery", "Kouame", "Vlahovic"], "Genoa" => ["Perin", "Goldaniga", "Masiello", "Zappacosta", "Criscito", "Badelj", "Sturaro", "Zajc", "Pandev", "Scamacca", "Shomurodov"]],
                "Cagliari - Spezia" => ["Cagliari" => ["Cragno", "Klavan", "Godin", "Lykogiannis", "Zappa", "Nandez", "Marin", "Rog", "Joao Pedro", "Simeone", "Pavoletti"], "Spezia" => ["Zoet", "Erlic", "Ismajli", "Vignali", "Marchizza", "Maggiore", "Ricci", "Pobega", "Farias", "Galabinov", "Gyasi"]],
                "Parma - Crotone" => ["Parma" => ["Sepe", "Iacoponi", "Bruno Alves", "Gagliolo", "Grassi", "Kucka", "Kurtic", "Hernani", "Karamoh", "Gervinho", "Cornelius"], "Crotone" => ["Cordaz", "Golemic", "Molina", "Luperto", "Pereira", "Vulic", "Benali", "Messias", "Molina", "Simy", "Ounas"]],
            ];
    
            echo "<ul>";
            foreach ($partiteserieA as $partita => $formazioni) {
                echo "<li><h3>$partita</h3>";
                echo "<ul>";
                foreach ($formazioni as $squadra => $formazione) {
                    echo "<li><h4>$squadra</h4>";
                    echo "<ul>";
                    foreach ($formazione as $giocatore) {
                        echo "<li>$giocatore</li>";
                    }
                    echo "</ul>";
                    echo "</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
            echo "</ul>";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>    
</body>
</html>