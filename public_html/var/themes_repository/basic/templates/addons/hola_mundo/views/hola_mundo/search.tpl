{assign var="map_customer_templates" value="C"|fn_get_hola_mundo_map_templates}
{assign var="map_container" value="map_canvas"}
    <div class="hola_mundos">
        <div class="float-left store-location-wrapper" id="{$map_container}"></div>
        <div class="wysiwyg-content" id="stores_list_box">
       
        </div>
    </div>


{capture name="mainbox_title"}{__("hola_mundo")}{/capture}
