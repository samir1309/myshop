@extends('layouts.admin.master')
@section('title','سطح دسترسی')
@section('content')
<div class="container-fluid dashboard-content">
	<div class="row w-100 m-0">
		<div class="col-lg-12 mx-auto py-1 px-0">
			<h3 class="bg-white py-2 px-4 rounded-lg">
                سطح دسترسی
			</h3>
			<div class="card rounded-lg border-0 p-3">
                <form method="post" action="{{ route('admin.user.group.edit', $data->id) }}"
                    enctype="multipart/form-data">
                    @include('admin.user.group.form')
                </form>
			</div>
		</div>
	</div>
</div>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#select_all").on('click', function() {
                $.each($("input"), function(index, value) {
                    if (value.type == 'checkbox') {
                        value.checked = $("#select_all")[0].checked;
                    }
                });
            });
        });
     
    </script>
@endsection
