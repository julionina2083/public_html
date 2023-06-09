{**
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2020 PresTeamShop
 * @license   see file: LICENSE.txt
 * @category  PrestaShop
 * @category  Module
 *}

{if isset($overrides)}
    <div class="alert alert-danger">
        <p>{$message_override_text|escape:'htmlall':'UTF-8'}</p>
        <p>{$message_override_files|escape:'htmlall':'UTF-8'}</p>
        <p>&nbsp;</p>
        <ul>
            {foreach from=$overrides item=override}
                <li>{$override|escape:'quotes':'UTF-8'}</li>
            {/foreach}
        </ul>
    </div>
{else}
    {literal}
        <script>
            $(function() {
                $('#btn_update_version_module').on('click', function (){
                    $.ajax({
                        type: 'POST',
                        url: {/literal}'{$url_call|escape:'quotes':'UTF-8'}'{literal},
                        data: {
                            is_ajax: true,
                            action: 'updateVersion',
                            token: {/literal}'{$token|escape:'htmlall':'UTF-8'}'{literal},
                            dataType: 'html'
                        },
                        beforeSend: function () {
                            $('#btn_update_version_module').attr('disabled', true).addClass('disabled');
                        },
                        success: function (data) {
                            if (data == 'OK') {
                                location.reload();
                            } else {
                                if (typeof $.growl !== 'undefined') {
                                    data = JSON.parse(data);
                                    data['title'] = "";
                                    data['close'] = '&times;';
                                    data['duration'] = 10000;
                                    data['icon'] = 'fa-pts fa-pts-times fa-pts-2x pull-left';
                                    $.growl.error(data);
                                    $('#btn_update_version_module').attr('disabled', false).removeClass('disabled');
                                } else {
                                    console.log(data.message);
                                }
                            }
                        }
                    });
                });
            });
        </script>
    {/literal}

    <div class="bootstrap panel">
        {if empty($paramsBack.id_shop)}
            <div class="alert alert-warning">
                {$message_updated|escape:'htmlall':'UTF-8'} <b>{$module_version|escape:'htmlall':'UTF-8'}</b> {$message_module|escape:'htmlall':'UTF-8'} <b>{$module_name|escape:'htmlall':'UTF-8'}</b>.
                <br/><br/>
                {$message_click|escape:'htmlall':'UTF-8'}: <input id="btn_update_version_module" type="button" class="btn btn-primary btn-xs" value="{$message_now|escape:'htmlall':'UTF-8'}" />
            </div>
        {else}
            <div class="row mtop10">
                <div role="alert" class="alert alert-info clearfix">
                    <div class="col-xs-9 pts-nowrap col-sm-6 col-md-4 nopadding-xs">
                        <label class="pts-label-tooltip col-xs-12 nopadding control-label">
                            {$message_choose_all_stores|escape:'htmlall':'UTF-8'}
                        </label>
                    </div>
                    <div class="col-xs-12">
                        <p>
                            {$message_all_stores|escape:'htmlall':'UTF-8'}
                        </p>
                    </div>
                </div>
            </div>
        {/if}
    </div>
{/if}