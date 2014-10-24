{assign var="map_provider" value=$addons.hola_mundo.map_provider}
{assign var="map_container" value="map_canvas"}

    <div class="ty-hola-mundo">
        <div class="ty-hola-mundo__map-wrapper" id="{$map_container}"></div>
        <div class="ty-wysiwyg-content ty-hola-mundo__locations-wrapper" id="mundos_list_box">
ffffffffffffffffff
        </div>
    </div>

    <p class="ty-no-items">{__("no_data")}</p>
<div>
Your current position is:
    <div id="map_canvas" style="width:1000px; height:300px;">

</div>
  </div>
{capture name="mainbox_title"}{__("hola_mundo")}{/capture}
