
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
    
} 
// else if (window.location.href.indexOf('courts_page_controler.php') >= 0) {
    // ALL COURTS PAGE

    // CHANGE: capitalize all location names
    // const locations = document.querySelectorAll('.location-name');
    // locations.forEach(location => {
    //     let locationStr = location.textContent;
    //     const locationStrCapitalize = locationStr.charAt(0).toUpperCase() + locationStr.slice(1);
    //     location.textContent = locationStrCapitalize;
    // })

    // filters for courts
    // const selectField = document.querySelector('.court-location');
    // selectField.addEventListener('change', e => {
    //     const allCourts = document.querySelectorAll('.single-court');
        
    //     const courtsContainer = document.querySelector('.courts-container');
        // courtsContainer.innerHTML = 'ilija';

    //     const filterByLocation = document.querySelector('.court-location');
    //     let selected = filterByLocation.value; // get selected option value
    //     let selectedToCapitalize = selected.charAt(0).toUpperCase() + selected.slice(1);
    //     console.log(selectedToCapitalize); // == Liman ilij Detelinara ili Centar ...


    //     allCourts.forEach(court => {
    //         console.log(court);
    //         if(court.innerText.indexOf(selectedToCapitalize) >= 0) {
    //             court.style.display = 'none !important';
    //         } else {
    //             court.style.display = '';
    //         }
    //     })
    // })
    

// }


