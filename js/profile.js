function read_profile(user_id){
  fetch(`api/user/read-single-user.php?uid=${user_id}`).then( function(response){
    return response.json();
  }).then( function(data){
        //console.log(data);
        document.getElementById('username-input').value = data.username;
        document.getElementById('email-input').value = data.email;
        document.getElementById('firstname-input').value = data.first_name;
        document.getElementById('lastname-input').value = data.last_name;
        document.getElementById('address-input').value = data.address;
        document.getElementById('contact-input').value = data.contact_no  ;
  });
}
$(document).ready( function(){
  
});


function read_user_post(user_id){
  fetch(`api/post/read-user-post.php?uid=`+user_id).then( function(response){
    return response.json()
  }).then( function(data){
    console.log(data);
    let post = '';
    if(data.data.length==0){
      document.getElementById('no-post-label').innerHTML = `<span><h5 class="text-secondary" >No Post </h5></span>`;
    }
    for (var i = 0; i < data.data.length; i++) {
      post += `
          <div class='clean-blog-post'>
              <div class='row'>
                  <div class='col-lg-5'><img class='rounded img-fluid' src='${data.data[i].image_path}'></div>
                  <div class='col-lg-7'>
                      <h3>${data.data[i].title} (${data.data[i].type})</h3>
                      <span class='text-muted'>${data.data[i].date} by&nbsp;<a href='' class='text-primary'>You </a></span>
                      <h5 class="text-warning">PHP ${data.data[i].price}</h5>
                      Property Address : <h6 class="text-secondary ml-3">${data.data[i].address}</h6>
                          <a href='post?uid=${user_id}&&post_id=${data.data[i].id}' class='btn btn-outline-primary btn-sm'>Read More</a>
                  </div>
              </div>
          </div>`;
    }
    document.getElementById('post-list').innerHTML = post;
  });
}
