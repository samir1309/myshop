
                    @foreach($category_footer as $key => $main)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle @if($key==0) active @endif" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{@$main->title}}</a>
        <ul class="dropdown-menu" aria-labelledby="demoMenu">
            @foreach($main->childs as $child)
                <li><a class="dropdown-item" href="#">{{$child->title}}</a></li>
            @endforeach
        </ul>
    </li>
@endforeach

