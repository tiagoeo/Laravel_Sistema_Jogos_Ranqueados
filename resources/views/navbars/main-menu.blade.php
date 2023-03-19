<main>
    @guest
    <div class="ui placeholder segment ui autumn leaf" id="uiLogin">
        <div class="ui two column very relaxed stackable grid">
            <div class="column">
                <form class="ui form" id="formularioLoginMenu">
                    @csrf
                    <div class="field" id="fieldEmailLoginMenu">
                        <label>Email</label>
                        <div class="ui left icon input">
                            <input type="text" placeholder="Email" name="email" id="emailLoginMenu">
                            <i class="user icon"></i>
                        </div>
                        <div id="messageEmailLoginMenu">
                        </div>
                    </div>
                    <div class="field" id="fieldPasswordLoginMenu">
                        <label>@lang('welcome.password')</label>
                        <div class="ui left icon input">
                            <input type="password" name="password" id="passwordLoginMenu">
                            <i class="lock icon"></i>
                        </div>
                        <div id="messagePasswordLoginMenu">
                        </div>
                        <div id="messageLoginMenu">
                        </div>
                    </div>
                    <div class="ui blue submit button" id="btnLoginMenu">
                        <i class="sign-in icon"></i>
                        @lang('welcome.login')
                    </div>
                </form>
            </div>
            <div class="middle aligned column">
                <div class="ui big button" id="btnOpenRegisterModal">
                    <i class="signup icon"></i>
                    @lang('welcome.register')
                </div>
            </div>
        </div>
        <div class="ui vertical divider" id="ou">
            @lang('welcome.or')
        </div>
    </div>
    @endguest

    @auth
    <div class="ui placeholder segment ui autumn leaf" id="dashboardMenu">
        <div class="ui two column very relaxed stackable grid">
            <div class="column">
                <form class="ui form" id="formularioDashboardMenu">
                    <div class="field" id="fieldNameDashboardMenu">
                        <label>@lang('welcome.user')</label>
                        <div class="ui left icon input disabled">
                            <input type="text" placeholder="{{ Auth::user()->name }}">
                            <i class="bug icon"></i>
                        </div>
                        <div id="messageNameDashboardMenu">
                        </div>
                    </div>
                    <div class="field" id="fieldEmailDashboardMenu">
                        <label>Email</label>
                        <div class="ui left icon input disabled">
                            <input type="text" placeholder="{{ Auth::user()->email }}">
                            <i class="envelope icon"></i>
                        </div>
                        <div id="messageEmailDashboardMenu">
                        </div>
                        <div id="messageDashboardMenu">
                        </div>
                    </div>
                    <!--<div class="ui blue submit button disabled" id="btnDashboardMenu">
                        Dashboard
                    </div> -->
                </form>
            </div>
            <div class="middle aligned column">
                <p id="lblMinhasPontuacoes"><i class="sort numeric up icon"></i><b>@lang('welcome.my_scores')</b></p>
                <div class="ui two column centered grid">
                    <div class="column">
                    <table class="ui attached table">
                        <thead>
                        <tr><th class="ten wide">@lang('welcome.linked_games')</th>
                        <th class="six wide">@lang('welcome.points')</th>
                        </tr></thead>
                        <tbody id="minhasPontuacoes">
                        </tbody>
                        <tfoot id="meuTotalJogos">
                            <tr>
                                <th>@lang('welcome.total_games')</th>
                                <th>0</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical divider" id="ou"></div>
    </div>
    @endauth
</main>