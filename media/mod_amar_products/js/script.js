(function () { 
document.addEventListener("DOMContentLoaded", () => {

const container = document.getElementById('products-container');

if (!container) return;

const url = container.dataset.ajaxUrl;
//console.log("AJAX URL:", url);

fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log('Produkty:', data.data);
        container.innerHTML = data.data.map(productTemplate).join("");
    })
    .catch(err => console.error('Error:', err));
   
});

const imageBasePath = 'http://localhost/amarczchow/images/phocacartproducts/';

function productTemplate(p) {
    return `
        <div>
            <h2>${p.ph_products_title}</h2>
            <img class="image-thumb" src="${imageBasePath}${p.ph_products_image}" alt="${p.ph_products_image}">
            <h4>${p.ph_products_price}</h4>
        </div>
    `;  
}
})();