@extends('layouts.admin.master')
@section('title','تصاویر محصول')
@section('content')
    <div class="container-fluid  dashboard-content" id="app34534567" v-cloak>
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row w-100 m-0">
            <div
                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-0 d-flex align-items-center justify-content-between bg-white">
                <div class="page-header m-0">
                    <h3 class="bg-white m-0 px-2 rounded-lg">
                        ویدیوهای محصول
                        {{$product->title}}
                    </h3>
                </div>
        </div>
        <br>

        <div class="card">

        <div class="row mb-3">
			<div class="col-12 d-sm-flex justify-content-between align-items-center">
				<h1 class="h3 mb-2 mb-sm-0 fs-5">لیست    محصولات<span class="badge bg-orange bg-opacity-10 text-orange">245</span></h1>
              

                <a href="{{ route('admin.products.video.add', $product->id ) }}">اضافه کردن فیلم جدید </a>
                
                
			</div>
		</div>
        


            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row w-100 m-0">
                <!-- ============================================================== -->
                <!-- basic table  -->
                <!-- ============================================================== -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="card">

                        <div class="card-body px-1">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row w-100 m-0">
                                        <div class="col-sm-12">
                                            <table class="table table-striped table-bordered first dataTable"
                                                   id="DataTables_Table_0" role="grid"
                                                   aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row">

                                                    <th class="sorting_asc text-center" tabindex="0"
                                                        aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        ردیف
                                                    </th>
                                                    <th class="sorting_asc text-center" tabindex="0"
                                                        aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        عنوان
                                                    </th>
                                                    <th class="sorting_asc text-center" tabindex="0"
                                                        aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        فایل
                                                    </th>
                                                    <th class="sorting_asc text-center" tabindex="0"
                                                        aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        عملیات
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $key=> $row)
                                                    <tr role="row" class="odd">

                                                        <td class=" text-center">
                                                            {{$key+1}}
                                                        </td>
                                                        <td class=" text-center">
                                                            {{$row->title}}                                                        </td>
                                                        <td class=" text-center">
                                                            {{$row->file}}                                                        </td>

                                                        <td class=" text-center">
                                                            <a href="{{url('/admin/products/video/edit/'.$row->id)}}"
                                                               class="btn btn-outline-secondary"><i
                                                                    class="icofont-edit text-success"></i></a>
                                                            <a href="{{url('/admin/products/video/delete/'.$row->id)}}"
                                                               onclick="confirm('آیا از حذف اطلاعات مطمئن هستید؟')"
                                                               class="btn btn-outline-secondary"><i
                                                                    class="icofont-trash text-danger"></i>
                                                            </a>
                                                            @if($row->thumbnail !== 1)
                                                            <a href="{{url('/admin/product/video/demo/'.$row->id)}}"
                                                               class="btn btn-outline-secondary"><i
                                                                    class="icofont-video text-info">
                                                                    انتخاب به عنوان دمو
                                                                </i>
                                                            </a>
                                                            @else
                                                                <a href="{{url('/admin/product/video/demo/'.$row->id)}}"
                                                                   class="btn btn-outline-secondary"><i
                                                                        class="icofont-star text-success">
                                                                       دموی دوره       {{$product->title}}
                                                                    </i>
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row w-100 m-0">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                 aria-live="polite"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card p-3 rounded-lg card-default">
                        <div id="list">
                            <div class="alert alert-info alert-dismissable" style="direction: rtl; margin: 0px auto;">
                                <i class="fa fa-check"></i>
                                <span style="font-size: 14px;">  با درگ کردن ترتیب مورد نظر را انتخاب نمایید.  </span>
                            </div>
                            <div id="response"></div>
                            <ul>
                                @foreach($videoSort as $rowSort)
                                    <li class="list-unstyled text-dark bg-light  my-2 p-3 shadow-sm rounded-lg" id="arrayorder_{!! stripslashes($rowSort['id']) !!}">{!! stripslashes($rowSort['title']) !!}
                                        <div class="clear"></div>
                                    </li>
                                @endforeach
                                <hr>

                            </ul>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>

@stop
@section('css')
    <style>
        ul {
            padding: 0px;
            margin: 0px;
        }
        #response {
            padding: 10px;
            background-color: #9F9;
            border: 2px solid #396;
            margin-bottom: 20px;
        }

        #list li {
            margin: 0 0 3px;
            padding: 8px;
            background-color: #333;
            color: #fff;
            list-style: none;
        }
    </style>
@stop

@section('js')

    <script>
        $(document).ready(function () {
            $('#check-all').change(function () {
                $(".delete-all").prop('checked', $(this).prop('checked'));
            });
        });
    </script>

    <script>
        var app = new Vue({
            el: '#app34534567',
            data: {
                number: 1,
                isHidden: false

            },
            methods: {
                plusMe: function () {
                    this.number = this.number + 1;
                }
            }
        })
    </script>
    <script type="text/javascript">
        $(function () {
            var opts = $('#optlist option').map(function () {
                return [[this.value, $(this).text()]];
            });

            $('#someinput').keyup(function () {
                var rxp = new RegExp($('#someinput').val(), 'i');
                var optlist = $('#optlist').empty();
                opts.each(function () {
                    if (rxp.test(this[1])) {
                        optlist.append($('<option/>').attr('value', this[0]).text(this[1]));
                    }
                });
            });
        });
    </script>

    <meta name="csrf-token" content="{!! csrf_token() !!}"/>
    <script type="text/javascript">
        $(document).ready(function () {
            function slideout() {
                setTimeout(function () {
                    $("#response").slideUp("slow", function () {
                    });

                }, 2000);
            }

            $("#response").hide();
            $(function () {
                $("#list ul").sortable({
                    opacity: 0.8, cursor: 'move', update: function () {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        var order = $(this).sortable("serialize") + '&update=update' + '&_token=' + CSRF_TOKEN;
                        $.post("{!! url('/admin/product/video/sort/'.$product->id) !!} ", order, function (theResponse) {
                            $("#response").html(theResponse);
                            $("#response").slideDown('slow');
                            slideout();
                        });

                    }
                });
            });

        });
    </script>
@stop
