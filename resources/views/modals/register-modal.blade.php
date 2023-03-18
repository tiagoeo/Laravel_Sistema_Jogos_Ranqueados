<div class="ui modal long" id="registerModal">
    <i class="close icon"></i>
    <div class="header">
    <i class="signup icon"></i>
        @lang('modal.registration_form')
    </div>
    <div class="description">
    <div class="ui raised violet segment">
        <form class="ui form" id="formularioRegisterModal">
            @csrf
            <div class="field" id="fieldNameRegisterModal">
                <label>@lang('modal.nickname')</label>
                <input type="text" placeholder="@lang('modal.nickname')" name="name" id="nameRegisterModal">
                <div id="messageNameRegisterModal"></div>
            </div>
            <div class="field">
                <label>Email</label>
                <div class="two fields">
                <div class="field" id="fieldEmailRegisterModal">
                    <input type="text" placeholder="Email" name="email" id="emailRegisterModal">
                    <div id="messageEmailRegisterModal"></div>
                </div>
                <div class="field" id="fieldEmail2RegisterModal">
                    <input type="text" placeholder="@lang('modal.confirm_email')" id="email2RegisterModal">
                    <div id="messageEmail2RegisterModal"></div>
                </div>
                </div>
            </div>
            <div class="field">
                <label>@lang('welcome.password')</label>
                <div class="two fields">
                <div class="field" id="fieldPasswordRegisterModal">
                    <input type="password" placeholder="@lang('welcome.password')" name="password" id="passwordRegisterModal">
                    <div id="messagePasswordRegisterModal"></div>
                </div>
                <div class="field" id="fieldPassword2RegisterModal">
                    <input type="password" placeholder="@lang('modal.repeat_password')" name="password_confirmation" id="password2RegisterModal">
                    <div id="messagePassword2RegisterModal"></div>
                </div>
                </div>
            </div>
            <div class="field" id="fieldCheckboxRegisterModal">
                <div class="ui checkbox">
                <input type="checkbox" id="checkboxRegisterModal">
                <label>@lang('modal.accept_terms_and_conditions')</label>
                </div>
            </div>
        </form>
        <div id="mensageRegisterModal"></div>
    </div>
    </div>
    <div class="actions">
    <div class="ui cancel button" onclick="clearRegister();"><i class="close icon"></i>@lang('modal.cancel')</div>
    <div class="ui button" id="btnRegisterModal"><i class="edit icon"></i>@lang('modal.register')</div>
    </div>
</div>