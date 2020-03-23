$(() => {
    // FRANCE
    $.ajax({
        url: 'https://corona.lmao.ninja/countries/france',
        type: 'GET',
        dataType: 'json', // On désire recevoir du HTML
        success: function (json) { // code_html contient le HTML renvoyé
            $('#deadCountryday').html(json.todayDeaths);
            $('#casesCountryDay').html(json.todayCases);
            $('#activeCountry').html(json.active);
            $('#criticalCountry').html(json.critical);
            $('#oneMillionCountry').html(json.casesPerOneMillion);

            $('#recoveredCountry').html(json.recovered);
            $('#deadCountry').html(json.deaths);
            $('#casesCountry').html(json.cases);
        }
    });
});