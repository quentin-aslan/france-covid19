$(() => {

    // Popup email
    console.log(Cookies.get());
        let emailCookie = Cookies.get('france-covid19-email');
        console.log(emailCookie);
        if(!emailCookie) {
            setTimeout(()=> {
                // $('#emailModal').modal('show');
            }, 5000);
        } 
    // --- DANS LE MONDE ----

    let date1 = new Date();
    let date2 = new Date('2020/3/31 12:00:00');
    let diff = dateDiff(date1, date2);
    let dateStr = date2.toLocaleDateString('fr-FR');

    $('#timerConfinement').html(`${diff.day} Jours, ${diff.hour} Heures, ${diff.min} Min`);

    // Nombre de mort dans le monde (API NON MIS A JOUR MAIS TOUJOURS DISPONIBLE)
    // $.ajax({
    //     url: 'https://coronavirus-tracker-api.herokuapp.com/v2/locations?country_code=FR',
    //     type: 'GET',
    //     dataType: 'json', // On désire recevoir du HTML
    //     success: function (json) { // code_html contient le HTML renvoyé
    //         json = json.locations[0].latest;
    //         console.log($('#deadWorld'));
    //         $('#recoveredCountry').html(json.recovered);
    //         $('#deadCountry').html(json.deaths);
    //         $('#casesCountry').html(json.confirmed);
    //     }
    // });


    // WORLD
    $.ajax({
        url: 'https://corona.lmao.ninja/all',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            $('#recoveredWorld').html(json.recovered);
            $('#deadWorld').html(json.deaths);
            $('#casesWorld').html(json.cases);

            // Mise date de mise à jours des informations
            let date = new Date(json.updated);
            console.log(date);
            let dateStr = date.toLocaleDateString('fr-FR');
            $('#update').html(dateStr);

        }
    });

    // FRANCE
    $.ajax({
        url: 'https://corona.lmao.ninja/countries/france',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            $('#recoveredCountry').html(json.recovered);
            $('#deadCountry').html(json.deaths);
            $('#casesCountry').html(json.cases);
        }
    });


    // $('#pvFrance').html('4 095'); // 19/03/20
    // $('#pvFrance').html('38 994'); // 22/03/2020
    $('#pvFrance').html('91 824'); // 23/03/2020
    

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