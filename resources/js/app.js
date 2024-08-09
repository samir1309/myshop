require('./bootstrap');
require('./sweetalert');


function updateBasketCount() {  
    axios.get('/basket-count')  
        .then(response => {  
            // به روز رسانی تعداد سبد خرید در صفحه  
            document.getElementById('basket-count').textContent = response.data.basket_count;  
        })  
        .catch(error => {  
            console.error('Error getting basket count:', error);  
        });  
}  
// در هنگام بارگذاری صفحه  
window.addEventListener('load', getBasketCount);  

// یا در هر زمان که نیاز به به روز رسانی باشد  
document.getElementById('add-to-basket').addEventListener('click', getBasketCount);