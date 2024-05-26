window.onload = async function () {
    let like = document.querySelector('.like');
    let productId = like.getAttribute('data-product-id');
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let stars = document.querySelectorAll('.radio');
    let reviewContent = document.querySelector('.reviewContent');
    let submit = document.querySelector('.submit');
    // send the review

    stars.forEach(element => {
        submit.addEventListener('click', () => {
            if (element.checked) {
                const rating = element.value;
                const content = reviewContent.value;
                sendReview(productId, csrfToken, rating, content);
                getStars(productId, csrfToken);
                getCountReview(productId, csrfToken);
                getReviewByProduct(productId, csrfToken);
                reviewContent.value = '';
                element.checked = false;
            }
        })
    })
    // count reviews
    let countReviews = await countReview(productId, csrfToken);
    document.querySelector('#rvs').textContent = countReviews + ' reviews';
    //get stars
    async function getStars(productId, csrfToken) {
        //get rating from product
        let ratings = await getRating(productId, csrfToken);
        document.getElementById('star-rating').style.width = (ratings * 25) + 'px';
        ratings = Number(ratings);
        ratings =  ratings.toFixed(1);
        document.querySelector('#avr').textContent='('+ratings+')';
    }
    //get count reviews 
    async function getCountReview(productId, csrfToken) {
        //get rating from product
        // count reviews
        let countReviews = await countReview(productId, csrfToken);
        document.querySelector('#rvs').textContent = countReviews + ' reviews';
    }

    //get rating from product
    let rating = await getRating(productId, csrfToken);
    document.getElementById('star-rating').style.width = (rating * 25) + 'px';
    rating = Number(rating);
    rating =  rating.toFixed(1);
    document.querySelector('#avr').textContent ='('+rating+')';

    // Get the current like status from the server when the page loads
    let isLiked = await getLikeStatus(productId, csrfToken);
    if (isLiked) {
        like.classList.remove('btn-primary');
        like.classList.add('btn-danger');
    } else {
        like.classList.remove('btn-danger');
        like.classList.add('btn-primary');
    }

    like.addEventListener('click', () => {
        toggleLike(productId, csrfToken, like);
    });
}

async function getLikeStatus(productId, csrfToken) {
    const url = '/get-like-status';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ product_id: productId })
    });

    if (response.ok) {
        const result = await response.json();
        return result.isLiked;
    } else {
        alert("Error: " + response.status);
    }
}

async function toggleLike(productId, csrfToken, like) {
    const url = '/like';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ product_id: productId })
    });

    if (response.ok) {
        const result = await response.json();
        if (result.success) {
            if (like.classList.contains('btn-primary')) {
                like.classList.remove('btn-primary');
                like.classList.add('btn-danger');
            } else {
                like.classList.remove('btn-danger');
                like.classList.add('btn-primary');
            }
        } else {
            alert("Failed to toggle like");
        }
    } else {
        alert("login ");
    }
}
// reviews
async function sendReview(productId, csrfToken, rating, content) {
    const url = '/review';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            product_id: productId,
            content: content,
            rating: rating
        })
    });
    if (response.ok) {
        const result = await response.json();
        if (result.success) {

        } else {
            alert("Bạn đã đánh giá rồi!!!");
        }
    } else {
        alert("Vui lòng chọn đánh giá và nhập nội dung");
    }
}

// get rating 
async function getRating(productId, csrfToken) {
    const url = '/rating';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            product_id: productId,
        })
    });
    if (response.ok) {
        const result = await response.json();
        console.log(result.rating);
        return result.rating;
    } else {
        alert("Error: " + response.status);
    }
}
// count reviews
async function countReview(productId, csrfToken) {
    const url = '/count';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            product_id: productId,
        })
    });
    if (response.ok) {
        const result = await response.json();
        console.log(result.count);
        return result.count;
    } else {
        alert("Error: " + response.status);
    }
}
async function getReviewByProduct(productId, csrfToken) {
    const url = '/get-review-by-product';
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            product_id: productId,
        })
    });
    if (response.ok) {
        const result = await response.json();
        console.log(result);
        const parentReview = document.querySelector('.parent-review');
        let childReview = document.createElement('div.owl-carousel.home-owl-carousel.upsell-product.custom-carousel.owl-theme.outer-top-xs');
        childReview.innerHTML = `
       <div class="item item-carousel" style="margin-left: 15px;">
           <h4 class="user-name">${result.reviews.user_name}</h4>
           <span style="font-weight: bold;"> ${result.reviews.rating} </span>  
           <span style="color: yellow; font-size: 1.2em">★</span>
           <p class="created_at">${result.reviews.created_at}</p>
           <p class="review-content">${result.reviews.content}</p>
       </div>
   <hr>`;
        parentReview.appendChild(childReview);

    } else {
        alert("Error: " + response.status);
    }
}

