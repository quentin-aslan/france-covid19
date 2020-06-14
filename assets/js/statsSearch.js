$(() => {
    $('#moreStats').hide();

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

    $('#countrySearch').autocomplete({ source: countryList, minLength: 2 });

    function translateCountry(country) {
        let tr = countryList.find(e => e.label.toLowerCase() == country.toLowerCase());
        if (tr) return tr.value;
        else return country;
    }

    $('#sendSearch').click((e) => {
        e.preventDefault();
        $('#sendSearch').html('Chargenemnt ...');
        $('#sendSearch').addClass('disabled');
        let country = $('#countrySearch').val();
        document.location.href = "#country=" + country;

        // On essaye de traduire le pays si il est écrit en français et si il éxiste
        country = translateCountry(country);

        // On affiche les stats du pays recherché
        searchCountry(country);
    });

    function getUrlCountry() {
        if (window.location.hash) {
            let ancre = window.location.hash.replace('#', '');
            let country = ancre.split('=')[1];
            if (country) {
                country = translateCountry(country);
                searchCountry(country);
            }

        }
        return false;
    }

    // Si lors du chargement un pays est déja dans l'url alors on affiche les stats de celui-ci
    getUrlCountry();

    // Pour afficher les stats détaillé d'un pays
    $('#sendMoreStats').click((e) => {
        $('#sendMoreStats').fadeOut(200, () => {
            $('#moreStats').fadeIn(200);
        });
    });

    // function listAllCountry() {
    //     let a = $('<ul></ul>');
    //     $.ajax({
    //         url: 'https://corona.lmao.ninja/countries',
    //         type: 'GET',
    //         dataType: 'json', // On désire recevoir du HTML
    //         success: function (json) { // code_html contient le HTML renvoyé
    //             json.forEach(e => {
    //                 let b = $('<li>'+e.country+'</li>');
    //                 a.append(b);
    //             });
    //             $('body').append(a);
    //         },
    //         error: function (json) {
    //             alert('Une erreur est survenu ... (Vérifier le nom du pays)');
    //         }

    //     });

    // }

    // listAllCountry();


});