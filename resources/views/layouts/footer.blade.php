
<footer class="site-footer">
    <div class="container">
        <img src="/images/logo-footer.png" alt="Site Name">

        <address>
            <p>A dedication to Westlife<br><a href="mailto:info@bandname.com">westlife@gmail.com</a></p>
        </address>

        <form action="/subscribe" class="newsletter-form" method="POST">
            @csrf
            <input type="email" placeholder="Subscribe for more..." name="email">
            <input type="submit" value="Subscribe" class="button cut-corner" id="subscribe">
        </form>
        @if ($errors->err->has('email'))
            <script type="text/javascript">
                $(window).load(function() {
                    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
                });
            </script>
            <div><strong style="font-size: 18px;">{{ $errors->err->first('email') }}</strong></div>
        @endif

        <!-- Modal -->
        <button type="button" class="d-none" data-toggle="modal" data-target="#Modal" id="launch">modal</button>

        <div class="modal fade" id="Modal" tabindex="-1" role="dialog"
             aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: #333333;">
                    <div class="modal-header">
                        <h3 class="modal-title text-white" id="ModalLabel">Subscription</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-white text-left" style="font-size: 16px;">

                        Thanks for your subscription! <br>
                        An Email has been sent to your mail address.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn button" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        @if(session()->get('message') === 'subscribed')
            <script type="text/javascript">
                $('#launch').click()
            </script>
        @endif
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div> <!-- .social-links -->

        <p class="copy">Copyright 2018 Westlife. Designed by Themezy, modified by students of FIT. All right reserved</p>
    </div>
</footer> <!-- .site-footer -->
