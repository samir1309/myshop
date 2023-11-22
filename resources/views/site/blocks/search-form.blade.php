<form method="GET" action="{{URL::action('Site\HomeController@getSearch2')}}" class="m-0 me-auto">
	<div class="position-relative forminp">
		<input type="search" name="search" id="" class="form-control form-control-sm bg-transparent border-0 h-100" placeholder="جستجو برند یا محصول...">
		<ul class="p-0 m-0 position-absolute start-0 form-bt top-0 bottom-0 d-flex align-items-center">
			<li class="float-end list-unstyled">
				<button type="submit" class="btn text-secondary d-flex bg-transparent">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
				</button>
			</li>
		</ul>
	</div>
</form>