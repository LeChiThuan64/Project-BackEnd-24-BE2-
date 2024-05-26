
window.onload = async function () {
    const btnSend = document.querySelector('#btn-send');
    let comment = document.querySelector('.content');
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const commentView = document.querySelector('.comment-view');
    btnSend.addEventListener('click', () => {
        let id = btnSend.value;
        let content = comment.value;
        sendComment(content, id);
        getComment(id);
    });
    async function sendComment(content, id) {
        const url = '/send'
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                content: content,
                blogId: id
            })
        });
        if (response.ok) {
            const data = await response.json();
        }
    }
    async function getComment(blogId) {
        const url = '/get-comment';
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ blogId: blogId })
        });

        if (response.ok) {
            let result = await response.json();
         let div  = document.createElement('div')
            div.innerHTML =
                ` <div class="blog-comments inner-bottom-xs">
             <h4>${result.comment.user_name}</h4>
             <span class="review-action pull-right">
             ${result.comment.create_at}&sol;
                 <a href=""> Repost</a> &sol;
                 <a href=""> Reply</a>
             </span>
             <p>${result.comment.content}</p>
            </div>`;
            commentView.appendChild(div);
            comment.value = '';
        } else {
            alert("Error: " + response.status);
        }
    }
}

