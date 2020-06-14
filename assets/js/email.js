$('.errorEmail').hide();
$('.loadEmail').hide();
$('.okEmail').hide();
$('.loadDon').hide();
$(() => {


  $('#stopEmail').click((e) => {
    e.preventDefault();
    saveEmail('none');
  });

  function saveEmail(email) {
    $.get(`addEmail.php?email=${email}`, function (data) {
    }).done(function (res) {
      console.log(res);
      if (res == '"ok"') {
        $('.okEmail').show();
        $('.loadEmail').hide();
        $('.errorEmail').hide();
        $('#emailModal').modal('hide');
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
  }

  $('.sendEmail').click((e) => {
    e.preventDefault();
    $('.loadEmail').show();
    $('.sendEmail').hide();


    let page = $('.pageEmail').val();
    let email = $('.emailInput').val();

    saveEmail(email);

  });

  $('.donPaypal').click((e) => {
    $('.loadDon').show();
  });

});

function isEmail(email) {
  return true;
}