<h2 class="ui center aligned icon header" id="lblHeaderModoManutencao">
    <i class="circular settings icon"></i>
    Modo Manutenção
</h2>

@if ($pagina != null)
    <div class="ui grid center aligned">
        <div class="eight wide column" id="lblDescModoManutencao">
            <div class="ui segment">
            <p> Webite em manutenção - contate o administrador para mais informações.</p>
            </div>
        </div>
    </div>
@else
    <div class="ui grid center aligned">
        <div class="eight wide column">
            <table class="ui celled table" id="lblTabelaModoManutencao">
                <thead>
                    <tr>
                        <th>Sevidor</th>
                        <th class="ui center aligned">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr <?php echo('class="positive"') ?>>
                        <td>PHP</td>
                        <td class="ui center aligned"><i class="icon checkmark"></i>OK - Versão: <?php echo(phpversion()); ?></td>
                    </tr>
                    <tr class="positive">
                        <td>CSS3</td>
                        <td class="ui center aligned" id="testeCSSModoManutencao"><i class="icon close"></i>Falha</td>
                    </tr>
                    <tr class="negative" id="testeJavascriptModoManutencao">
                        <td>Javascript</td>
                        <td class="ui center aligned"><i class="icon close"></i>Falha</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <div>
 @endif