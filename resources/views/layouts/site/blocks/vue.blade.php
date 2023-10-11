<script>

    new Vue({
        el: '#shop68',
        data: function () {
            return {
                //Cart
                cartItems: [],
                cartSumPrice: 0,
                quantity: 1,
                specificationId:'',
                countShopping: 0,
                discountCode: "",
                order : null,
                postalCodeForm : '',
                cartTotal: 0,
                changePost1:'',
                countProduct:0,
                countProduct2:0,
                selectedColor2 : '',

                //Address
                selectedState:'',
                selectedCity: '',
                cities: [],

                @if(isset($addresses))
                    @foreach($addresses as $row)
                        @if($row->state_id && $row->city_id)
                            selectedState{{$row->id}}:{{$row->state_id}},
                            selectedCity{{$row->id}}: {{$row->city_id}},
                        @endif
                    @endforeach
                @endif

                //Product List
                products : [],
                selected2 : [],
                selected3 : [],
                selected4 : [],
                loading2 : false,
                brands : [],
                categories : [],
                brandSearch : [],
                catSearch : [],
                searchValue : '',
                available : false,
                discount : false,
                timer : false,
                sortBy: '',
                availableProduct:0,
                productsListAwait :0,
                pageNonStock: 0,
                loadingProcess: 0,
                page:1,
                page2:1,
                stopCall:false,
                stopCall2:true,
                loadingMine: false,
search: '',
                //Product Detail
                more:false,
                like: 0,
            }
        },
        methods: {

            //Product List Start
            productList() {
                var vm = this;
                if(vm.page == 1){
                    this.getProductAxios();
                }
                setInterval(function () {

                    if(vm.stopCall === false){
                        if(vm.loading2 == false){
                            vm.getProductAxios();
                        }
                    }else if(vm.stopCall2 === true){
                        vm.loading2 = false;
                    }

                }, 2000);
            },
            getProductAxios(){
                var vm = this;
                if(vm.stopCall == false){
                    vm.loading2 = true;
                    axios({
                        method: "post",
                        url: '{{route('vue.product-list')}}',
                        data: {
                            category_id: {{@$category->id ? @$category->id : '1'}},
                            page:vm.page,
                        }
                    }).then(function (response) {
                        if(vm.stopCall == false){
                             vm.products = [...vm.products,...response.data.products];
                            vm.loading2 = false;
                            if(vm.page == response.data.pageCount){
                                vm.stopCall = true;
                            }

                            vm.page = vm.page+1;
                        }

                    });
                }

            },
            getBrands:function ()  {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.getbrands')}}',
                    data: {
                        category_id: {{@$category->id ? @$category->id : '1'}},
                    }
                }).then(response => {
                    if (response.data.success === true) {
                        vm.brands = response.data.brands;
                        vm.brandSearch = response.data.brands;
                    }
                }).catch(e => {
                    console.log(e);
                });
            },
            searchInBrands(){
                this.brandSearch = this.brands.filter((brand) => {
                    return brand.title.toLowerCase().includes(this.searchValue.toLowerCase());
                });
            },
            searchInCats(){
                this.catSearch = this.categories.filter((category) => {
                    return category.title.toLowerCase().includes(this.searchValue.toLowerCase());
                });
            },
            getCats:function ()  {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.getcats')}}',
                    data: {
                        brand_id: {{@$brand->id ? @$brand->id : '1'}},
                    }
                }).then(response => {
                    vm.catSearch = [];
                    vm.categories = response.data.categories;
                    vm.catSearch = response.data.categories;
                    vm.catSearch =  vm.categories;

                }).catch(e => {
                    console.log(e);
                });
            },
            getDiscountAxios(){
                var vm = this;
                vm.loading2 = true;
                axios({
                    method: "post",
                    url: '{{route('vue.product-dis')}}',
                    data: {
                        category_id: {{@$category->id ? @$category->id : '1'}},
                        page:vm.page,
                    }
                }).then(function (response) {
                    vm.products = [...vm.products,...response.data.products];
                    vm.loading2 = false;
                    if(vm.page == response.data.pageCount){
                        vm.stopCall = true;
                    }
                    vm.page = vm.page+1;
                });
            },
            productsDis() {
                var vm = this;
                if(vm.page == 1){
                    this.getDiscountAxios();
                }
                setInterval(function () {
                    if(vm.stopCall === false){
                        if(vm.loading2 == false){
                            vm.getDiscountAxios();
                        }
                    }else{
                        vm.loading2 = false;
                    }
                }, 2000);
            },
            loadingOff:function ()  {
                this.loading2 = false;
            },
            async filterProductsAxios(vm)  {
                vm.loadingMine = true;
                const response = await axios({
                    method: "post",
                    url: '{{route('vue.filter-product')}}',
                    data: {
                        category_id: {{@$category->id ? @$category->id : '1'}},
                        specification : this.selected2,
                        brand : this.selected3,
                        available : this.available,
                        discount : this.discount,
                        timer : this.timer,
                        sortBy : this.sortBy,
                        priceRange : document.getElementById('amount').value,
                        page : vm.page2,
                    }
                });
                vm.products = [...vm.products,...response.data.products];
                if(response){
                    if(vm.page2 == response.data.fCount){
                        vm.stopCall2 = true;
                        vm.loading2 = false;
                    }
                    vm.page2 = vm.page2+1;
                    vm.loadingMine = false;
                }
            },
            filterProducts:function ()  {
                var vm = this;
                vm.loading2 = true;
                vm.products = [];
                vm.stopCall = true;
                vm.stopCall2 = false;
                vm.page2 = 1;
                this.filterProductsAxios(vm);
                setInterval(function () {
                    //1=> >= 1 13/4
                    if(vm.page2 >= 1) {
                        if (vm.loadingMine === false && vm.stopCall2 == false) {
                            vm.filterProductsAxios(vm);
                        }
                    }
                }, 5000);
            },
            getBrandAxios(){
                var vm = this;
                vm.loading2 = true;
                axios({
                    method: "post",
                    url: '{{route('vue.brand-list')}}',
                    data: {
                        brand_id: {{@$brand->id ? @$brand->id : '1'}},
                        page:vm.page,
                    }
                }).then(function (response) {
                    vm.products = [...vm.products,...response.data.products];
                    vm.loading2 = false;
                    if(vm.page == response.data.pageCount){
                        vm.stopCall = true;

                    }
                    vm.page = vm.page+1;
                });
            },
            BrandList() {
                var vm = this;
                if(vm.page == 1){
                    this.getBrandAxios();
                }
                setInterval(function () {
                    if(vm.stopCall === false){
                        if(vm.loading2 == false) {
                            vm.getBrandAxios();
                        }
                    }else{
                        vm.loading2 = false;
                    }
                }, 2000);
            },
            async filterBrandsAxios(vm)  {
                vm.loadingMine = true;

                const response = await axios({
                    method: "post",
                    url: '{{route('vue.filter-brand')}}',
                    data: {
                        brand_id: {{@$brand->id ? @$brand->id : '1'}},
                        category : this.selected4,
                        available : this.available,
                        discount : this.discount,
                        timer : this.timer,
                        sortBy : this.sortBy,
                        priceRange : document.getElementById('amount').value,
                        page : vm.page2,
                    }
                });

                vm.products = [...vm.products,...response.data.products];

                //
                if(response){
                    if(vm.page2 == response.data.fCount){
                        vm.stopCall2 = true;
                        vm.loading2 = false;
                    }
                    vm.page2 = vm.page2+1;
                    vm.loadingMine = false;
                }
            },
            filterBrands:function ()  {
                var vm = this;
                vm.loading2 = true;
                vm.products = [];
                vm.stopCall = true;
                vm.stopCall2 = false;
                vm.page2 = 1;
                this.filterBrandsAxios(vm);
                setInterval(function () {
                    if(vm.page2 > 1) {
                        if (vm.loadingMine === false && vm.stopCall2 == false) {
                            vm.filterBrandsAxios(vm);
                        }
                    }
                }, 5000);
            },
            //Product List End
     //search Start
            getSearch() {
                var vm = this;
                if(vm.page == 1){
                    this.getSearchAxios();
                }
                setInterval(function () {

                    if(vm.stopCall === false){
                        if(vm.loading2 == false){
                            vm.getSearchAxios();
                        }
                    }else if(vm.stopCall2 === true){
                        vm.loading2 = false;
                    }

                }, 2000);
            },
            getSearchAxios(){
                var vm = this;
                vm.loading2 = true;
                axios({
                    method: "post",
                    url: '{{route('vue.search-list')}}',
                    data: {
                        category_id: {{@$category->id ? @$category->id : '1'}},
                        page:vm.page,
                        search:'{{@$search ? @$search : ''}}',
                    }
                }).then(function (response) {
                    vm.products = [...vm.products,...response.data.products];
                    vm.loading2 = false;
                    if(vm.page == response.data.pageCount){
                        vm.stopCall = true;
                    }

                    vm.page = vm.page+1;
                });
            },
            async filterSearchAxios(vm)  {
                vm.loadingMine = true;
                const response = await axios({
                    method: "post",
                    url: '{{route('vue.filter-search')}}',
                    data: {
                        category_id: {{@$category->id ? @$category->id : '1'}},
                        available : this.available,
                        discount : this.discount,
                        timer : this.timer,
                        sortBy : this.sortBy,
                        page : vm.page2,
                        search:'{{@$search ? @$search : ''}}',
                    }
                });
                vm.products = [...vm.products,...response.data.products];
                if(response){
                    if(vm.page2 == response.data.fCount){
                        vm.stopCall2 = true;
                        vm.loading2 = false;
                    }
                    vm.page2 = vm.page2+1;
                    vm.loadingMine = false;
                }
            },
            filterSearch:function ()  {
                var vm = this;
                vm.loading2 = true;
                vm.products = [];
                vm.stopCall = true;
                vm.stopCall2 = false;
                vm.page2 = 1;
                this.filterSearchAxios(vm);
                setInterval(function () {
                    if(vm.page2 > 1) {
                        if (vm.loadingMine === false && vm.stopCall2 == false) {
                            vm.filterSearchAxios(vm);
                        }
                    }
                }, 5000);
            },
            //end Search

            //Product Detail Start
            hideShortDes(){
                document.getElementById('textShortDes').style.display = 'none';
                this.more = !this.more;
            },
            closeMe(){
                $('#adressModalmain').modal('hide');
            },
            changeColor:function(colorSelected,price,oldprice,realPrice){
                this.selectedColor2 = colorSelected+'|'+price+'|'+oldprice+'|'+realPrice;
            },
            changePrice:function(price){
                this.selectedPrice = price + " تومان ";
            },
            handleIngredientsScroll(){
                $("#custom-ingredients").trigger("click");
            },
            handleIngredientsScrollMobile(){
                $("#comments-mobile").trigger("click");
            },
            //Product Detail End


            //Address Start
            getCities:function ()  {
                var vm = this;


                axios.post(`{{route('panel.set-city')}}`, {
                    body: {}
                })
                    .then(response => {
                        if (response.data.success === true) {
                            vm.cities = response.data.cities;
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            setCities:function ()  {

                var vm = this;

                axios.post(`{{route('panel.set-city')}}`, {
                    body: {  state_id: this.selectedState }
                })
                    .then(response => {
                        if (response.data.success === true) {
                            vm.cities = [];
                            vm.cities = response.data.cities;
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            getEditCities:function (selectedState)  {
                var vm = this;


                axios.post(`{{route('panel.set-city-edit')}}`, {
                    body: {
                        state_id: selectedState
                    }
                })
                    .then(response => {
                        if (response.data.success === true) {
                            vm.cities = response.data.cities;
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });

            },
               checkForm(e){
                e.preventDefault();
                if(this.postalCodeForm !== ""){
                if(this.postalCodeForm.length !== 10){
                    swal("", "کد پستی حتما باید ۱۰ رقم باشد", "error");
                }else{
                    document.getElementById("myformhihi").submit()
                }
                }
                else {
                    document.getElementById("myformhihi").submit()
                }
            },
            //Address Start


            //Cart Start
            getCartItems() {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.cart.content')}}',
                    data: {}
                }).then(function (response) {
                    if (response.data.success) {
                        if (response.data.success === true) {
                            vm.cartItems = [];
                            vm.cartItems = response.data.cart;

                            vm.cartSumPrice = 0;
                            vm.cartSumPrice = response.data.cartSumPrice;
                            vm.order = null;
                            vm.order = response.data.order;
                            vm.countShopping = 0;
                            vm.countShopping = response.data.countShopping;
                            vm.cartPayment = 0;
                            vm.cartPayment = response.data.cartPayment;
                            vm.cartTotal = 0;
                            vm.cartTotal = response.data.totalCount;

                        }
                    }
                });
            },
            addToCart(productId, quantity, relativeMode, specificationId) {

                var vm = this;

                axios({
                    method: "post",
                    url: '{{route('site.cart.add')}}',
                    data: {
                        // discount_code: this.discountCode,
                        productId: productId,
                        specificationId: specificationId,
                        // discountId: discountId,

                          @if(  count(Request::segments()) > 0 && Request::segments()[0] == 'checkout')

                        quantity: quantity,

                        @else
                        quantity: document.getElementById("quantity").value,

                        @endif


                        relativeMode: relativeMode
                    }
                }).then(function (response) {
                    if (response.data.success === true ) {
                        vm.cartItems = [];
                        vm.cartItems = response.data.cart;
                        vm.cartSumPrice = 0;
                        vm.cartSumPrice = response.data.cartSumPrice;
                        vm.countShopping = 0;
                        vm.countShopping = response.data.countShopping;
                        vm.cartPayment = 0;
                        vm.cartPayment = response.data.cartPayment;
                        vm.cartTotal = 0;
                        vm.cartTotal = response.data.totalCount;

                        swal("اضافه شد!", response.data.message, "success", {
                            buttons: {
                                continiue:{
                                    text: "تکمیل سفارش و پرداخت",
                                    color: 'red',
                                },
                                nonow: "ادامه خرید",
                            },
                        }).then((value) => {
                            switch (value) {

                                case "continiue":

                                    window.location.href = '{{url('/checkout')}}'; //Will take you to Google.
                                    break;

                                case "nonow":
                                    break;

                                default:
                                    console.log('hi');
                            }
                        });
                    }

                    if (response.data.success === false && response.data.button == true) {
                        swal(
                            {title: "خطا!",
                                text: response.data.message,
                                icon: "error",
                                button: "ثبت نام/ورود"})
                            .then(() => {
                                location.href = "{{url('panel/login?product_id='.@$product->id)}}";
                            });
                    }

                    if(response.data.success === false && response.data.button == false) {

                        swal("خطا!", response.data.message, "error");


                    }

                });
            },
            addDiscount() {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.discount.add')}}',
                    data: {

                        code: this.discountCode,
                    }
                }).then(function (response) {
                    if (response.data.success === true) {
                        vm.cartItems = [];
                        vm.cartItems = response.data.cart;
                        vm.cartSumPrice = 0;
                        vm.cartSumPrice = response.data.cartSumPrice;
                        vm.countShopping = 0;
                        vm.countShopping = response.data.countShopping;
                        vm.cartPayment = 0;
                        vm.cartPayment = response.data.cartPayment;
                        swal("اضافه شد!", "کد تخفیف با موفقیت اعمال شد", "success");
                    } else {
                        swal(" خطا!",response.data.message, "error");
                    }
                });
            },
                   removeCart(cartItemId) {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.cart.remove')}}',
                    data: {
                        cartItemId: cartItemId
                    }
                }).then(function (response) {
                    if (response.data.success === true) {
                        vm.cartItems = [];
                        vm.cartItems = response.data.cart;
                        vm.cartSumPrice = 0;
                        vm.cartSumPrice = response.data.cartSumPrice;
                        vm.countShopping = 0;
                        vm.countShopping = response.data.countShopping;
                        vm.cartPayment = 0;
                        vm.cartPayment = response.data.cartPayment;
                        vm.cartTotal = 0;
                        vm.cartTotal = response.data.totalCount;

                        swal("محصول حذف شد!", "محصول از سبد خرید شما حذف شد", "success");
                    }
                });
            },
                   removeCartLike(cartItemId) {
                var vm = this;
                axios({
                    method: "post",
                    url: '{{route('site.cart.remove')}}',
                    data: {
                        cartItemId: cartItemId
                    }
                }).then(function (response) {
                    if (response.data.success === true) {
                        vm.cartItems = [];
                        vm.cartItems = response.data.cart;
                        vm.cartSumPrice = 0;
                        vm.cartSumPrice = response.data.cartSumPrice;
                        vm.countShopping = 0;
                        vm.countShopping = response.data.countShopping;
                        vm.cartPayment = 0;
                        vm.cartPayment = response.data.cartPayment;
                        vm.cartTotal = 0;
                        vm.cartTotal = response.data.totalCount;

                        swal("محصول حذف شد!", "محصول از سبد خرید شما حذف و به علاقه مندی ها انتقال یافت", "success");
                    }
                });
            },
            likeSwal(productId,cartItemId) {

                var vm = this;
                swal("آیا مایل به انتقال محصول به علاقه مندی های خود هستید؟", {
                    buttons: {
                        continiue:{
                            text: "انتقال به علاقه مندی",
                            color: 'red',
                        },
                        nonow: "ادامه حذف",
                    },
                }).then((value) => {
                    switch (value) {

                        case "continiue":

                            axios({
                                method: "get",
                                url: 'post-like-cart/'+productId,
                                data: {
                                }
                            }).then(function (response) {
                                vm.removeCartLike(cartItemId);
                                swal.stopLoading();
                                swal.close();
                            });
                            break;

                        case "nonow":
                            vm.removeCart(cartItemId);
                            break;

                        default:
                            console.log('hi');
                    }
                });
                // swal("محصول حذف شد!", "محصول از سبد خرید شما حذف شد", "success");

            },
            plusQnty(cartItemId){
                this.cartItems.find( ({ id }) => id === cartItemId ).productQuantity =  this.cartItems.find( ({ id }) => id === cartItemId ).productQuantity+1;
            },
            minusQnty(cartItemId){
                this.cartItems.find( ({ id }) => id === cartItemId ).productQuantity =  this.cartItems.find( ({ id }) => id === cartItemId ).productQuantity-1;

            },
            changePost:function(postPrice,payment){
                this.selectedPost = postPrice;
                this.selectedPost2 = payment;
                // this.cartPayment = this.cartPayment + this.selectedPost2;
            },
            //Cart End
        },
        mounted() {
            this.loading2 = true;
            this.getCartItems();
            this.getEditCities(null);

            @if(@Request::segments()[0] == "discount")
                this.productsDis();
            @endif
    @if(@Request::segments()[0] == "search2")
                this.getSearch();

            @endif
            @if(@Request::segments()[0] == "cat")
                this.productList();
                this.getBrands();
            @endif

            @if(@Request::segments()[0] == "brand")
                this.BrandList();
                this.getCats();
            @endif
        },
        computed: {
            //Product list start
            sortedProducts: function() {
                return this.products;
            },
            countProducts: function () {
                return this.sortedProducts.length + 1;
            },
            brandSearch2: function () {
                if(this.searchValue !== ''){

                    return this.brandSearch.filter((brand) => {
                        return brand.title.toLowerCase().includes(this.searchValue.toLowerCase());
                    });
                }else{
                    return this.brandSearch;
                }
            },
            //Product list end

            //Product detail start
            selectedColor: function () {
                return this.selectedColor2.split("|")[0];
            },
            selectedPrice: function () {
                if(this.selectedColor2){
                    let myprice =  this.selectedColor2.split("|")[1];
                    var x = (parseInt(myprice)).toFixed(1).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                    return x.replace('.0','') + ' تومان ';
                }else{
                    return '{!! number_format(@$product->price) !!}' + ' تومان ';
                }
            },
            selectedRealPrice: function () {
                if(this.selectedColor2){
                    let myprice =  this.selectedColor2.split("|")[3];
                    var x = (parseInt(myprice)).toFixed(1).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                    return x.replace('.0','') + ' تومان ';
                }else{
                    return '{!! number_format(@$product->old_price) !!}' + ' تومان ';
                }
            },
            selectedStock: function () {
                if(this.selectedColor2){
                    let myprice =  this.selectedColor2.split("|")[2];
                    return myprice;
                }else{
                    return '{{@$product->stocks}}';
                }
            },
            //Product detail end

            //Cart start
            selectedPost: function () {

                if(this.changePost1){
                    return this.changePost1.split("|")[2];
                }else{
                    return 'روش ارسال را انتخاب کنید';
                }
            },
            selectedPost2: function () {
                if(this.changePost1){
                    return parseInt(this.changePost1.split("|")[1]);
                }else{
                    return 0;
                }
            },
            changePost2: function () {
                if(this.changePost1 !== ''){
                    return parseInt(this.changePost1.split("|")[0]);
                }else{
                    return null;
                }
            },
            cartPaymentTotal: function () {
                return this.cartPayment + this.selectedPost2;
            },
            //Cart end

        },
        watch : {
            selectedColor2:function(val) {
             const btnChange = document.getElementById("v-pills-"+val.split("|")[0]+"-tab");

                 console.log(val.split("|")[0])
                $( "#v-pills-"+val.split("|")[0]+"-tab").trigger("click");
                 btnChange.classList.add("active");
                  console.log(btnChange)
            }
        }
    });
</script>
