(function (){
    let slideIndex = 1;
/*

    showSlides(slideIndex);

    function showSlides(n) {
        let i = 0;
        let slides = document.getElementsByClassName("mySlides");

        for (i = 0; i < slides.length; i++)
        {
            slides[i].style.display="none";
        }
        slideIndex++;

        if (slideIndex > slides.length) 
        {
            slideIndex=1;
        }

        slides[slideIndex-1].style.display="block"; 
        setTimeout(showSlides, 8000);
    }
*/
}());


/*document.addEventListener("DomContentLoaded", () => {

const container = document.getElementById('products-container');

if (!container) { console.log('nie ma container'); return; }

const url = container.dataset.ajaxUrl;
console.log("AJAX URL:", url);

fetch(url)
    .then(res => {
        console.log("Response status:", res.status);
        return res.text();
    })
    .then(txt => {
        console.log("RAW RESPONSE:", txt);
        try {
            const data = JSON.parse(txt);
            console.log("Parsed JSON:", data)
        } catch (e) {
            console.error("Nie można sparsować JSON: ", e);
        }
    })
    .catch(err => console.error("Błąd fetch:", err));
/*
    .then(response => response.json())
    .then(data => {
        console.log('Produkty:', data.data);
        container.innerHTML = data.data.map(p =>
            '<p>${p.ph_category_alias}</p>'
        ).join("");
    })
    .catch(err => console.error('Error:', err));
*/
