<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date,</title>
</head>
<body>
    <?php
    /* Stampare la data di oggi in italiano in modo dinamico. Es: Mercoledì, 16 dicembre 2020 */
        $oggi = date("d-m-y");
        echo " <h2>Data di oggi: $oggi</h2>";
        
        /*Crea l'array delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati  */
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
        echo "<h2>Serie A</h2>";
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

        /* Crea l'array delle partite e delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati */
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

        echo"<h2>PARTITE SERIE A</h2>";
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
        
</body>
</html>