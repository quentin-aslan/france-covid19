$('.errorEmail').hide();
$('.loadEmail').hide();
$('.okEmail').hide();
$('.loadDon').hide();
$(() => {


  $('#stopEmail').click((e) => {
      e.preventDefault();
        document.location.href="addEmail.php?email=none";
  });

  $('.sendEmail').click((e) => {
    e.preventDefault();
    $('.loadEmail').show();
    $('.sendEmail').hide();
    

    let page = $('.pageEmail').val();
    let email = $('.emailInput').val();
    $.get(`http://admin.quentin-aslan.site/email/${email}?page=${page}`, function (data) {
    }).done(function (res) {
      if (res == 'ok') {
        $('.okEmail').show();
        $('.loadEmail').hide();
        $('.errorEmail').hide();
        // On crée un cookie pour se rappeler qu'il à déja rentrer son adresse email !
        document.location.href="addEmail.php?email="+email;
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