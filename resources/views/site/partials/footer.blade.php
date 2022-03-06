<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-dark white">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-3 col-md-3 white">
                    <h5 class="title">Customer Services</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#">Help center</a></li>
                        <li> <a href="#">Money refund</a></li>
                        <li> <a href="#">Terms and Policy</a></li>
                        <li> <a href="#">Open dispute</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">My Account</h5>
                    <ul class="list-unstyled">
                        <li> <a href="{{ route('login') }}"> User Login </a></li>
                        <li> <a href="{{ route('register') }}"> User register </a></li>
                        <li> <a href="{{ route('account.profile') }}"> Account Setting </a></li>
                        <li> <a href="{{ route('account.orders') }}"> My Orders </a></li>
                        <li> <a href="{{ route('wishlist.index') }}"> My Wishlist </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">About</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#"> Our history </a></li>
                        <li> <a href="#"> How to buy </a></li>
                        <li> <a href="#"> Delivery and payment </a></li>
                        <li> <a href="#"> Advertice </a></li>
                        <li> <a href="#"> Partnership </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3">
                    <article class="white">
                        <h5 class="title">Contacts</h5>
                        <p>
                            <strong>Email: </strong> {{ $settings['default_email_address'] }}
                            <br>
                            <strong>Phone: </strong> {{ $settings['phone_number'] }}
                            <br>
                            <strong>Fax:</strong> {{ $settings['fax_number'] }}
                        </p>

                        <div class="btn-group white">
                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="{{ $settings['social_facebook'] }}"><i
                                    class="fab fa-facebook-f  fa-fw"></i></a>
                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="{{ $settings['social_instagram'] }}"><i
                                    class="fab fa-instagram  fa-fw"></i></a>
                            <a class="btn btn-youtube" title="LinkedIn" target="_blank" href="{{ $settings['social_linkedin'] }}"><i
                                    class="fab fa-linkedin-in  fa-fw"></i></a>
                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="{{ $settings['social_twitter'] }}"><i
                                    class="fab fa-twitter  fa-fw"></i></a>
                        </div>
                    </article>
                </aside>
            </div>
            <!-- row.// -->
            <br>
        </section>
        
        <section class="footer-bottom text-center">
		
            <p class="text-white">{{ $settings["footer_copyright_text"] }}</p>
            <p class="text-muted"> &copy 2021 {{ $settings["site_name"] }} </p>
            <br>
        </section>
        <!-- //footer-top -->
    </div>
    <!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->