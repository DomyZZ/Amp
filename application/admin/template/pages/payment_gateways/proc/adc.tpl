{if $type=='sci'}
    <div class="form-group">
        <label for="ps_account_email" class="control-label">{$lang.label.account_email}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[account_email]"
               id="ps_account_email"
               value="{$proc.payment_details.account_email}"/>
    </div>
    <div class="form-group">
        <label for="ps_sci_name" class="control-label">{$lang.label.sci_name}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[sci_name]"
               id="ps_sci_name"
               value="{$proc.payment_details.sci_name}"/>
    </div>
    <div class="form-group">
        <label for="ps_wallet" class="control-label">{$lang.label.usd_wallet}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[wallet]"
               id="ps_wallet"
               value="{$proc.payment_details.wallet}"/>
    </div>
    <div class="form-group">
        <label for="ps_sci_password" class="control-label">{$lang.label.sci_password}</label>
        <input type="text" class="form-control input-sm inline-block"
               name="payment_details[sci_pass]"
               id="ps_sci_pass" {($proc.payment_details.sci_pass)?"disabled placeholder='**hidden**'":""} />
        <a href="javascript:void(0)" class="{($proc.payment_details.sci_pass)?'':'hide'}" id="adc_set_new_sci_pass"
           onclick="set_new_pass('adc_set_new_sci_pass','adc_cancel_new_sci_pass','ps_sci_pass')">{$lang.label.set_new}</a>
        <a href="javascript:void(0)" class="hide" id="adc_cancel_new_sci_pass"
           onclick="cancel_new_pass('adc_set_new_sci_pass','adc_cancel_new_sci_pass','ps_sci_pass')">{$lang.label.cancel}</a>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-adc" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{/if}

{if $type=='api'}
    <div class="form-group">
        <label for="ps_api_account_email" class="control-label">{$lang.label.account_email}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[api][account_email]"
               id="ps_api_account_email"
               value="{$proc.payment_details.api.account_email}"/>
    </div>
    <div class="form-group">
        <label for="ps_api_wallet" class="control-label">{$lang.label.usd_wallet}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[api][wallet]"
               id="ps_api_wallet"
               value="{$proc.payment_details.api.wallet}"/>
    </div>
    <div class="form-group">
        <label for="ps_api_api_name" class="control-label">{$lang.label.api_name}</label>
        <input type="text" class="form-control input-sm"
               name="payment_details[api][api_name]"
               id="ps_api_api_name"
               value="{$proc.payment_details.api.api_name}"/>
    </div>
    <div class="form-group">
        <label for="ps_api_api_pass" class="control-label">{$lang.label.api_password}</label>
        <input type="text" class="form-control input-sm inline-block" name="payment_details[api][api_pass]"
               id="ps_api_api_pass" {($proc.payment_details.api.api_pass)?"disabled placeholder='**hidden**'":""} />
        <a href="javascript:void(0)" class="{($proc.payment_details.api.api_pass)?'':'hide'}" id="adc_set_new_api_pass"
           onclick="set_new_pass('adc_set_new_api_pass','adc_cancel_new_api_pass','ps_api_api_pass')">{$lang.label.set_new}</a>
        <a href="javascript:void(0)" class="hide" id="adc_cancel_new_api_pass"
           onclick="cancel_new_pass('adc_set_new_api_pass','adc_cancel_new_api_pass','ps_api_api_pass')">{$lang.label.cancel}</a>
    </div>

    <!-- Modal Help -->
    <div id="help-api-adc" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{/if}