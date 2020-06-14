function read_single_post(uid,post_id){
  fetch(`api/post/read-single-post.php?post_id=${post_id}`).then( function(response){
    return response.json()
  }).then( function(data){
    console.log(data);
    // /
    document.getElementById('post-title').innerHTML = `<span><h3>${data.title}</h3></span>`;
    document.getElementById('post-image').style.backgroundImage = `url('${data.image_path}')`;
    document.getElementById('post-info').innerHTML = `<span>By ${data.user_data['first_name']} ${data.user_data['last_name']}</span><span>${data.date}</span>`;
    document.getElementById('post-description').innerHTML = `<span><strong>Description: </strong><p>${data.description}</p></span>`;
    document.getElementById('post-Location').innerHTML = `<span><strong>Location: </strong><p>${data.address}</p></span>`;
    document.getElementById('post-type').innerHTML = `<span><strong>Type: </strong><p>${data.type}</p></span>`;
    document.getElementById('post-contact').innerHTML = `<span><strong>Contact: </strong><p>${data.user_data['contact']} / ${data.user_data['email']}</p></span>`;
    //post-page
    document.getElementById('post-page').innerHTML = `<span>${data.title}</span>`;
  });
}
