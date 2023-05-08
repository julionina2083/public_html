{*
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

{extends file=$layout}

{block name='content'}
    {if isset($payment_options)}
        <div id="opc_payment_compability">
            <div class="ps-shown-by-js">
                <form action="{$urls.pages.order}">
                    <button id="choose_another_payment" class="btn btn-md btn-secondary" type="submit">
                        <i class="fa-pts fa-pts-exchange"></i>
                        {l s='Choose another payment method' mod='onepagecheckoutps'}
                    </button>
                </form>
            </div>
            {foreach from=$payment_options item="option" key="name_module"}
                {$option->getAdditionalInformation() nofilter}
                {if $option->getForm()}
                    {$option->getForm() nofilter}
                {else}
                    {if $option->getAction() neq ''}
                        <form id="payment-form" method="POST" action="{$option->getAction() nofilter}">
                            {foreach from=$option->getInputs() item=input}
                                <input type="{$input.type}" name="{$input.name}" value="{$input.value}">
                            {/foreach}
                            <div class="ps-shown-by-js">
                                <button id="placer_order_payment" class="button btn-primary btn-block" type="submit">
                                    {l s='Checkout' mod='onepagecheckoutps'}
                                </button>
                            </div>
                        </form>
                    {/if}
                {/if}
            {/foreach}
        </div>
    {/if}
{/block}