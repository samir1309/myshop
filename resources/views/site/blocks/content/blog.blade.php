<div class="bg-two blog-home p-md-2 p-sm-2 p-xs-1">
    {{-- <div class="bartitle max-content mx-auto position-relative">
        <img srcset="{{asset('assets/site/images/kaj/end-title.png')}} 2x, {{asset('assets/site/images/kaj/end-title.png')}} 1x"
            src="{{asset('assets/site/images/kaj/end-title.png')}}" alt="" class="end">
        <h2 class="fw-bolder">
     مقالات مبتکر
        </h2>
        <img srcset="{{asset('assets/site/images/kaj/start-title.png')}} 2x, {{asset('assets/site/images/kaj/start-title.png')}} 1x"
            src="{{asset('assets/site/images/kaj/start-title.png')}}" alt="" class="start">
    </div> --}}
    <div class="container">
        <div class="px-2">
            <div class="barnew position-relative">
                <hr>
                <p class="h6 text-center m-auto px-3 position-absolute top-0 bottom-0 end-0 start-0">
                   مقالات مبتکر
                </p>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="large-12 columns">
                    <div class="owl-carousel-blog owl-theme my-0">
                        @foreach($articles as $blog)
                            <div class="item p-2 px-xs-1">
                                <a href="{{route('site.blog.detail',['id'=>$blog->id])}}">
                                    <div class="card border-0 rounded-0">
                                        <figure class="m-0">
                                            <div class="imgbox">
                                                <img  loading="lazy" src="{{asset('assets/uploads/content/art/medium/'.@$blog->image)}}" alt="{!! @$blog->title !!}" width="100%" height="auto" />
                                            </div>
                                        </figure>
                                        <p class="h4">
                                            {!! @$blog->title !!}
                                        </p>
                                        <div class="caption">
                                            <p>
                                                {!! strip_tags(\Illuminate\Support\Str::words($blog->description,30)) !!}
                                            </p>
                                        </div>
                                        <div class="ic mt-2">
                                            <ul class="p-0 m-0">
                                                <li class="float-end list-unstyled ms-4">
                                                    <p class="m-0 d-flex align-items-center text-secondary">
                                                        {{$blog->view}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye text-one ms-2" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
