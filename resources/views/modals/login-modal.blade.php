<div class="ui modal long" id="loginModal">
    <i class="close icon"></i>
    <div class="header">
    <i class="user icon"></i>
    @lang('welcome.login')
    </div>
    <div class="description">
    <div class="ui raised violet segment">
        <form class="ui form" id="formularioLoginModal">
            @csrf
            <div class="field" id="fieldEmailLoginModal">
                <label>Email</label>
                <div class="ui left icon input">
                    <input type="text" placeholder="Email" name="email" id="emailLoginModal">
                    <i class="user icon"></i>
                </div>
                <div id="messageEmailLoginModal"></div>
            </div>
            <div class="field" id="fieldPasswordLoginModal">
                <label>@lang('welcome.password')</label>
                <div class="ui left icon input">
                    <input type="password" name="password" id="passwordLoginModal">
                    <i class="lock icon"></i>
                </div>
                <div id="messagePasswordLoginModal"></div>
            </div>
        </form>
        <div id="messageLoginModal"></div>
    </div>
    </div>
    <div class="actions">
    <div class="ui cancel button"><i class="close icon"></i>@lang('modal.cancel')</div>
    <div class="ui button" id="btnLoginModal"><i class="user icon"></i>@lang('welcome.login')</div>
    </div>
</div>