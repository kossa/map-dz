
(function($){
  var tpl = $('#alphabet').html();

  $.get('js/data/alphabet.json', function(data) {
    var ii = 0;
    for ( var code in data ){
      data[code].code = code; // Not Goood :(
      $('#alphabet').append(Mustache.render(tpl, data[code]));
    }
  }, 'json');


  $('#alphabet').removeClass('hidden')
                .find('li:first').remove();
})(jQuery);

