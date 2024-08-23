

const blogReadMore = function () {
  const blog = document.querySelector('#blog-archive');
  if (!blog) return;

  const moreBtn = document.querySelector('#read-more-posts');

  if(!moreBtn) return;

  let offset = 9;
  let postsPerPage = 9;

  moreBtn.addEventListener('click', (e) => {
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.open('POST', ajax_object.ajax_url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                var postContainer = document.getElementById('blog-archive');
                postContainer.insertAdjacentHTML('beforeend', response.data);
                offset += postsPerPage; // Increment offset
            } else {
                // No more posts to load
                moreBtn.style.display = 'none';
            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };
    xhr.onerror = function() {
        console.error('Request failed');
    };
    var data = 'action=load_more_posts&offset=' + offset;
    xhr.send(data);
  });
}();

export default blogReadMore;