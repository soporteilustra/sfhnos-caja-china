$('.carousel').carousel({
  interval: 2000,
  pause: ""
})

$('.link-scroll').click(function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     var pos = $(target).offset();
     $('body').animate({ scrollTop: pos.top}, 500);
})

$(document).find('form').each(function () {
     $(this).submit(function (e) {
          e.preventDefault();

          var empty = false;

          $(this).find('input, textarea').each(function () {
               if ( $.trim( $(this).val() ) == "" && $(this).attr('required') ) {
                    empty = true;
               }
          })

          if (empty) {
               alert('Campos vacíos, asegúrese de llenarlos correctamente.');
          } else {
               console.log($(this).serialize());
               $.ajax({
                    url: '../../controller/register.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function (res) {
                         if (res == 'success') {
                              alert('Datos enviados con éxito!');
                         } else {
                              alert('Tuvimos un problema. Recarge la página y vuelva a intentarlo');
                         }
                    }
               })
          }

     })
})
