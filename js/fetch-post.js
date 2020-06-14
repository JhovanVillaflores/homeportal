document.addEventListener("DOMContentLoaded", function() {
    fetch_post();
});

$(document).ready( function(){
  $( "#select-filter" ).change(function() {
    var filter = $("#select-filter").val();
    if(filter=="All"){
      fetch_post();
    }else{
      filter_post(filter);
    }
  });

  $( "#search-keyword" ).keyup(function() {
    var keyword = $("#search-keyword").val();
    //console.log(keyword);
    search_post(keyword);
  });
});

function search_post(keyword){
  fetch(`api/post/search-post.php?keyword=${keyword}`).then( function(response){
    return response.json();
  }).then( function(data){
    console.log(data);
    console.log(data);
    let post = '';

      if(data.result=='0'){
      document.getElementById('post-list').innerHTML = `<span><h3 class='text=primary'>No result</h3></span>`;
    }

    for (var i = 0; i < data.data.length; i++) {
      post += `
          <div class='clean-blog-post'>
              <div class='row'>
                  <div class='col-lg-5'><img class='rounded img-fluid' src='${data.data[i].image_path}'></div>
                  <div class='col-lg-7'>
                      <h3>${data.data[i].title} (${data.data[i].type})</h3>
                      <div class='info'><span class='text-muted'>${data.data[i].date} by&nbsp;<a href='' class='text-primary'>${data.data[i].user_data['username']} </a></span></div>
                      <h5 class="text-warning">PHP ${data.data[i].price}</h5>
                      Property Address : <h6 class="text-secondary ml-3">${data.data[i].address}</h6>
                          <a href='post?uid=${uid}&&post_id=${data.data[i].id}' class='btn btn-outline-primary btn-sm'>Read More</a>
                  </div>
              </div>
          </div>
      `;
    }
    document.getElementById('post-list').innerHTML = post;
  });
}
function filter_post(filter){
  fetch(`api/post/filter-post.php?filter=${filter}`).then( function(response){
    return response.json();
  }).then( function(data){
    console.log(data);
    let post = '';

      if(data.result=='0'){
      document.getElementById('post-list').innerHTML = `<span><h3 class='text=primary'>No result</h3></span>`;
    }

    for (var i = 0; i < data.data.length; i++) {
      post += `
          <div class='clean-blog-post'>
              <div class='row'>
                  <div class='col-lg-5'><img class='rounded img-fluid' src='${data.data[i].image_path}'></div>
                  <div class='col-lg-7'>
                      <h3>${data.data[i].title} (${data.data[i].type})</h3>
                      <div class='info'><span class='text-muted'>${data.data[i].date} by&nbsp;<a href='' class='text-primary'>${data.data[i].user_data['username']} </a></span></div>
                      <h5 class="text-warning">PHP ${data.data[i].price}</h5>
                      Property Address : <h6 class="text-secondary ml-3">${data.data[i].address}</h6>
                          <a href='post?uid=${uid}&&post_id=${data.data[i].id}' class='btn btn-outline-primary btn-sm'>Read More</a>
                  </div>
              </div>
          </div>
      `;
    }
    document.getElementById('post-list').innerHTML = post;
  });
}

function fetch_post(){
  var uid = document.getElementById('uid').value;
  fetch(`api/post/read-post.php`).then( function(response){
    return response.json()
  }).then( function(data){
    console.log(data.data);

    let post = '';

    for (var i = 0; i < data.data.length; i++) {
      post += `

          <div class='clean-blog-post'>
              <div class='row'>
                  <div class='col-lg-5'><img class='rounded img-fluid' src='${data.data[i].image_path}'></div>
                  <div class='col-lg-7'>
                      <h3>${data.data[i].title} (${data.data[i].type})</h3>
                      <div class='info'><span class='text-muted'>${data.data[i].date} by&nbsp;<a href='' class='text-primary'>${data.data[i].user_data['username']} </a></span></div>
                      <h5 class="text-warning">PHP ${data.data[i].price}</h5>
                      Property Address : <h6 class="text-secondary ml-3">${data.data[i].address}</h6>
                          <a href='post?uid=${uid}&&post_id=${data.data[i].id}' class='btn btn-outline-primary btn-sm'>Read More</a>
                  </div>
              </div>
          </div>
      `;
    }
    document.getElementById('post-list').innerHTML = post;
  });
}
