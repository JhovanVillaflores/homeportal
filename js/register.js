$(document).ready(function(){
        $("#register-form").submit(function (e){
            event.preventDefault();
            var contact = $("#register-form").serialize();
            console.log(contact);
                $.ajax({
                    url: "api/user/register-user.php",
                    method: "POST",
                    data: contact,
                    success: function(response){
                      var data = $.parseJSON(response);
                      console.log(data);
                         window.location.href=`login.php`;
                    },

                });

        });
});
