<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                @foreach($categories as $cat)
                    @foreach($cat->items as $category)
                        @if ($category->items->count() > 0)
                            @foreach($category->items as $item)
                                @if(request()->is('category/'.$item->slug))
                                    <li class="nav-item dropdown active">
                                    @break
                                @elseif($loop->last)
                                <li class="nav-item dropdown">
                                @else
                                    @continue
                                @endif
                            @endforeach
                                <a class="nav-link dropdown-toggle" href="{{ route('category.show', $category->slug) }}" id="{{ $category->slug }}"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="{{ $category->slug }}">
                                    @foreach($category->items as $item)
                                        <a class="dropdown-item {{ (request()->is('category/'.$item->slug)) ? 'active' : '' }}" href="{{ route('category.show', $item->slug) }}">{{ $item->name }}</a>
                                        
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item {{ (request()->is('category/'.$category->slug)) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/others') }}" id="others"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other pages</a>
                    <div class="dropdown-menu" aria-labelledby="others">
                        
                        <a class="dropdown-item" href="{{ url('/others/filter') }}">filter</a>
                        <a class="dropdown-item" href="{{ url('/others/banners') }}">banners</a>
                        <a class="dropdown-item" href="{{ url('/others/features') }}">features</a>
                        <a class="dropdown-item" href="{{ url('/others/forms') }}">forms</a>
                        <a class="dropdown-item" href="{{ url('/others/itemside') }}">itemside</a>
                        
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>