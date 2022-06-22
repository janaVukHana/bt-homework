
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

        let avgRatingInnerText = '';
        for (let i = 0; i < ratingNum; i++) {
            avgRatingInnerText += `<img src="./public/theme/img/icons/star.png" alt="star icon" style="display: inline; width: 20px; height: 20px;"/>`;
            rating.innerHTML = avgRatingInnerText;
        }
    })
} else if (window.location.href.indexOf('products_page_controler.php') >= 0) {

    const buttons = document.querySelectorAll('.add-to-cart-btn');

    buttons.forEach(button => {
        button.addEventListener('click', e => {
            // proveri da li ima nesto u session storage i ako ima izvuci informacije
            // informacije koje treba da prosledis su id i quantity
            // u session storage treba pod cartItems imenom da ima array u kom su objekti sa id-jem i quantity
            // ako nema session storage napravi sa imenom cartItems i dodaj array o kom je jedan objekat sa id i quantity 1
            // ako ima proveri da li taj id ima u nekom objektu. ako ima povecaj quantity za jedan a ako nema dodaj id i q..
            const btnId = button.getAttribute('id'); // getting attr id
            const quantity = 1;
            let item = {id: btnId, quantity: quantity};
            let items = [];

            // if sesstion is empty create one
            if (sessionStorage.getItem("cartItems") === null) {
                items.push(item);

                 // change number of items in badge in header
                 const badge = document.querySelector('.badge');
                 const numOfItems = items.length;
                 badge.innerHTML = numOfItems;

                sessionStorage.setItem("cartItems", JSON.stringify(items));
            } 
            // if session is not empty check if item is already in session
            // if it is just update quantity
            // if NOT then add new item to session
            else {
                let cartItems = JSON.parse(sessionStorage.getItem("cartItems"));
                let cartItemExist = false;
                
                cartItems.forEach(item => {
                    if(btnId == item.id) {
                        item.quantity++;
                        cartItemExist = true;
                    }
                })
                
                if(!cartItemExist) {
                    cartItems.push(item);
                }

                // change number of items in badge in header
                const badge = document.querySelector('.badge');
                const numOfItems = cartItems.length;
                badge.innerHTML = numOfItems;   

                // update session storage
                sessionStorage.setItem('cartItems', JSON.stringify(cartItems));
            }

        }) // enc of event listener
    }) // end of buttons forEach
}