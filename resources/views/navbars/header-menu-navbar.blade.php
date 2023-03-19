<header>
    <div class="ui brown inverted menu">
        <a class="active orange item" href="/">
            <i class="home icon"></i>
            @lang('welcome.home')
        </a>
        @guest
        <div class="right menu">
            <a class="active blue item" id="btnOpenLoginModal">
                <i class="sign-in icon"></i>
                @lang('welcome.login')
            </a>
        </div>
        @endguest
        @auth
        <div class="right menu">
            <form action="/logout" method="POST">
                @csrf
                <a class="active positive item" href="/logout"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <i class="sign-out icon"></i>
                    @lang('welcome.logout')
                </a>
            </form>
            
        </div>
        @endauth
    </div>	
</header>