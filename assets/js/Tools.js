function formatNumber(x)  {
    // let str = x.toString();
    // if(str[2]) str.splice(2,0,'.');
    return x;
}

function searchCountry(country) {
    $.ajax({
        url: 'https://corona.lmao.ninja/v2/countries/' + country,
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            $('#sendSearch').html('Rechercher');
            $('#sendSearch').removeClass('disabled');
            if (json.cases) {
                $('.countryName').html(country.replace("%20", " "));
                $('#deadCountryday').html(json.todayDeaths);
                $('#casesCountryDay').html(json.todayCases);
                $('#activeCountry').html(json.active);
                $('#criticalCountry').html(json.critical);
                $('#oneMillionCountry').html(json.casesPerOneMillion);
                $('#oneMillionDeathCountry').html(json.deathsPerOneMillion);

                $('#recoveredCountry').html(json.recovered);
                $('#deadCountry').html(json.deaths);
                $('#casesCountry').html(json.cases);


                let update = new Date(json.updated);
                updateHour = update.toLocaleTimeString(update);
                updateDate = update.toLocaleDateString('fr-FR');
    
                $('#updateTime').html(updateDate+' à '+updateHour);
                if(json.tests>0) $('#test').html(json.tests);
                else $('#test').html('X');
            }
            else {
                alert('Nous ne trouvons pas ce pays')
            }
        },
        error: function (json) {
            $('#sendSearch').html('Rechercher');
            $('#sendSearch').removeClass('disabled');
            alert('Une erreur est survenu ... (Vérifier le nom du pays)');
        }

    });
}

function searchWorld() {
    $.ajax({
        url: 'https://corona.lmao.ninja/v2/all',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            $('#recoveredWorld').html(json.recovered);
            $('#deadWorld').html(json.deaths);
            $('#casesWorld').html(json.cases);

            let update = new Date(json.updated);
            updateHour = update.toLocaleTimeString(update);
            updateDate = update.toLocaleDateString('fr-FR');

            $('#updateTimeWorld').html(updateDate+' à '+updateHour);
            $('#testWorld').html(formatNumber(json.tests));

        }
    });
}

function dateDiff(date1, date2){
    var diff = {}                           // Initialisation du retour
    var tmp = date2 - date1;
 
    tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
    diff.sec = tmp % 60;                    // Extraction du nombre de secondes
 
    tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
    diff.min = tmp % 60;                    // Extraction du nombre de minutes
 
    tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
    diff.hour = tmp % 24;                   // Extraction du nombre d'heures
     
    tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
    diff.day = tmp;
     
    return diff;
}