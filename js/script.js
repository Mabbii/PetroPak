const filterbuttons = document.querySelectorAll(".filter-button button");
const filterbalecards = document.querySelectorAll(".filterable-cards .cards");

//define filter card function
const filtercards = e  =>{
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");

    // itterate over each filterable card
    filterbalecards.forEach(cards => {
        cards.classList.add("hide");
        
    // // check if the card matches the selected filter or "all" is selected
    if(cards.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
        cards.classList.remove("hide");
    }
    });

};



filterbuttons.forEach(button => button.addEventListener("click", filtercards))