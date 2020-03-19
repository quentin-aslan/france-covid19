$('#errorEmail').hide();
$('#loadEmail').hide();
$('#okEmail').hide();
$('#loadDon').hide();
$(() => {
    $('#sendEmail').click((e) => {
      e.preventDefault();
        $('#loadEmail').show();
        $('#sendEmail').hide();
        
        

        
        let email = $('#emailInput').val();
        console.log(email);
        
        if(isEmail(email)) {
          console.log('ok');
            $.get(`http://admin.quentin-aslan.site/email/${email}`, function( data ) {
              }).done(function() {
                $('#okEmail').show();
                $('#loadEmail').hide();
                $('#errorEmail').hide();
              })
              .fail(function() {
                $('#sendEmail').show();
                $('#loadEmail').hide();
                alert('Une erreur est survenu, veuillez appuyer une seconde fois sur le bouton "Envoyé');
              });

        } else {
          console.log('ko');
            $('#errorEmail').show();
            $('#errorEmail').html('Vous devez rentrer une email valide.')
            $('#sendEmail').show();
            $('#loadEmail').hide();
        }

    });

    $('#donPaypal').click((e) => {
      $('#loadDon').show();
    });

});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }