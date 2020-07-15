$(window).on('load', function() {
  var
    preFunc = null,
    preInput = '',
    input = '',
    ajaxSerch = function(input) {
      $.ajax({
        url: "api/serch",
        type: "GET",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: ("keyword=" + input),
        // success:function(data){
        //   alert(data);
        // },error:function(){ 
        //     alert("error!!!!");
        // }
      }).then(
        function ($books){
          var books = $books;
          // console.log(books);

          $.each(books, function(index, elem){
            $('<li></li>').append(elem.title).appendTo('#book_list');
          });
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

