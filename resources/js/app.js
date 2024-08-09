require('./bootstrap');
require('./sweetalert');

function updateBasketCount() {  
    axios.get('/basket-count')  
        .then(response => {  
            // به روز رسانی تعداد سبد خرید در صفحه  
            document.getElementById('basket-count').textContent = response.data.basketCount;  
        })  
        .catch(error => {  
            console.error('Error getting basket count:', error);  
        });  
}  

