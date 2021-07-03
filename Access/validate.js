$(init);
function init(){
  Validate_Form();

  $('#btnLogin').on('click', function(){
    $('#form_login').submit();
  }); 
}
function Validate_Form(){
    $("#form_login").validate({
        rules:{
            'email':{required:true,
              email:true,
              minlength:3,
              maxlength:100
            },
            'passwd':{
              required:true,
              minlength:3,
              maxlength:32
            }
        },
        messages:{
          'email':{
            required:'required field',
            email:'Invalid email',
            minlength:'Minimum characters are 3',
            maxlength:'Maximum characters are 100'
          },
          'passwd':{
            required:'Required field',
            minlength:'Minimum characters are 3',
            maxlength:'Maximum characters are 32'
          }
        },
        errorElement:"div",
        errorClass:"invalid",
        errorPlacement:function(error,element){
            error.insertAfter(element)
        },
        submitHandler: function(form){
            Validate_Data();
        }

    });
}

function Validate_Data(){
    var form = $("#form_login").serialize();
    $.ajax({
        type: "post",
        url: "valida.php",
        dataType: 'json',
        data: form,
        success: function(request){
            if(request['status']==true){
                M.toast({html: 'Welcome', classes: 'rounded blue lighten-2'});
                document.location.href='../resources/Views';
              }else{
                M.toast({html: 'User not found', classes: 'rounded blue lighten-2'});
                $("#email").focus();
              }
        }
    });
}
