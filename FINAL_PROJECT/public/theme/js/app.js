
if(window.location.href.indexOf('single_court_controler.php') >= 0) {
    // SINGLE COURT PAGE

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
    
} else if (window.location.href.indexOf('courts_page_controler.php') >= 0) {

    // all ratings
    const avgRating = document.querySelectorAll('.avg-rating');


    avgRating.forEach(rating => {
        const ratingNum = rating.textContent;
        console.log(rating.innerHTML);

        let avgRatingInnerText = '';
        for (let i = 0; i < ratingNum; i++) {
            avgRatingInnerText += `<img src="./public/theme/img/icons/star.png" alt="star icon" style="display: inline; width: 20px; height: 20px;"/>`;
            rating.innerHTML = avgRatingInnerText;
        }
    })
}