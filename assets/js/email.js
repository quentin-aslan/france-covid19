$('.errorEmail').hide();
$('.loadEmail').hide();
$('.okEmail').hide();
$('.loadDon').hide();
$(() => {
  $('.sendEmail').click((e) => {
    e.preventDefault();
    $('.loadEmail').show();
    $('.sendEmail').hide();




    let email = $('.emailInput').val();
    console.log(email);

    console.log('ok');
    $.get(`http://admin.quentin-aslan.site/email/${email}`, function (data) {
    }).done(function (res) {
      if (res == 'ok') {
        $('.okEmail').show();
        $('.loadEmail').hide();
        $('.errorEmail').hide();
      } else {
        $('.errorEmail').show();
        $('.errorEmail').html('Vous devez rentrer une adresse email valide.')
        $('.sendEmail').show();
        $('.loadEmail').hide();
      }
    })
    .fail(function () {
      $('.sendEmail').show();
      $('.loadEmail').hide();
      alert('Une erreur est survenu, veuillez appuyer une seconde fois sur le bouton "Envoyé');
    });



});

$('.donPaypal').click((e) => {
  $('.loadDon').show();
});

});

function isEmail(email) {
  return true;
}