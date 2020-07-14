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
        data: ("keyword=" + input)
        // success:function(data){
        //   alert(data);
        // },error:function(){ 
        //     alert("error!!!!");
        // }
      });
    };
  
  // console.log(ajaxSerch("kai"));
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

