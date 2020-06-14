$(document).ready(function(){
        $("#login-form").submit(function (e){
            event.preventDefault();
            var contact = $("form").serialize();
            console.log(contact);
                $.ajax({
                    url: "api/auth/login.php",
                    method: "POST",
                    data: contact,
                    success: function(response){
                      var data = $.parseJSON(response);
                      console.log(data);
                         window.location.href=`home?uid=${data.data[0].id}`
                    }
                });

        });
});
