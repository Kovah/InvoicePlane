<div class="tab-info">

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label class="control-label">
                    <?php echo lang('currency_symbol'); ?>
                </label>
                <input type="text" name="settings[currency_symbol]" class="input-sm form-control"
                       value="<?php echo $this->mdl_settings->setting('currency_symbol'); ?>">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="settings[currency_symbol_placement]" class="control-label">
                    <?php echo lang('currency_symbol_placement'); ?>
                </label>
                <select name="settings[currency_symbol_placement]" class="input-sm form-control">
                    <option value="before"
                            <?php if ($this->mdl_settings->setting('currency_symbol_placement') == 'before') { ?>selected="selected"<?php } ?>><?php echo lang('before_amount'); ?></option>
                    <option value="after"
                            <?php if ($this->mdl_settings->setting('currency_symbol_placement') == 'after') { ?>selected="selected"<?php } ?>><?php echo lang('after_amount'); ?></option>
                    <option value="afterspace"
                            <?php if ($this->mdl_settings->setting('currency_symbol_placement') == 'afterspace') { ?>selected="selected"<?php } ?>><?php echo lang('after_amount_space'); ?></option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="settings[thousands_separator]" class="control-label">
                    <?php echo lang('thousands_separator'); ?>
                </label>
                <input type="text" name="settings[thousands_separator]" class="input-sm form-control"
                       value="<?php echo $this->mdl_settings->setting('thousands_separator'); ?>">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="settings[decimal_point]" class="control-label">
                    <?php echo lang('decimal_point'); ?>
                </label>
                <input type="text" name="settings[decimal_point]" class="input-sm form-control"
                       value="<?php echo $this->mdl_settings->setting('decimal_point'); ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label class="control-label">
                    <?php echo lang('tax_rate_decimal_places'); ?>
                </label>
                <select name="settings[tax_rate_decimal_places]" class="input-sm form-control"
                        id="tax_rate_decimal_places">
                    <option value="2"
                            <?php if ($this->mdl_settings->setting('tax_rate_decimal_places') == '2') { ?>selected="selected"<?php } ?>>
                        2
                    </option>
                    <option value="3"
                            <?php if ($this->mdl_settings->setting('tax_rate_decimal_places') == '3') { ?>selected="selected"<?php } ?>>
                        3
                    </option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label class="control-label">
                    <?php echo lang('monospaced_font_for_amounts'); ?>
                </label>
                <select name="settings[monospace_amounts]" class="input-sm form-control"
                        id="monospace_amounts">
                    <option value="0"><?php echo lang('no'); ?></option>
                    <option value="1"
                            <?php if ($this->mdl_settings->setting('monospace_amounts') == 1) { ?>selected="selected"<?php } ?>>
                        <?php echo lang('yes'); ?>
                    </option>
                </select>

                <p class="help-block">
                    <?php echo lang('example'); ?>:
                    <span style="font-family: Monaco, Lucida Console, monospace">
                        <?php echo format_currency(123456.78); ?>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <hr/>
    <h4><?php echo lang('calculation_order'); ?></h4>
    <br/>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label class="control-label">
                    <?php echo lang('invoice_discount_calculation'); ?>
                </label>
                <select name="settings[invoice_discount_calculation]" class="input-sm form-control"
                        id="invoice_discount_calculation">
                    <option value="pre-tax"
                            <?php if ($this->mdl_settings->setting('invoice_discount_calculation') == 'pre-tax') { ?>selected="selected"<?php } ?>>
                        <?php echo lang('pre-tax'); ?>
                    </option>
                    <option value="post-tax"
                            <?php if ($this->mdl_settings->setting('invoice_discount_calculation') == 'post-tax') { ?>selected="selected"<?php } ?>>
                        <?php echo lang('post-tax'); ?>
                    </option>
                </select>
                <p class="help-block">
                    <?php echo lang('invoice_discount_calculation_help'); ?>
                </p>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label class="control-label">
                    <?php echo lang('item_discount_calculation'); ?>
                </label>
                <select name="settings[item_discount_calculation]" class="input-sm form-control"
                        id="item_discount_calculation">
                    <option value="pre-tax"
                            <?php if ($this->mdl_settings->setting('item_discount_calculation') == 'pre-tax') { ?>selected="selected"<?php } ?>>
                        <?php echo lang('pre-tax'); ?>
                    </option>
                    <option value="post-tax"
                            <?php if ($this->mdl_settings->setting('item_discount_calculation') == 'post-tax') { ?>selected="selected"<?php } ?>>
                        <?php echo lang('post-tax'); ?>
                    </option>
                </select>
                <p class="help-block">
                    <?php echo lang('item_discount_calculation_help'); ?>
                </p>
            </div>
        </div>
    </div>

</div>