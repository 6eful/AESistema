$(document).ready(function() {
  // var input = document.querySelector('input[name="senha"]');
  // var view = document.querySelector('span.input-view');
  // view.addEventListener('mousedown', function () {
  //   var inputValor = $('input[name="senha"]').val();
  //   if(input != '') {
  //     $("span.input-view i").removeClass("fa-eye");
  //     $("span.input-view i").addClass("fa-eye-slash");
  //     input.type = input.type == 'text' ? 'password' : 'text';
  //     // console.log(inputValor);
  //   }
  // }, false);

  // $('span.input-view').mousedown(function(){
    // var inputValor = $('input[name="senha"]').val();
    // if(inputValor != '') {
      // $("span.input-view i").removeClass("fa-eye");
      // $("span.input-view i").addClass("fa-eye-slash");
      // input.type = input.type == 'text' ? 'password' : 'text';
    // }
    // console.log("inputValor");
  // });

  $('nav ul.components > li > a').hover(function(){
      $(this).css("border-left", "5px solid #F34219");
    }, function(){
      $(this).css("border-left", "1px solid #000");
    });

});
