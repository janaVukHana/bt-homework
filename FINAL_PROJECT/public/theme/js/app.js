// calculate court rating

const allRatings = document.querySelectorAll('.stars');

let ratings = 0;
let numOfComments = 0;

allRatings.forEach(rating => {
    ratings += +rating.innerHTML;
    numOfComments++;
})

const avgRating = Math.round(ratings / numOfComments);

let avgStars = document.querySelector('.avgStars');

let addStars = '';
for(let i = 0; i < avgRating; i++) {
    addStars += `<img src="./public/theme/img/icons/star.png" alt="star icon" style="display: inline; width: 20px; height: 20px;"/>`
}

avgStars.innerHTML = addStars;



