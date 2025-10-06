(function () { 
document.addEventListener("DOMContentLoaded", () => {

const container = document.getElementById('products-container');

if (!container) return;

const url = container.dataset.ajaxUrl;
console.log("AJAX URL:", url);

fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log('Produkty:', data.data);
        container.innerHTML = data.data.map(p =>
            `<p>${p.ph_category_alias}</p>`
        ).join("");
    })
    .catch(err => console.error('Error:', err));
   
});
})();