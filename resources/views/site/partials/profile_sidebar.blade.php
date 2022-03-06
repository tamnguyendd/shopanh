<aside class="col-md-3">
    <nav class="list-group">
        <a class="list-group-item {{ Route::currentRouteName() == 'account.profile' ? 'active' : '' }}" href="{{ route('account.profile') }}"> Account overview  </a>
        <a class="list-group-item {{ Route::currentRouteName() == 'account.changepw' ? 'active' : '' }}" href="{{ route('account.changepw') }}"> Change Password </a>
        <a class="list-group-item {{ Route::currentRouteName() == 'account.address' ? 'active' : '' }}" href="{{ route('account.address') }}"> My Address </a>
        <a class="list-group-item {{ Route::currentRouteName() == 'account.orders' ? 'active' : '' }}" href="{{ route('account.orders') }}"> My Orders </a>
        <a class="list-group-item {{ Route::currentRouteName() == 'account.wishlist' ? 'active' : '' }}" href="{{ route('account.wishlist') }}"> My Wishlist </a>
        <a class="list-group-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form2').submit();"><i class="fas fa-sign-out-alt"></i> 
            {{ __('Logout') }}
        </a>
        <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</aside> <!-- col.// -->