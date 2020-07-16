$(window).on('load', function() {
  var
    preFunc = null,
    preInput = '',
    input = ''

  function builtHTML(data) {
    var html = `
      <li>${data.title}</li>
    `
    $('#book_list').append(html);
  };


  function ajaxSerch(input) {
    $.ajax({
      url: "api/serch",
      type: "GET",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: ("keyword=" + input),
    })
      .done(function($books){
        $('#book_list').empty();
        var data = $books
        console.log(data);
        $('#book_list').empty();
        if (data.length !== 0) {
          data.forEach(function(data) { //dataは配列型に格納されているのでEach文で回す
            builtHTML(data)
          });
        } else {
          $('#book_list').html('該当する本はありません');
        }
      });
  };
  
  $('#inc_serch').on('keyup', function(){
    input = $.trim($('#inc_serch').val());
    console.log(input);
    if(preInput !== input) {
      clearTimeout(preFunc);
      preFunc = setTimeout(ajaxSerch(input), 500);
    }
    preInput = input;
    // console.log(preInput);
  });
});

