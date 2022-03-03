<ul class="navbar-nav mr-auto">

    @foreach($items as $item)
        @php
            $children = (isset($item->children[0]))?$item->children:false;
        @endphp
        @if(!$children)
            <li class="nav-item">
                <a class="nav-link" href="{{$item->link()}}">{{$item->title}}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$item->title}}
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($children as $child)

                        @php
                            $childChildren = (isset($child->children[0]))?$child->children:false;
                        @endphp

                        @if(!$childChildren)
                            <a class="dropdown-item" href="#">{{$child->title}}</a>
                        @else
                            <a class="dropdown-item" href="#">{{$child->title}}</a>
{{--                             @TODO Submenu üçün dropdown yaratmaq lazimdir --}}
                        @endif
                    @endforeach
                </div>
            </li>
        @endif
    @endforeach

</ul>
