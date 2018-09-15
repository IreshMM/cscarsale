<div class="wrapper">
    <header>
        <nav>
            <div class="logo">
                <a href="#home" style="color: white">C&S CAR SALE</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">BUY</a></li>
                    <li><a href="#">SELL</a></li>
                    <li><a href="#">LEASE</a></li>
                    <li><a href="#">REGISTER</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul>
            </div>
        </nav>
    </header>
</div>

{{-- Enable scrolling effect --}}
<script type="text/javascript">
    $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })
</script>
