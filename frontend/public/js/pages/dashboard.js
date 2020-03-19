$(() => {

    // --- DANS LE MONDE ----

    let date1 = new Date();
    let date2 = new Date('2020/3/31 12:00:00');
    let diff = dateDiff(date1, date2);
    let dateStr = date2.toLocaleDateString('fr-FR');

    $('#timerConfinement').html(`${diff.day} Jours, ${diff.hour} Heures, ${diff.min} Min`);

    // Nombre de mort dans le monde
    $.ajax({
        url: 'https://coronavirus-tracker-api.herokuapp.com/v2/locations?country_code=FR',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            json = json.locations[0].latest;
            console.log($('#deadWorld'));
            $('#recoveredCountry').html(json.recovered);
            $('#deadCountry').html(json.deaths);
            $('#casesCountry').html(json.confirmed);
        }
    });

    // Nombre de mort dans le monde
    $.ajax({
        url: 'https://coronavirus-tracker-api.herokuapp.com/v2/latest',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            json = json.latest;
            console.log($('#deadWorld'));
            $('#recoveredWorld').html(json.recovered);
            $('#deadWorld').html(json.deaths);
            $('#casesWorld').html(json.confirmed);
        }
    });

    $('#pvFrance').html('4 095'); // 19/03/20

})

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