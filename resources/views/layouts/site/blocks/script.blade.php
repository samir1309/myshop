@if(@Request::segments()[0] !== "cat")
<script src="{{asset('assets/site/js/owlcarousel/highlight.min.js')}}"></script>
<script src="{{asset('assets/site/js/owlcarousel/app.min.js')}}"></script>
<script src="{{asset('assets/site/js/zoomplus/magiczoomplus.js?v0.01')}}"></script>
<script src="{{asset('assets/site/js/zoomplus/prettify.min.js')}}"></script>
<script src="{{asset('assets/site/js/zoomplus/zoom.js?v0.01')}}"></script>
@endif
<script src="{{asset('assets/site/js/owlcarousel/owl.carousel.min.js?v0.09')}}"></script>
<script src="{{asset('assets/site/js/popper.min.js')}}"></script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/kaj.min.js?v0.03')}}"></script>
<script src="{{asset('assets/site/js/jquery-ui.min.js')}}"></script>

{{-- <script> --}}
{{--     window.onload = function () { --}}
{{--         setTimeout(function () { --}}
{{--             var loader = document.getElementsByClassName("loader")[0]; --}}
{{--             loader.className = "loader fadeout"; --}}
{{--            setTimeout(function () { loader.style.display = "none" }, 3000) --}}
{{--         }, 200) --}}
{{--     } --}}
{{-- </script> --}}
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}
@if(@Request::segments()[0] !== "cat")
var mzOptions = {
	textExpandHint: "برای بزرگنمایی کلیک کنید",
	zoomWidth: 300,
    zoomHeight: 300,
    zoomMode: "magnifier",
    expandZoomOn: "always",
    expandCaption: false,
    history: false,
    hint: "off",
    smoothing: false,
    upscale: false,
    rightClick: true,
    selectorTrigger: "hover"
};
@endif

</script>
@if(@Request::segments()[0] !== "cat")
<script>
    function read_more() {
var readmore = $('.read_more');
var comment = $('.review_comment p').text();

//goes through each index of the array of 'review_comment p'
$('.review_comment p').each(function(i){
  //calculates height of comment variable
  var commentheight = $(this).height();
  //calculates scroll height of comment on each div
  var scrollcommentheight =  $('.review_comment p')[i].scrollHeight;
  console.log("This is the comment height" + ' - ' + commentheight);
  console.log("This is the scroll height" + ' - ' + scrollcommentheight);
//if comment height is same as scroll height then hide read more button
  if (commentheight == scrollcommentheight){
    $(this).siblings(readmore).hide();
  }
//otherwise read more button shows
  else {
    $(this).siblings(readmore).text("Read More");
  }
});


readmore.on('click', function() {
    var $this = $(this);
    event.preventDefault();

    $this.siblings('.review_comment p').toggleClass('active');

    if ($this.siblings('.review_comment p').text().length < 230) {
      $this.text("بیشتر بخوانید");
    }
    if ($('.review_comment p').hasClass('active')) {
      $this.text("بستن");
    } else {
      $this.text("بیشتر بخوانید");
    }
  });
};

$(function() {
  //Calling function after Page Load
  read_more();
});
</script>
@endif
@yield('js')

@include('layouts.site.blocks.vue')
