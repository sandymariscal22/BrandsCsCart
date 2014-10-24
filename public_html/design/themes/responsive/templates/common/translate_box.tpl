<div id="translate_box" class="hidden ty-translate-box">
    <div class="hidden" id="translate_dialog_header" title="{__("text_editing")}"></div>

    {if $languages|sizeof > 1}
        <div id="translate_box_menu_language_selector" class="ty-translate-box__lang">
            {if !"ULTIMATE:FREE"|fn_allowed_for}
                <div id="translate_box_language_selector">
                {include file="common/select_object.tpl" style="graphic" link_tpl="design_mode.get_langvar"|fn_link_attach:"lang_code=" items=$languages selected_id=$smarty.const.CART_LANGUAGE key_name="name" suffix="translate_box" display_icons=true}
                </div>
            {/if}
        </div>
    {/if}

    <div id="orig_phrase" class="ty-translate-box__original"></div>

    <input id="tbox_descr_sl" type="hidden" name="descr_sl" value="" />
    <textarea id="trans_val" class="ty-translate-box__text" cols="40" rows="3"></textarea>

    <div class="buttons-container ty-right">
        <a class="cm-dialog-closer cm-translate-cancel ty-btn">{__("cancel")}</a>&nbsp;&nbsp;&nbsp;
        {include file="buttons/button.tpl" but_text=__("update_text") but_meta="cm-translate-save ty-btn__secondary"}
    </div>

</div>
{script src="js/tygh/translation_mode.js"}