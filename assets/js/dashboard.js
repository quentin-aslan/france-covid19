$(() => {

    // Pour rechercher un autre pays

    const countryList = [
        {label:'Italie',value:'italy'},
        {label:'Arabie Saoudite',value:'Saudi Arabia'},
        {label:'états-unis',value:'USA'},
        {label:'espagne',value:'Spain'},
        {label:'Allemagne',value:'Germany'},
        {label:'Iran',value:'Iran'},
        {label:'France',value:'France'},
        {label:'Royaume-uni',value:'UK'},
        {label:'Suisse',value:'Switzerland'},
        {label:'Pays-bas',value:'Netherlands'},
        {label:'corée du sud',value:'S.Korea'},
        {label:'belgique',value:'Belgium'},
        {label:'Autriche',value:'Austria'},
        {label:'Turquie',value:'Turkey'},
        {label:'Portugal',value:'Portugal'},
        {label:'Canada',value:'Canada'},
        {label:'Norvège',value:'Norway'},
        {label:'Australie',value:'Australia'},
        {label:'Brésil',value:'Brazil'},
        {label:'Israël',value:'Israel'},
        {label:'Suède',value:'Sweden'},
        {label:'République tchèque',value:'Czechia'},
        {label:'Malaisie',value:'Malaysia'},
        {label:'Danemark',value:'Denmark'},
        {label:'Irlande',value:'Ireland'},
        {label:'Equateur',value:'Ecuador'},
        {label:'Chili',value:'Chile'},
        {label:'Luxembourg',value:'Luxembourg'},
        {label:'japon',value:'japan'},
        {label:'Pologne',value:'Poland'},
        {label:'Roumanie',value:'Romania'},
        {label:'Pakistan',value:'Pakistan'},
        {label:'Russie',value:'Russia'},
        {label:'Thailand',value:'Thailand'},
        {label:'Afrique du Sud',value:'South Africa'},
        {label:'finlande',value:'Finland'},
        {label:'Indonésie',value:'Indonesia'},
        {label:'Philippines',value:'Philippines'},
        {label:'Grèce',value:'Greece'},
        {label:'Islande',value:'Iceland'},
        {label:'Inde',value:'India'},
        {label:'Singapour',value:'Singapore'},
        {label:'Panama',value:'Panama'},
        {label:'République dominicaine',value:'Dominican Republic'},
        {label:'Mexique',value:'Mexico'},
        {label:'Argentine',value:'Argentina'},
        {label:'Slovénie',value:'Slovenia'},
        {label:'Serbie',value:'Serbia'},
        {label:'Estonie',value:'Estonia'},
        {label:'Perou',value:'Peru'},
        {label:'Croatie',value:'Croatia'},
        {label:'Qatar',value:'Qatar'},
        {label:'Hong Kong',value:'Hong Kong'},
        {label:'Colombie',value:'Colombia'},
        {label:'Egypte',value:'Egypt'},
        {label:'IraK',value:'Iraq'},
        {label:'bahreïn',value:'Bahrain'},
        {label:'Nouvelle-zélande',value:'New Zealand'},
        {label:'liban',value:'lebanon'},
        {label:'Algérie',value:'Algeria'},
        {label:'Maroc',value:'Morocco'},
        {label:'Hongrie',value:'Hungary'},
        {label:'Bulgarie',value:'Bulgaria'},
        {label:'Ukraine',value:'Ukraine'},
        {label:'Slovaquie',value:'Slovakia'},
        {label:'Uruguay',value:'Uruguay'},
        {label:'Andorre',value:'Andorra'}
        ,{label:'Costa rica',value:'Costa rica'},
        {label:'Bonie',value:'Bosnia'},
        {label:'Macedoine',value:'Macedonia'},
        {label:'Jordanie',value:'Jordania'},
        {label:'Tunisie',value:'Tunisia'},
        {label:'Albanie',value:'Albania'},
        {label:'Burkina faso',value:'Burkina Faso'},
        {label:'Vietnam',value:'Vietnam'},
        {label:'Chypre',value:'Cyprus'},
        {label:'Malte',value:'Malta'},
        {label:'île de la Réunion',value:'Réunion'},
        {label:'Ghana',value:'Ghana'},
        {label:'Senegal',value:'Senegal'},
        {label:'Venezuela',value:'Venezuela'},
        {label:'Sri lanka',value:'Sri lanka'},
        {label:'Afghanistan',value:'Afghanistan'},
        {label:'Mauritanie',value:'Mauritius'},
        {label:'Côte d\'ivoire',value:'Ivory Coast'},
        {label:'Guadeloupe',value:'Guadeloupe'},
        {label:'Honduras',value:'Honduras'},
        {label:'Martinique',value:'Martinique'},
        {label:'Cameroun',value:'Cameroon'},
        {label:'Monténégro',value:'Montenegro'},
        {label:'Nigeria',value:'Nigeria'},
        {label:'Cuba',value:'Cuba'},
        {label:'Bolivie',value:'Bolivia'},
        {label:'RDC',value:'the Democratic Republic of the Congo'},
        {label:'Gibraltar',value:'Gibraltar'},
        {label:'Rwanda',value:'Rwanda'},
        {label:'Mayotte',value:'Mayotte'},
        {label:'Bangladesh',value:'Bangladesh'},
        {label:'Monaco',value:'Monaco'},
        {label:'Kenya',value:'Kenya'},
        {label:'Guatemala',value:'Guatemala'},
        {label:'Île de man',value:'Isle of Man'},
        {label:'Jamaïque',value:'Jamaica'},
        {label:'Zambie',value:'Zambia'},
        {label:'Madagascar',value:'Madagascar'},
        {label:'Togo',value:'Togo'},
        {label:'Ouganda',value:'Uganda'},
        {label:'Mali',value:'Mali'},
        {label:'Ethiopie',value:'Ethiopia'},
        {label:'Tanzanie',value:'Tanzania'},
        {label:'Guinée équatoriale',value:'Equatorial Guinea'},
        {label:'Mongolie',value:'Mongolia'},
        {label:'Niger',value:'Niger'},
        {label:'Guinée',value:'Guinea'},
        {label:'Haïti',value:'Haiti'},
        {label:'Mozambique',value:'Mozambique'},
        {label:'Namibie',value:'Namibia'},
        {label:'Gabon',value:'Gabon'},
        {label:'Seychelles',value:'Seychelles'},
        {label:'Bénin',value:'Benin'},
        {label:'Cap-Vert',value:'Cabo Verde'},
        {label:'Guyane',value:'Guyana'}
        ,{label:'Soudan',value:'Sudan'},
        {label:'Népal',value:'Nepal'},
        {label:'Mauritanie',value:'Mauritania'},
        {label:'Syrie',value:'Syrian Arab Republic'},
        {label:'Nicaragua',value:'Nicaragua'},
        {label:'Angola',value:'Angola'},
        {label:'Congo',value:'Congo'},
        {label:'Gambie',value:'Gambia'},
        {label:'centreafrique',value:'Central African Republic'},
        {label:'Tchad',value:'Chad'},
        {label:'Libéria',value:'Liberia'},
        {label:'Somalie',value:'Somalia'},
        {label:'Belize',value:'Belize'},
        {label:'Guinée-Bissau',value:'Guinea-Bissau'},
        {label:'Libye',value:'Libyan Arab Jamahiriya'},
        {label:' Papouasie-Nouvelle-Guinée',value:'Papua New Guinea'},
        {label:'Chine',value:'China'} 
    ];
    
    $('#countrySearch').autocomplete({source:countryList,minLength: 2});

    $('#sendSearch').click((e) => {
        e.preventDefault();
        let country = $('#countrySearch').val();
        if(country) document.location.href = "statsSearch.php#country=" + country;
        else alert('Vous devez rentrer un nom de pays valide');
    });

    // --- DANS LE MONDE ----

    let date1 = new Date();
    let date2 = new Date('2020/05/11 00:00:00');
    let diff = dateDiff(date1, date2);
    let dateStr = date2.toLocaleDateString('fr-FR');
    $('#timerConfinement').html(`${diff.day} Jours, ${diff.hour} Heures, ${diff.min} Min, ${diff.sec} Secondes`);

    setInterval(() => {
        date1 = new Date();
        date2 = new Date('2020/05/11 00:00:00');
        diff = dateDiff(date1, date2);
        dateStr = date2.toLocaleDateString('fr-FR');
        $('#timerConfinement').html(`${diff.day} Jours, ${diff.hour} Heures, ${diff.min} Min, ${diff.sec} Secondes`);
    }, 1000);

    // EN ATTENDANT l'ACTUALISATION
    // $('#recoveredCountry').html('4948');
    // $('#deadCountry').html('1331');
    // $('#casesCountry').html('25230');


    // WORLD
    searchWorld();

    searchCountry('France');

    // Nombre de mort france (API NE NODE PAS LE NOMBREZ DE GUERIS)
    // $.ajax({
    //     url: 'https://coronavirus-tracker-api.herokuapp.com/v2/locations?country_code=FR',
    //     type: 'GET',
    //     dataType: 'json', // On désire recevoir du HTML
    //     success: function (json) { // code_html contient le HTML renvoyé
    //         json = json.latest;
    //         // $('#recoveredCountry').html(json.recovered);
    //         $('#deadCountry').html(json.deaths);
    //         $('#casesCountry').html(json.confirmed);
    //     }
    // });

    // $.ajax({
    //     url: 'https://coronavirus-tracker-api.herokuapp.com/v2/latest',
    //     type: 'GET',
    //     dataType: 'json', // On désire recevoir du HTML
    //     success: function (json) { // code_html contient le HTML renvoyé
    //         // $('#recoveredWorld').html(json.recovered);
    //         $('#deadWorld').html(json.latest.deaths);
    //         $('#casesWorld').html(json.latest.confirmed);

    //         // Mise date de mise à jours des informations
    //         // let date = new Date(json.updated);
    //         // console.log(json);
    //         // let dateStr = date.toLocaleDateString('fr-FR');
    //         // $('#update').html(dateStr);

    //     }
    // });
    
    // $('#pvFrance').html('4 095'); // 19/03/20
    // $('#pvFrance').html('38 994'); // 22/03/2020
    // $('#pvFrance').html('91 824'); // 23/03/2020
    // $('#pvFrance').html('110 000'); // 24/03/2020
    // $('#pvFrance').html('225 000');
    // $('#pvFrance').html('359 000'); 
    $('#pvFrance').html('530.000');

    

});