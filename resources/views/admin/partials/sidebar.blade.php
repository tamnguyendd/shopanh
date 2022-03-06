<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : (Route::currentRouteName() == 'admin.orders.show' ? 'active' : '') }}" href="{{ route('admin.orders.index') }}">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Orders</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.categories.index') active
            @elseif(Route::currentRouteName() == 'admin.categories.create') active
            @elseif(Route::currentRouteName() == 'admin.categories.edit') active
            @else
            @endif"
                href="{{ route('admin.categories.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Categories</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.attributes.index') active
            @elseif(Route::currentRouteName() == 'admin.attributes.create') active
            @elseif(Route::currentRouteName() == 'admin.attributes.edit') active
            @else
            @endif" href="{{ route('admin.attributes.index') }}">
                <i class="app-menu__icon fa fa-th"></i>
                <span class="app-menu__label">Attributes</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.brands.index') active
            @elseif(Route::currentRouteName() == 'admin.brands.create') active
            @elseif(Route::currentRouteName() == 'admin.brands.edit') active
            @else
            @endif" href="{{ route('admin.brands.index') }}">
                <i class="app-menu__icon fa fa-briefcase"></i>
                <span class="app-menu__label">Brands</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.products.index') active
            @elseif(Route::currentRouteName() == 'admin.products.create') active
            @elseif(Route::currentRouteName() == 'admin.products.edit') active
            @else
            @endif" href="{{ route('admin.products.index') }}">
                <i class="app-menu__icon fa fa-microchip"></i>
                <span class="app-menu__label">Products</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.slides.index') active
            @elseif(Route::currentRouteName() == 'admin.slides.create') active
            @elseif(Route::currentRouteName() == 'admin.slides.edit') active
            @else
            @endif" href="{{ route('admin.slides.index') }}">
                <i class="app-menu__icon fa fa-picture-o"></i>
                <span class="app-menu__label">Slides</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item 
            @if(Route::currentRouteName() == 'admin.sales.index') active
            @elseif(Route::currentRouteName() == 'admin.sales.create') active
            @elseif(Route::currentRouteName() == 'admin.sales.edit') active
            @else
            @endif" href="{{ route('admin.sales.index') }}">
                <i class="app-menu__icon fa fa-birthday-cake"></i>
                <span class="app-menu__label">Sales</span>
            </a>
        </li>
    </ul>
</aside>