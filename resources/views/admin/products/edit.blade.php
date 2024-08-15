@extends('layouts.admin.master')
@section('title','ویرایش')
@section('content')
<div class="container-fluid dashboard-content" id="blog68">
	<div class="row w-100 m-0">
		<div class="col-lg-12 mx-auto py-1 px-0">
			<h3 class="bg-white py-2 px-4 rounded-lg">
            ویرایش
			</h3>
			<div class="card rounded-lg border-0 p-3">
                <form method="post" 	action="{{ route('admin.products.edit', $data->id) }}"
                    enctype="multipart/form-data">

                    @include('admin.products.form');
                </form>


		<script>

$(document).ready(function(){

// قیمت اصلی
formatPrice($('input[name="old_price"]'));

// قیمت تخفیف
formatPrice($('input[name="price"]'));

function formatPrice(input) {

  let price = input.val();

  price = price.replace(/\D/g,'');
  price = price.replace(/(\d{3})/g, '$1,');

  input.val(price);

}

});
		</script>
                </form>
			</div>
		</div>
	</div>
</div>



@stop
