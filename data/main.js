
$('#submit').on('click', function () {
    var input = $('#id').val();
    $.ajax({
      url: '/ajax.php',
      data: {
        id: input
      },
      method: 'POST'
  }).done(function(kakayata_peremenaya) {
    var jsoned = JSON.parse(kakayata_peremenaya);
    console.log(jsoned);
    $('#result').html(jsoned.name + ' ' + jsoned.email);
    console.log(kakayata_peremenaya)
  })
});













// $('#submit').on('click', function() {
//   var superperemennaya = $('#id').val();
//
//   $.ajax({
//     url: '/ajax.php',
//     data: {
//       id: superperemennaya
//     },
//     dataType: 'json'
//   }).done(function(resultat) {
//     $('#result').html(resultat.name + ' ' + resultat.email)
//   })
//
// });