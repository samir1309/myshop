<?php

//scope

   public function scopeActive($query)
   {
      $records = $query->whereStatus('1');
      return $records;
   }

//getters
//get+'''''''+Attribute
   public function getUpDateShowAttribute(){
      $date =  jdate('d F Y',$this->updated_at->timestamp).' ساعت '.jdate('H:i',$this->updated_at->timestamp);
      return $date;
   }
   //خروجی: ۲۶ مهر ۱۴۰۲ ساعت ۱۰:۳۰
   //نام کترها نباید هم نام فیلدهای مدلمون باشه
   public function getItemImageAttribute()
   {


      if ($this->attributes['image']) {
         return file_exists('assets/uploads/work-sample/'.$this->attributes['image']) ? asset('assets/uploads/work-sample/'.$this->attributes['image']) : asset('assets/admin/images/notfound.jpg');
      } else {
         return asset('assets/admin/images/notfound.jpg');
      }
   }

   public function getShippingPriceAttribute()
   {
      $item = @$this->postPrice;
      $price = @$item->price;
      if ($this->cartPrice['sumPrice'] > @$item->max_price) {
         $price = 0;
      }
      return [
         'id' => @$item->id,
         'title' => @$item->title,
         'price' => @$price,
         'priceText' => $price != 0 ? (@$item->without_price == 0 ? number_format(@$price) . ' تومان ' : ' پرداخت در مقصد طبق تعرفه ' . $item->title) : 'ارسال رایگان',
         'priceNumber' => $price != 0 ? @$price : 0,
         'sort' => @$item->sort,
         'max_price' => @$item->max_price,
         'description' => @$item->description != null ? strip_tags(@$item->description) : '',
      ];

   }
   public function getCartPriceAttribute()
   {

      $sumPrice = 0;
      $sumDiscountedPrice = 0;
      foreach ($this->items as $item) {
         if ($item->product_variable_id != null) {
            $main_price = @$item->productVariable->price;
            $discounted_price = @$item->productVariable->old_price;
         } else {
            $main_price = @$item->product->price;
            $discounted_price = @$item->product->old_price;
         }

         $itemPrice = intval($item->quantity) * intval($main_price);
         $itemDiscountedPrice = intval($item->quantity) * intval($discounted_price);
         $sumPrice += $itemPrice;
         $sumDiscountedPrice += $itemDiscountedPrice;
      }
      @$discount_format = $this->discountingPrice['discountAmount'];

      $totalCounts = @$this->items()->sum('quantity');
      $cartDiscountOnProduct =intval($sumDiscountedPrice) - intval($sumPrice) ;
      $cartDiscountNumber = $sumDiscountedPrice != 0 ? $cartDiscountOnProduct + @$discount_format : @$discount_format ;
      @$post_price = @$this->shippingPrice['priceNumber'];
      @$post_price_format = @$this->shippingPrice['priceText'];
      $cartPrice = intval($sumPrice) + intval(@$post_price) - intval(@$discount_format);
      return [
         'sumPrice' => number_format($sumPrice) . ' تومان',
         'sumDiscountedPrice' => number_format($sumDiscountedPrice) . ' تومان',
         'totalCount' => $totalCounts,
         'sumPriceNumber' => $sumPrice,
         'cartPriceNumber' => $cartPrice,
         'cartSumPrice' => number_format($cartPrice) . ' تومان',
         'sumDiscountedPriceNumber' => $sumDiscountedPrice,
         'productDiscount' => $cartDiscountNumber ,
         'cartDiscountNumber' =>   number_format($cartDiscountNumber) . ' تومان',
         'postPrice' => @$this->postPrice ? $post_price_format : 'فعلا محاسبه نشده',
      ];
   }
   public function getDiscountingPriceAttribute()
{
   $discount = @$this->discount;
   $items = $this->items;
   if ($discount['category_id'] != null) {
       $product_ids = ProductCategory::where('category_id', $discount['category_id'])->pluck('product_id')->toArray();
       $items = $this->items()->whereIn('product_id', $product_ids)->get();
   }
   $sum = 0;
   foreach ($items as $item) {
       if ($discount->with_price == 1){
           $qty = $item->quantity;
           $price = $item->product_variable_id != null ? $item->productVariable->price :  $item->product->price ;
           $item_total = $price * $qty;
           $sum += $item_total;
       }else{
           if ($item->product->old_price != 0){
               $qty = $item->quantity;
               $price = $item->product_variable_id != null ? $item->productVariable->price :  $item->product->price ;
               $item_total = $price * $qty;
               $sum += $item_total;
           }
       }

   }
   $sum;
   $discount_amount = 0;
   if ($discount->type == 1) {
       $discount_amount = intval($sum) * intval($discount->amount) / 100;
   } else {
       $discount_amount = intval($discount->amount);
   }
   return [
       'id' => @$discount->id,
       'discountAmount' => @$discount_amount,
   ];

}





//setters
//set+;;;+Attribute
   public function setPriceAttribute($value)
   {
      $this->attributes['price'] = round(intval(Helper::persian2LatinDigit(str_replace(',','',str_replace('،','',$value)))),-3,PHP_ROUND_HALF_UP);
   }
   public function setDiscountedPriceAttribute($value)
   {
      $this->attributes['discounted_price'] = round(intval(Helper::persian2LatinDigit(str_replace(',','',str_replace('،','',$value)))),-3,PHP_ROUND_HALF_UP);
   }
   public function setMobileAttribute($value)
   {
      $this->attributes['mobile'] = Helper::persian2LatinDigit($value);
   }
   public function setPasswordAttribute($value)
   {
      $this->attributes['password'] = bcrypt(Helper::persian2LatinDigit($value));
   }


?>
