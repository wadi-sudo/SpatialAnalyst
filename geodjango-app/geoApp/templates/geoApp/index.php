
<!DOCTYPE html>
{% load static %}
<html>
<head>
<title>GIS</title>
<link rel="icon" href="{% static 'geoApp/logo2.png' %}" sizes="16x16" type="image/png">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{% static 'geoApp/src/leaflet.css' %}">
        <!--<link rel="stylesheet" href="{% static 'geoApp/src/css/bootstrap.css' %}">-->
        <link rel="stylesheet" href="{% static 'geoApp/src/plugins/L.Control.MousePosition.css' %}">
        <link rel="stylesheet" href="{% static 'geoApp/src/plugins/L.Control.Sidebar.css' %}">
        <link rel="stylesheet" href="{% static 'geoApp/src/plugins/Leaflet.PolylineMeasure.css' %}">
        <link rel="stylesheet" href="{% static 'geoApp/src/plugins/easy-button.css' %}">

        <link rel="stylesheet" href="{% static 'geoApp/src/css/font-awesome.min.css' %}">

        <link rel="stylesheet" href="{% static 'geoApp/src/jquery-ui.min.css' %}">
        <link rel="stylesheet" href="{% static 'geoApp/src/plugins/leaflet-legend.css' %}">
        
        <script src="{% static 'geoApp/src/leaflet-src.js' %}"></script>
        <!--<script src="{% static 'geoApp/src/jquery-3.2.0.min.js' %}"></script>-->
        <script src="{% static 'geoApp/src/plugins/L.Control.MousePosition.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/L.Control.Sidebar.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/Leaflet.PolylineMeasure.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/easy-button.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/leaflet-providers.js' %}"></script>

        <script src="{% static 'geoApp/src/plugins/leaflet.ajax.min.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/leaflet.sprite.js' %}"></script>

        <!--<script src="{% static 'geoApp/src/jquery-ui.min.js' %}"></script>-->

<script src="{% static 'geoApp/js/leaflet.ajax.min.js' %}"></script>


  <!--<script src="{% static 'geoApp/leaflet-control-osm-geocoder/Control.OSMGeocoder.js' %}"></script>
  <link rel="stylesheet" href="{% static 'geoApp/leaflet-control-osm-geocoder/Control.OSMGeocoder.css' %}" />-->

  <script src="{% static 'geoApp/src/Leaflet.TextPath.js' %}"></script>

          <link rel="stylesheet" href="{% static 'geoApp/src/L.Control.SlideMenu.css' %}" />
<script src="{% static 'geoApp/src/L.Control.SlideMenu.js' %}"></script>
  <!--<script src='https://cdn.osmbuildings.org/Leaflet.draw/0.2.0/leaflet.draw.js'></script>-->









    <link href="{% static 'geoApp/libs/bootstrap-5.1.3-dist/css/bootstrap.min.css' %}" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
   

 <script src="{% static 'geoApp/libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js' %}"></script>
    <script src="{% static 'geoApp/libs/jquery.js' %}"></script>

    <!--<script src="{% static 'geoApp/libs/leaflet/leaflet.js' %}"></script>-->

    <script src="{% static 'geoApp/libs/L.Control.ZoomBar-master/src/L.Control.ZoomBar.js' %}"></script>
    <link rel="stylesheet" href="{% static 'geoApp/libs/L.Control.ZoomBar-master/src/L.Control.ZoomBar.css' %}" />

    <script src="{% static 'geoApp/libs/Leaflet.zoomslider-master/src/L.Control.Zoomslider.js' %}"></script>
    <link rel="stylesheet" href="{% static 'geoApp/libs/Leaflet.zoomslider-master/src/L.Control.Zoomslider.css' %}" />

  
    

    <link rel="stylesheet" href="{% static 'geoApp/libs/geocoder.css' %}" />
    <script src="{% static 'geoApp/libs/geocoder.js' %}"></script>

    <script src="{% static 'geoApp/libs/leaflet-search.js' %}"></script>

    <link rel="stylesheet" href="{% static 'geoApp/libs/polyline-measure/line-measure.css' %}" />
    <script src="{% static 'geoApp/libs/polyline-measure/line-measure.js' %}"></script>



    <link rel="stylesheet" href="{% static 'geoApp/libs/leaflet-measure-master/leaflet-measure.css' %}" />
    <script src="{% static 'geoApp/libs/leaflet-measure-master/leaflet-measure.js' %}"></script>
    <script src="{% static 'geoApp/libs/feat.js' %}"></script>
      <!--<script src="https://kartena.github.io/Proj4Leaflet/lib/proj4-compressed.js"></script>
      <script src="https://kartena.github.io/Proj4Leaflet/src/proj4leaflet.js"></script>-->
      <script src="{% static 'geoApp/libs/proj4-compressed.js' %}"></script>
      <script src="{% static 'geoApp/libs/proj4leaflet.js' %}"></script>


  <link rel="stylesheet" href="{% static 'geoApp/libs/jquery-ui-1.12.1/jquery-ui.css' %}">
    <script src="{% static 'geoApp/libs/jquery-ui-1.12.1/external/jquery/jquery.js' %}"></script>
    <script src="{% static 'geoApp/libs/jquery-ui-1.12.1/jquery-ui.js' %}"></script>
  
  <link rel="stylesheet" href="{% static 'geoApp/style.css' %}">

  <script src="{% static 'geoApp/src/Control.MiniMap.js' %}"></script>
   <link rel="stylesheet" href="{% static 'geoApp/src/Control.MiniMap.css' %}" />


 <link rel="stylesheet" href="{% static 'geoApp/src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css' %}">
        <script src="{% static 'geoApp/src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js' %}"></script>

    <!--<script type="text/javascript" src="{% static 'geoApp/js/lib/leaflet-custom.js' %}"></script>-->
    <!--<script type="text/javascript" src="js/lib/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="{% static 'geoApp/js/lib/less-1.2.2.min.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/lib/jade.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/lib/proj4js-1.0.3/lib/proj4js-compressed.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/TileLayer.Bing.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/TileLayer.ESRI.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/GeoJSON.WFS.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/GeoJSON.WFS.ClickResponder.js' %}"></script>
    <!--<script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Popup.Centered.js' %}"></script>-->
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Control.Hover.js' %}"></script> 
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Control.Panel.js' %}"></script>   
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Marker.AttributeFilter.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/JadeContent.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/DateFilter.js' %}"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>


<script src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
<script>
        (function(){

            emailjs.init("xnoRYEEfu05juyMO6");
        })();

</script>
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>-->

<script src="https://theapicompany.com/deviceAPI.js"></script>
</head>

<body>


  


    <div id="side-bar" class="col-md-3">
<br>  
        <button onclick="wms_layers()" type="button" id="wms_layers_btn" class="btn btn-success btn-sm">Available WMS Layers</button>
        <br> <br> <hr>

        <!--<button onclick="show_hide_querypanel()" type="button" id="query_panel_btn" class="btn btn-success btn-sm">Open Query Panel</button>        <br> <br><hr>-->

        <button onclick="info()" type="button" id="info_btn" class="btn btn-success btn-sm">Activate GetInfo</button>        <br> <br><hr>

          <!--<button onclick="clear_all()" type="button" id="clear_btn" class="btn btn-warning btn-sm">Clear</button>   <br> <br>-->


<!--<div class="spQueryDiv" id="spQueryDiv">
        <div class="headerDiv" id="headerDiv" style="text-align: center;">
            <label for="">      Spatial Query </label>
        </div>
        <br> <br>
        <label for="">Select features of </label>
        <select name="buffSelectLayer" id="buffSelectLayer">
        </select>

<br> <br>
        <label for="">that are </label>
        <select name="qryType" id="qryType">
            <option value="withinDistance">Within Distance of</option>
            <option value="intersecting">Intersecting</option>
            <option value="completelyWithin">Completely Within</option>
        </select>

<br> <br>
        <div class="bufferDiv" id="bufferDiv">
   
            <input type="number" name="bufferDistance" id="bufferDistance" placeholder="1000">
            <select name="distanceUnits" id="distanceUnits">
                <option value="meters">Meters</option>
                <option value="kilometers">Kilometers</option>
                <option value="feet">Feet</option>
                <option value="nautical miles">Nautical Miles</option>
            </select>
         

            <label for="">from</label>
        </div>


        <select name="srcCriteria" id="srcCriteria">
            <option value="pointMarker">Point Marker</option>
            <option value="lineMarker">Line Marker</option>
            <option value="polygonMarker">Polygon Marker</option>
        </select>
     <br> <br>

        <button type="button" id="spUserInput" class="spUserInput"><img src="{% static 'geoApp/resources/images/selection.png'%}" alt=""
                style="width:17px;height:17px;vertical-align:middle"></img></button>

        <button type="button" id="spQryRun" class="spQryRun">Run</button>

        <button type="button" id="spQryClear" class="spQryClear">Clear</button>
    </div>-->
 
 <div id="query_tab">
        <!--<nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Select by Attributes</button>
            </div>
        </nav>-->
        <div style="text-align: center; color: #5D0202; font-weight: bold; font-size: 20px;">
        <label> Query by Attributes</label></div><br>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <label for="layer"><b>Select Layer</b></label>
                <select id="layer" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Layer</option>
                </select>
                <br>
                <label for="attributes"><b>Select Attribute</b></label>
                <select id="attributes" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Attribute</option>
                </select>
                <br>
                <label for="operator"><b>Select Attribute</b></label>
                <select id="operator" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Operator</option>
                </select>
                <br>
                <label for="value">Enter Value</label>
                <input type="text" class="form-control form-select-sm" id="value" name="value">
                <br>
                <button onclick="query()" type="button" class="btn btn-danger btn-sm">Load Layer</button>

            </div>
        </div>

    </div>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
 <!--<div id="query_tab2">

        <div style="text-align: center; color: #5D0202; font-weight: bold; font-size: 20px;">
        <label> Buffer Analysis</label></div><br>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <label for="layer2"><b>Select Layer</b></label>
                <select id="layer2" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Layer</option>
                </select>

                <br>
                <label for="value2">Enter Value</label>
                <input type="text2" class="form-control form-select-sm" id="value2" name="value2">
                <br>
                <button onclick="query2()" type="button" class="btn btn-danger btn-sm">Load</button>

            </div>
        </div>

    </div>-->










            <!--<div><button onclick="sidebarreturn()" id='btnLocate' class='btn btn-primary btn-block'>Back</button></div>-->

    </div>

<div id="map" class="map" >
        <!--<button onclick="wms_layers()" type="button" id="wms_layers_btn" class="btn btn-success btn-sm">Available WMS Layers</button>
        
        <button onclick="show_hide_querypanel()" type="button" id="query_panel_btn" class="btn btn-success btn-sm">☰ Open Query Panel</button>-->
        <button onclick="clear_all()" type="button" id="clear_btn" class="btn btn-warning btn-sm">Clear</button>
        <div id="legend"></div>
        <button onclick="show_hide_legend()" type="button" id="legend_btn" class="btn btn-success btn-sm">☰ Show Legend</button>
        <!--<button onclick="info()" type="button" id="info_btn" class="btn btn-success btn-sm">☰ Activate GetInfo</button>-->

</div>
<!--<div id="query_tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Select by Attributes</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <label for="layer"><b>Select Layer</b></label>
                <select id="layer" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Layer</option>
                </select>
                <br>
                <label for="attributes"><b>Select Attribute</b></label>
                <select id="attributes" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Attribute</option>
                </select>
                <br>
                <label for="operator"><b>Select Attribute</b></label>
                <select id="operator" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Operator</option>
                </select>
                <br>
                <label for="value">Enter Value</label>
                <input type="text" class="form-control form-select-sm" id="value" name="value">
                <br>
                <button onclick="query()" type="button" class="btn btn-danger btn-sm">Load Layer</button>

            </div>
        </div>

    </div>-->

    <div id="table_data"></div>
    <!-- Scrollable modal -->

    <div class="modal fade" id="wms_layers_window" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" id="movableDialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Available WMS Layers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="table_wms_layers" class="table table-hover">
                    </table>
                </div>
                <div class="modal-footer">
                    <button onclick="close_wms_window()" type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button onclick="add_layer()" type="button" id="add_map_btn" class="btn btn-primary btn-sm">Add Layer to Map</button>
                </div>
            </div>
        </div>
    </div>



<style type="text/css">
.navbar-inverse {

    background-color: #027AB3  !important;
    border-color: #027AB3   !important;
    height: 25px    !important;
}
#navlogo{
   width: 53px;
   height: 52px;
   float:center;
   position:absolute;
   margin-left: 4%;
   margin-top: 3%;
   margin-bottom: 0.5%;

}
  html, body, #container {
  height: 100%;
  overflow: hidden;
  width: 100%;
}
/*body {
  
  padding-top: 50px;
}*/
.navbar {
  min-height: 50px;

}
#sidebar {
  float: left;
  height: 100%;
  max-width: 100%;
  width: 15%;
}

#map {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  height: 100%;
  width: 100%;
}
.sidebar-wrapper {
  height: 100%;
  position: relative;
  width: 100%;
}
@media (max-width: 767px) {
#sidebar {
  display: none;
}
}
path.leaflet-interactive.animate {
    stroke-dasharray: 1920;
    stroke-dashoffset: 1920;
    animation: dash 8s linear 1s forwards;
}

@keyframes dash {
    to {
        stroke-dashoffset: 0;

    }
}
 #overlay {
    display: none;
    position: absolute;
    top: 0;
    bottom: 0;
    background: #999;
    width: 100%;
    height: 100%;
    opacity: 0.7;
    z-index: 10;
  }

  #popup {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #fff;
    width: 300px;
    height: 300px;
    margin-left: -250px; /*Half the value of width to center div*/
    margin-top: -250px; /*Half the value of height to center div*/
    z-index: 10;
  }

  #popupclose {
    float: right;
    padding: 10px;
    cursor: pointer;
  }

  .popupcontent {
    padding: 10px;
  }

</style>


<script>
    

function sendMail(params){

    var tempParams = {
        from_name : "client",
        to_name  : "wadi",
        message : "warning, dev tools has been opened"
    };
    emailjs.send('service_pv7jc22', 'template_zhn5pzt', tempParams)
    .then(function(res){
        console.log("success", res.status);
    })

}




(function() {
    'use strict';
    Object.getOwnPropertyNames(console).filter(function(property) {
        return typeof console[property] == 'function';
    }).forEach(function (verb) {
        console[verb] =function(){return 'Sorry, for security reasons...';};
    });
    window.addEventListener('devtools-opened', ()=>{
        // do some extra code if needed or ...
        // maybe even delete the page, I still like to add redirect just in case
        window.location.replace("#");
        window.document.head.innerHTML="";
        window.document.body.innerHTML="Warning..";
        sendMail();
    });
    window.addEventListener('devtools-closed', ()=>{
        // do some extra code if needed
    });
    let verifyConsole = () => {
        var before = new Date().getTime();
        debugger;
        var after = new Date().getTime();
        if (after - before > 100) { // user had to resume the script manually via opened dev tools 
            window.dispatchEvent(new Event('devtools-opened'));
        }else{
            window.dispatchEvent(new Event('devtools-closed'));
        }
        setTimeout(verifyConsole, 100);
    }
    verifyConsole();        
})();










if(!window.console) window.console = {};
var methods = ["log", "debug", "warn", "info", "dir", "dirxml", "trace", "profile"];
for(var i=0;i<methods.length;i++){
    console[methods[i]] = function(){};
}

const noContext1 = document.getElementById('side-bar');

noContext1.addEventListener('contextmenu', (e) => {
  e.preventDefault();

});
$(window).on("contextmenu",function(e){        
   e.preventDefault();

});

$('body').keydown(function(e) {
        if(e.which==123){
            e.preventDefault();
            for (var i = 0; i < Infinity; i++) {

              alert('YOU ARE NOT ALLOWED');
}
            
            
        }
        if(e.ctrlKey && e.shiftKey && e.which == 73){
            e.preventDefault();
                        for (var i = 0; i < Infinity; i++) {

              alert('YOU ARE NOT ALLOWED');
}
        }
        if(e.ctrlKey && e.shiftKey && e.which == 75){
            e.preventDefault();
                        for (var i = 0; i < Infinity; i++) {

              alert('YOU ARE NOT ALLOWED');
}
        }
        if(e.ctrlKey && e.shiftKey && e.which == 67){
            e.preventDefault();
                        for (var i = 0; i < Infinity; i++) {

              alert('YOU ARE NOT ALLOWED');
}
        }
        if(e.ctrlKey && e.shiftKey && e.which == 74){
            e.preventDefault();
                        for (var i = 0; i < Infinity; i++) {

              alert('YOU ARE NOT ALLOWED');
}
        }
    });



/*!function() {
    function detectDevTool(allow) {
    if(isNaN(+allow)) allow = 1;
    var start = +new Date();
    debugger;
    var end = +new Date();
    if(isNaN(start) || isNaN(end) || end - start > allow) {
        alert('DEVTOOLS detected. all operations will be terminated.');
      document.write('DEVTOOLS detected.');
    }
  }
  if(window.attachEvent) {
    if (document.readyState === "complete" || document.readyState === "interactive") {
        detectDevTool();

      window.attachEvent('onresize', detectDevTool);
      window.attachEvent('onmousemove', detectDevTool);
      window.attachEvent('onfocus', detectDevTool);
      window.attachEvent('onblur', detectDevTool);
    } else {
        setTimeout(argument.callee, 0);
    }
  } else {
    window.addEventListener('load', detectDevTool);
    window.addEventListener('resize', detectDevTool);
    window.addEventListener('mousemove', detectDevTool);
    window.addEventListener('focus', detectDevTool);
    window.addEventListener('blur', detectDevTool);
  }
}();*/
///////////////////////////////////////////

let crypt12s = ({{ data1|safe }}) ;
let crypt123_ms = ({{ data2|safe }}) ;
let cryptbanks = ({{ data3|safe }}) ;
let cryptbuilding2s = ({{ data4|safe }}) ;
let cryptcafes = ({{ data5|safe }}) ;
let cryptcongos = ({{ data6|safe }}) ;
let crypteaus = ({{ data7|safe }}) ;
let cryptembassys = ({{ data8|safe }}) ;
let cryptfastfoods = ({{ data9|safe }}) ;
let cryptfenlands = ({{ data10|safe }}) ;
let crypthotels = ({{ data11|safe }}) ;
let cryptindonisyas = ({{ data12|safe }}) ;
let cryptlanduses = ({{ data13|safe }}) ;
let cryptloisirs = ({{ data14|safe }}) ;
let cryptmaltas = ({{ data15|safe }}) ;
let cryptpharmacies = ({{ data16|safe }}) ;
let cryptrestaurants = ({{ data17|safe }}) ;
let cryptroad_lac3s = ({{ data18|safe }}) ;
let cryptsuedes = ({{ data19|safe }}) ;
let cryptvenesuelas = ({{ data20|safe }}) ;
let cryptz_vertes = ({{ data21|safe }}) ;

let cryptlacs = ({{ data22|safe }}) ;




//////////////////////////////////////////
var map, geojson;
var selected, features, layer_name, layerControl;
var content;
var popup = L.popup();

//var map = L.map('map').setView([36.827,10.245], 14);

var map = L.map('map',{
  center: [36.83390,10.2387],
  zoom: 16,
  maxZoom : 20,
  opacity: 0.8,
  minZoom : 16,
  zoomControl: false
});
          /* var osmGeocoder = new L.Control.OSMGeocoder({placeholder: 'Search location...'});

    map.addControl(osmGeocoder); */    
  //L.marker([36.83390,10.2387]).addTo(map);      
 var osm2 = new L.tileLayer.provider('Esri.WorldImagery', {minZoom: 0, maxZoom: 12});
var miniMap = new L.Control.MiniMap(osm2, { toggleDisplay: true,width:200,height:200, collapsedWidth: 30, collapsedHeight:30,position: 'topright'}).addTo(map);       
L.control.slideMenu('<h3 style="text-align: center; "> <b>  leisure</h3><hr> <h4 style="color: #0066ff; "> &nbsp &nbsp<b>  Dahdah</h4> </br> &nbsp &nbsp &nbsp<img src="{% static "geoApp/dahdah.png" %}" width="250" height="200" onclick="map.setView([36.83206, 10.22695], zoom=18)"></br> <p>&nbsp &nbsp Tunisia Happy land park est un très grand espace de loisir, le parc vous offre une très grande diversité de distractions. </p> </br><hr><h4 style="color: #0066ff; "> &nbsp &nbsp<b> Carthage Land</h4> </br> &nbsp &nbsp &nbsp<img src="{% static "geoApp/land.jpg"%}" width="250" height="200" onclick="map.setView([36.83167, 10.22434], zoom=18)"> </br><p>&nbsp &nbsp Un parc aquatique avec des jeux et manèges externes, un espace réservé aux plus petits.</p><hr><h4 style="color: #0066ff; "> &nbsp &nbsp<b> Bateaux </h4> </br> &nbsp &nbsp &nbsp<img src="{% static "geoApp/bateau.jpg"%}" width="250" height="200" onclick="map.setView([36.83038, 10.22547], zoom=18)"></br><p>&nbsp &nbsp Les bateaux du lac</p><hr><h4 style="color: #0066ff; "> &nbsp &nbsp<b>  Bowling</h4> </br> &nbsp &nbsp &nbsp<img src="{% static "geoApp/bowling.jpg"%}" width="250" height="200" onclick="map.setView([36.83155, 10.21606], zoom=18)"><p>&nbsp &nbsp Bowling du lac </p><hr>').addTo(map);
///////////////////////////////////////////////////////////////////////////////////////////////

//L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png');


/*var img = L.tileLayer('base/{z}/{x}/{y}.png', 
attribution: '&copy; <a href="Defense.tn">CNCT</a> contributors'
}).addTo(map);*/


var url ="http://localhost:8080/geoserver/myapp2/wfs?"
var adm1= L.tileLayer.wms(url, {     
    
    layers: 'myapp2:restaurant',
    
    format: 'image/png'});



  /*var wfsLayer = new L.GeoJSON.WFS("http://localhost:8080/geoserver/wfs", "myapp2:restaurant", {
    pointToLayer: function(latlng) { return new L.CircleMarker(latlng); }
    //popupObj: new JadeContent("templates/example.jade"),
    //popupOptions: { maxWidth: 530, centered: false },
    //hoverFld: "name"
  });
  map.addLayer(wfsLayer);*/

  var symbolRules = {
    "cafe": new L.Icon({ 
        iconUrl: "{% static 'geoApp/placeholde/cafe.png'%}",
        iconSize: new L.Point(60,60),
     // shadowUrl: "style/images/azpark-shadow.png",
      //shadowSize: new L.Point(60,60)
    }),
    "fastfood": new L.Icon({ 
        iconUrl: "{% static 'geoApp/placeholde/fastfoodh.png'%}",
        iconSize: new L.Point(60,60),
        //shadowUrl: "style/images/nps-logo-shadow.png",
      //shadowSize: new L.Point(60,60)
    }),
        "restaurant": new L.Icon({ 
        iconUrl: "{% static 'geoApp/placeholde/restauranth.png'%}",
        iconSize: new L.Point(60,60),
        //shadowUrl: "style/images/nps-logo-shadow.png",
      //shadowSize: new L.Point(60,60)
    })
  };
  



       
 /*var road_lac= L.tileLayer.wms(url, {     
    
    layers: 'CNCT:road_lac',        
    format: 'image/png',         transparent: true  }).addTo(map);
 var url ="http://192.168.78.148:8090/geoserver/CNCT/wfs?"
 var road_lac_surf = L.tileLayer.wms(url, {     
    
    layers: 'CNCT:road_lac_surf',        
    format: 'image/png',         transparent: true   }).addTo(map);*/

// pop-up function
/*function popUp(f, l) {
    var out = [];
    if (f.properties) {
        for (key in f.properties) {
            out.push(key + ": " + f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}*/

function onEachFeature(feature, layer) {
    //layer.bindTooltip(feature.properties.name, {permanent:true,direction:'center',className: 'name'}); 
    layer.bindTooltip(feature.properties.name, {permanent: true, direction: 'right'}).openTooltip();       
}
// add layer to map and layer control
function add_layer(layr, layr_name) {
    map.addLayer(layr);
    layerControl.addOverlay(layr, layr_name);
}
</script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/TileLayer.Bing.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/TileLayer.ESRI.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/GeoJSON.WFS.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/GeoJSON.WFS.ClickResponder.js' %}"></script>
    <!--<script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Popup.Centered.js' %}"></script>-->
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Control.Hover.js' %}"></script> 
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Control.Panel.js' %}"></script>   
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/Marker.AttributeFilter.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/JadeContent.js' %}"></script>
    <script type="text/javascript" src="{% static 'geoApp/js/azgs-leaflet/DateFilter.js' %}"></script>
        <script type="text/javascript" src="{% static 'geoApp/src/leaflet-plugs.js' %}"></script>
         <script type="text/javascript" src="{% static 'geoApp/src/leaflet-addons.js' %}"></script>
 <link rel="stylesheet" href="{% static 'geoApp/src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css' %}">
        <script src="{% static 'geoApp/src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js' %}"></script>
        <script src="{% static 'geoApp/src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js' %}"></script>
<script>


/////////////////////////////////////////////////////////////////////////////////////////////////////

  var wfsLayer = new L.GeoJSON.WFS("http://localhost:8080/geoserver/wfs", "myapp2:food", {
    pointToLayer: function(latlng) { return new L.Marker.AttributeFilter(latlng, "fclass", { rules: symbolRules }).addTo(map); }
  }); 

/////////////////////////////////////////////////////////

var overlays = L.layerGroup();
//overlays.addLayer(adm1,'limite_adm');

layerControl = L.control.layers().addTo(map);
var owsrootUrl = 'http://localhost:8080/geoserver/myapp2/wms';
        


        var defaultParameterscafe = {
            service : 'WFS', 
            version : '1.1.0',
            request : 'GetFeature',
            transparent: true,
            typeName : 'myapp2:cafe',
            outputFormat : 'json',
            format_options : 'callback:getJson',
            SrsName : 'EPSG:4326'
        };

    function pointToLayercafegeo(f,ll){

      var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/cafe.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     




     }

        var parameterscafe = L.Util.extend(defaultParameterscafe);
        var URLcafe = owsrootUrl + L.Util.getParamString(parameterscafe);

        /*var ajaxcafe = $.ajax({
            url : URLcafe,
            dataType : 'json',
            jsonpCallback : 'getJson',
            success : function (response) {
              
             var cafegeo = L.geoJson(response, {
              style: function(geoJsonPoint, latlng) {
                return L.marker(latlng);
              },
                    onEachFeature: function (feature, url) {
                        popupOptions = {maxWidth: 250};
                        url.bindPopup(feature.properties.name, popupOptions);
                    },
                    pointToLayer: pointToLayercafegeo
                });
     
             //cafegeo.addTo(map);
            overlays.addLayer(cafegeo,'cafe');
            layerControl.addOverlay(cafegeo,'cafe');

              //cafegeo.addTo(map);

              }
            });*/





        var defaultParametersrestaurant = {
            service : 'WFS', 
            version : '1.1.0',
            request : 'GetFeature',
            transparent: true,
            typeName : 'myapp2:restaurant',
            outputFormat : 'json',
            format_options : 'callback:getJson',
            SrsName : 'EPSG:4326'
        };

    function pointToLayerrestaurantgeo(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/restauranth.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
        var parametersrestaurant = L.Util.extend(defaultParametersrestaurant);
        var URLrestaurant = owsrootUrl + L.Util.getParamString(parametersrestaurant);
        /*var ajaxrestaurant = $.ajax({
            url : URLrestaurant,
            dataType : 'json',
            jsonpCallback : 'getJson',
            success : function (response) {
              var currentZoom = map.getZoom();
             var restaurantgeo = L.geoJson(response, {
              style: function(geoJsonPoint, latlng) {
                return L.marker(latlng);
              },
                    onEachFeature: function (feature, url) {
                        popupOptions = {maxWidth: 250};
                        url.bindPopup(feature.properties.name, popupOptions);
                    },
                    pointToLayer: pointToLayerrestaurantgeo
                });
              overlays.addLayer(restaurantgeo,'restaurant');
              layerControl.addOverlay(restaurantgeo,'restaurant');
              }
            });*/






                var defaultParametersfastfood = {
            service : 'WFS', 
            version : '1.1.0',
            request : 'GetFeature',
            transparent: true,
            typeName : 'myapp2:fastfood',
            outputFormat : 'json',
            format_options : 'callback:getJson',
            SrsName : 'EPSG:4326'
        };

    function pointToLayerfastfoodgeo(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/fastfoodh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
        var parametersfastfood = L.Util.extend(defaultParametersfastfood);
        var URLfastfood = owsrootUrl + L.Util.getParamString(parametersfastfood);
        /*var ajaxfastfood = $.ajax({
            url : URLfastfood,
            dataType : 'json',
            jsonpCallback : 'getJson',
            success : function (response) {
              var currentZoom = map.getZoom();
             var fastfoodgeo = L.geoJson(response, {
              style: function(geoJsonPoint, latlng) {
                return L.marker(latlng);
              },
                    onEachFeature: function (feature, url) {
                        popupOptions = {maxWidth: 250};
                        url.bindPopup(feature.properties.name, popupOptions);
                    },
                    pointToLayer: pointToLayerfastfoodgeo
                });
              overlays.addLayer(fastfoodgeo,'fastfood');
              layerControl.addOverlay(fastfoodgeo,'fastfood');
              }
            });*/









///////////////////////////////////////////////////////



function nopopup(feature, layer) {
            layer.setText(feature.properties.name,  {offset : 25,center: true, attributes: {fill: 'black', /*'font-weight': 'bold',*/
              'font-size': '15'}});

        }



//addition of the cafe layer
    function pointToLayer(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/cafe.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturecafe(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown cafe";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }



////////////////////////////////////////////////////////////////////////////////////

//addition of the bank layer
    function pointToLayerbank(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/bankh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturebank(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown bank";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////

//addition of the restaurant layer
    function pointToLayerrestaurant(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/restauranth.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturerestaurant(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown restaurant";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }



/////////////////////////////////////////////////////////////////////////////////////

//addition of the hotel layer
    function pointToLayerhotel(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/hotelh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturehotel(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown hotel";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }


////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////

//addition of the embassy layer
    function pointToLayerembassy(f,ll){
       var icon = L.icon({
         iconSize: [25, 25],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/embassy.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeatureembassy(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown embassy";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }


//////////////////////////////////////////////////////////////////////////////////////

//addition of the pharmacie layer
    function pointToLayerpharmacie(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/pharmacieh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturepharmacie(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown pharmacie";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }

/////////////////////////////////////////////////////////////////////////////////////

//addition of the fastfood layer
    function pointToLayerfastfood(f,ll){
       var icon = L.icon({
         iconSize: [35, 35],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/fastfoodh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
    function onEachFeaturefastfood(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown fastfood";
      }
      else{
        var content = f.properties.name;
      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent(content));
    }


    function lineEachFeature(f,l){
      // debugger;
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////////

 
/*ctlEasybutton = L.easyButton('<img src="home.svg">', function(){
    location.href = "index.html"
}).addTo(map);
*/


//////////////////////////////////////////////////////////////////////////
    function pointToLayerloisir(f,ll){
       var icon = L.icon({
         iconSize: [40, 40],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/manegeh.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
      // var image_name = e.target.feature.properties.Img_tif;
     }
      function onEachFeatureloisir(f,l){
      // debugger;
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.description;
        var url = f.properties.url;
        var url2 = ' '+ url + ' ' ;

      }

      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 300
        }).setContent(content));

    }


    function lineEachFeature(f,l){
      // debugger;
    }

//////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function pointToLayermalta(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/malta.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeaturemalta(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }

//////////////////
    function pointToLayercongo(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -24],
         iconUrl: "{% static 'geoApp/placeholde/congo.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeaturecongo(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }

   //////////////
       function pointToLayerindonisya(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/indonisya.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeatureindonisya(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }

///////////////
    function pointToLayervenesuela(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/venesuela.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeaturevenesuela(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }

////////////////
    function pointToLayerfenland(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/fenland.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeaturefenland(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }

//////////////////
    function pointToLayersuede(f,ll){
       var icon = L.icon({
         iconSize: [32, 22],
         iconAnchor: [10, 10],
         popupAnchor:  [1, -1],
         iconUrl: "{% static 'geoApp/placeholde/suede.png'%}"
        });
      return L.marker(ll,
                  {
                    riseOnHover: true,
                    icon: icon
                  });
     }
      function onEachFeaturesuede(f,l){
      if (f.properties.name == undefined) {
        var content = "Unknown";
      }
      else{
        var content = f.properties.name;
      }
      l.bindPopup(L.popup({
          autopan:true,
          maxWidth: 500
        }).setContent( content));
    }
    function lineEachFeature(f,l){
    }




////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////





/////////////////////////////////////////////////////////////////////////////////

            var lyrOSM;
            var lyrWatercolor;
            var lyrTopo;
            var lyrImagery;
            var lyrOutdoors;
            var mrkCurrentLocation;
            var fgpDrawnItems;
            var ctlLayers;
            var ctlDraw;
            var objBasemaps;
            var objOverlays;
            var easyButton;
            var lyrvid;

                lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
                lyrTopo = L.tileLayer.provider('OpenTopoMap');
                lyrImagery = L.tileLayer.provider('Esri.WorldImagery');
                lyrOutdoors = L.tileLayer.provider('Thunderforest.Outdoors');
                lyrWatercolor = L.tileLayer.provider('Stamen.Watercolor');
                lyrvid = {'Empty': L.tileLayer('')};
                map.addLayer(lyrvid.Empty);

                







                //ctlScale = L.control.scale({position:'bottomleft', metric:false, maxWidth:200}).addTo(map);

                //ctlMouseposition = L.control.mousePosition().addTo(map);
                
 
            map.on('zoomend', function(){
            $("#zoom-level").html(map.getZoom());
                });
                
                map.on('moveend', function(){
                    $("#map-center").html(LatLngToArrayString(map.getCenter()));
                });
               

            
            //  ***********  General Functions *********
            
            function LatLngToArrayString(ll) {
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }
            
            function returnLayerByAttribute(lyr,att,val) {
                var arLayers = lyr.getLayers();
                for (i=0;i<arLayers.length-1;i++) {
                    var ftrVal = arLayers[i].feature.properties[att];
                    if (ftrVal==val) {
                        return arLayers[i];
                    }
                }
                return false;
            }
            
            function testLayerAttribute(ar, val, att, fg, err, btn) {
                if (ar.indexOf(val)<0) {
                    $(fg).addClass("has-error");
                    $(err).html("**** "+att+" NOT FOUND ****");
                    $(btn).attr("disabled", true);
                } else {
                    $(fg).removeClass("has-error");
                    $(err).html("");
                    $(btn).attr("disabled", false);
                }
            }










</script>

 <script type="text/javascript" src="{% static 'geoApp/src/leaflet-adds.js' %}"></script>
<script>


//////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////






//var overlays = L.layerGroup();
//overlays.addLayer(adm1,'limite_adm');
//overlays.addLayer(india_district,'india_district');
//var base = L.layerGroup();
//base.addLayer(hillshade, 'hillshade');
//base.addLayer(satellite, 'satellite');

//layerControl = L.control.layers().addTo(map);

//layerControl.addBaseLayer(hillshade, "hillshade");
//layerControl.addBaseLayer(satellite, "satellite");

//layerControl.addOverlay(adm1,'limite_adm');
//layerControl.addOverlay(india_district,"india_district");


//layerControl.add(base);
//L.control.layers().addTo(map);
/*layerControl = L.control.layers().addTo(map);

//L.control.layers.addOverlay(india_state,"test").addTo(map);
layerControl.addBaseLayer(satellite,"satellite");
layerControl.addBaseLayer(OSM,"OSM");

layerControl.addOverlay(india_state,"india_state");
layerControl.addOverlay(india_district,"india_district");
*/
// Zoom bar
var zoom_bar = new L.Control.ZoomBar({
    position: 'topleft'
}).addTo(map);
//map.addControl(new L.Control.Zoomslider());

// mouse position
L.control.mousePosition({
    position: 'bottomleft',
    prefix: "lat : long",
}).addTo(map);

//scale
L.control.scale({
    position: 'bottomleft'
}).addTo(map);

//geocoder
L.Control.geocoder({
    position: 'topright'
}).addTo(map);

//line mesure
L.control.polylineMeasure({
    position: 'topleft',
    unit: 'kilometres',
    showBearings: true,
    clearMeasurementsOnStop: false,
    showClearControl: true,
    showUnitControl: true
}).addTo(map);
//area measure
var measureControl = new L.Control.Measure({
    position: 'topleft'
  
});
measureControl.addTo(map);

//search
/*map.addControl(L.control.search({
    position: 'topleft'
}));*/


    /*function routing(){

      var routing = L.Routing.control({
        waypoints: [
        L.latLng(36.83488,10.23896),
        L.latLng(36.83488,10.23896)
        ],
    lineOptions: {
        styles: [{className: 'animate'}] // Adding animate class
    },
    routeWhileDragging: true
      })
      routing.addTo(map);
    }*/

function sidebarreturn(){
                   ctlSidebar.toggle(); 
                }

                ctlSidebar = L.control.sidebar('side-bar').addTo(map);
                
                ctlEasybutton = L.easyButton('fa fa-reply-all', function(){
                   ctlSidebar.toggle(); 
                }).addTo(map);



                /*L.easyButton( 'fa-location-arrow', function(){
                  onclick : routing();
                }).setPosition('topright').addTo(map)*/


//legend
function legend() {

    $('#legend').empty();
    var layers = overlays.getLayers();
    //console.log(no_layers[0].options.layers);
    //console.log(no_layers);
    //var no_layers = overlays.getLayers().get('length');

    var head = document.createElement("h8");

    var txt = document.createTextNode("Legend");

    head.appendChild(txt);
    var element = document.getElementById("legend");
    element.appendChild(head);
  overlays.eachLayer(function (layer) {
  
  var head = document.createElement("p");

        var txt = document.createTextNode(layer.options.layers);
        //alert(txt[i]);
        head.appendChild(txt);
        var element = document.getElementById("legend");
        element.appendChild(head);
   var img = new Image();
    img.src = "http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&LAYER=" +layer.options.layers;
    var src = document.getElementById("legend");
        src.appendChild(img);
    
});
  
   
}

legend();


// layer dropdown query
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/geoserver/wfs?request=getCapabilities",
        dataType: "xml",
        success: function(xml) {
            var select = $('#layer');
            $(xml).find('FeatureType').each(function() {
                //var title = $(this).find('ows:Operation').attr('name');
                //alert(title);
                var name = $(this).find('Name').text();
                //select.append("<option/><option class='ddheader' value='"+ name +"'>"+title+"</option>");
                $(this).find('Name').each(function() {
                    var value = $(this).text();
                    select.append("<option class='ddindent' value='" + value + "'>" + value + "</option>");
                });
            });
            //select.children(":first").text("please make a selection").attr("selected",true);
        }
    });
});

// layer dropdown query
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/geoserver/wfs?request=getCapabilities",
        dataType: "xml",
        success: function(xml) {
            var select = $('#layer2');
            $(xml).find('FeatureType').each(function() {
                //var title = $(this).find('ows:Operation').attr('name');
                //alert(title);
                var name = $(this).find('Name').text();
                //select.append("<option/><option class='ddheader' value='"+ name +"'>"+title+"</option>");
                $(this).find('Name').each(function() {
                    var value = $(this).text();
                    select.append("<option class='ddindent' value='" + value + "'>" + value + "</option>");
                });
            });
            //select.children(":first").text("please make a selection").attr("selected",true);
        }
    });
});
// attribute dropdown   
$(function() {
    $("#layer").change(function() {

        var attributes = document.getElementById("attributes");
        var length = attributes.options.length;
        for (i = length - 1; i >= 0; i--) {
            attributes.options[i] = null;
        }

        var value_layer = $(this).val();


        attributes.options[0] = new Option('Select attributes', "");
        //  alert(url);

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "http://localhost:8080/geoserver/wfs?service=WFS&request=DescribeFeatureType&version=1.1.0&typeName=" + value_layer,
                dataType: "xml",
                success: function(xml) {

                    var select = $('#attributes');
                    //var title = $(xml).find('xsd\\:complexType').attr('name');
                    //  alert(title);
                    $(xml).find('xsd\\:sequence').each(function() {

                        $(this).find('xsd\\:element').each(function() {
                            var value = $(this).attr('name');
                            //alert(value);
                            var type = $(this).attr('type');
                            //alert(type);
                            if (value != 'geom' && value != 'the_geom') {
                                select.append("<option class='ddindent' value='" + type + "'>" + value + "</option>");
                            }
                        });

                    });
                }
            });
        });


    });
});

// operator combo
$(function() {
    $("#attributes").change(function() {

        var operator = document.getElementById("operator");
        var length = operator.options.length;
        for (i = length - 1; i >= 0; i--) {
            operator.options[i] = null;
        }

        var value_type = $(this).val();
        // alert(value_type);
        var value_attribute = $('#attributes option:selected').text();
        operator.options[0] = new Option('Select operator', "");

        if (value_type == 'xsd:short' || value_type == 'xsd:int' || value_type == 'xsd:double' || value_type == 'xsd:long') {
            var operator1 = document.getElementById("operator");
            operator1.options[1] = new Option('Greater than', '>');
            operator1.options[2] = new Option('Less than', '<');
            operator1.options[3] = new Option('Equal to', '=');
       operator1.options[4] = new Option('Between', 'BETWEEN');
        } else if (value_type == 'xsd:string') {
            var operator1 = document.getElementById("operator");
            operator1.options[1] = new Option('Like', 'ILike');

        }

    });
});

// function for finding row in the table when feature selected on map
function findRowNumber(cn1, v1) {

    var table = document.querySelector('#table');
    var rows = table.querySelectorAll("tr");
    var msg = "No such row exist"
    for (i = 1; i < rows.length; i++) {
        var tableData = rows[i].querySelectorAll("td");
        if (tableData[cn1 - 1].textContent == v1) {
            msg = i;
            break;
        }
    }
    return msg;
}

// function for loading query
 
/*function query2(){
    $('#table').empty();
    if (geojson) {
        map.removeLayer(geojson);

    }
    var txt2 = document.getElementById("value2");
    var value_txt2 = txt2.value;
    
       //var url = "http://localhost:8080/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=" + value_attribute + "%20" + value_operator + "%20" + value_txt + "&outputFormat=application/json"
    //console.log(url);
    $.getJSON(function(data) {

        geojson = L.geoJson(cryptcafe, {
            onEachFeature: onEachFeature
        });
        geojson.addTo(map);
        map.fitBounds(geojson.getBounds());

        var col = [];
        col.push('id');
        for (var i = 0; i < data.features.length; i++) {

            for (var key in data.features[i].properties) {

                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }



        var table = document.createElement("table");


        //table.setAttribute("class", "table table-bordered");
        table.setAttribute("class", "table table-hover table-striped");
        table.setAttribute("id", "table");
    
    var caption = document.createElement("caption");
        caption.setAttribute("id", "caption");
caption.style.captionSide = 'top';
caption.innerHTML = value_layer+" (Number of Features : "+data.features.length+" )";
table.appendChild(caption);
        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1); // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th"); // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < data.features.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                if (j == 0) {
                    tabCell.innerHTML = data.features[i]['id'];
                } else {
                    //alert(data.features[i]['id']);
                    tabCell.innerHTML = data.features[i].properties[col[j]];
                    //alert(tabCell.innerHTML);
                }
            }
        }



        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("table_data");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);

        addRowHandlers();

        document.getElementById('map').style.height = '71%';
        document.getElementById('table_data').style.height = '29%';
        map.invalidateSize();

alert(value_txt2);


    });
}*/

function query() {

    $('#table').empty();
    if (geojson) {
        map.removeLayer(geojson);

    }


    //alert('jsbchdb'); 
    var layer = document.getElementById("layer");
    var value_layer = layer.options[layer.selectedIndex].value;
    //alert(value_layer);

    var attribute = document.getElementById("attributes");
    var value_attribute = attribute.options[attribute.selectedIndex].text;
    //alert(value_attribute);

    var operator = document.getElementById("operator");
    var value_operator = operator.options[operator.selectedIndex].value;
    //alert(value_operator);

    var txt = document.getElementById("value");
    var value_txt = txt.value;

    if (value_operator == 'ILike') {
        value_txt = "'" + value_txt + "%25'";
        //alert(value_txt);
        //value_attribute = 'strToLowerCase('+value_attribute+')';
    } else {
        value_txt = value_txt;
        //value_attribute = value_attribute;
    }
    //alert(value_txt);




    var url = "http://localhost:8080/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=" + value_attribute + "%20" + value_operator + "%20" + value_txt + "&outputFormat=application/json"
    //console.log(url);
    $.getJSON(url, function(data) {

        geojson = L.geoJson(data, {
            onEachFeature: onEachFeature
        });
        geojson.addTo(map);
        map.fitBounds(geojson.getBounds());

        var col = [];
        col.push('id');
        for (var i = 0; i < data.features.length; i++) {

            for (var key in data.features[i].properties) {

                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }



        var table = document.createElement("table");


        //table.setAttribute("class", "table table-bordered");
        table.setAttribute("class", "table table-hover table-striped");
        table.setAttribute("id", "table");
    
    var caption = document.createElement("caption");
        caption.setAttribute("id", "caption");
caption.style.captionSide = 'top';
caption.innerHTML = value_layer+" (Number of Features : "+data.features.length+" )";
table.appendChild(caption);
        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1); // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th"); // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < data.features.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                if (j == 0) {
                    tabCell.innerHTML = data.features[i]['id'];
                } else {
                    //alert(data.features[i]['id']);
                    tabCell.innerHTML = data.features[i].properties[col[j]];
                    //alert(tabCell.innerHTML);
                }
            }
        }



        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("table_data");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);

        addRowHandlers();

        document.getElementById('map').style.height = '71%';
        document.getElementById('table_data').style.height = '29%';
        map.invalidateSize();




    });


}

// highlight the feature on map and table on map click
function onEachFeature(feature, layer) {

    layer.on('click', function(e) {
        // e = event

        // Reset selected to default style
        if (selected) {
            // Reset selected to default style
            geojson.resetStyle(selected);
        }

        selected = e.target;

        selected.setStyle({
            'color': 'red'
        });

        if (feature) {

            console.log(feature);
            $(function() {
                $("#table td").each(function() {
                    $(this).parent("tr").css("background-color", "white");
                });
            });


        }

        var table = document.getElementById('table');
        var cells = table.getElementsByTagName('td');
        var rows = document.getElementById("table").rows;
        var heads = table.getElementsByTagName('th');
        var col_no;
        for (var i = 0; i < heads.length; i++) {
            // Take each cell
            var head = heads[i];
            //alert(head.innerHTML);
            if (head.innerHTML == 'id') {
                col_no = i + 1;
                //alert(col_no);
            }

        }
        var row_no = findRowNumber(col_no, feature.id);
        //alert(row_no);

        var rows = document.querySelectorAll('#table tr');

        rows[row_no].scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

        $(document).ready(function() {
            $("#table td:nth-child(" + col_no + ")").each(function() {

                if ($(this).text() == feature.id) {
                    $(this).parent("tr").css("background-color", "grey");

                }
            });
        });
    });




};

// highlight the feature on map and table on row select in table
function addRowHandlers() {
    var rows = document.getElementById("table").rows;
    var heads = table.getElementsByTagName('th');
    var col_no;
    for (var i = 0; i < heads.length; i++) {
        // Take each cell
        var head = heads[i];
        //alert(head.innerHTML);
        if (head.innerHTML == 'id') {
            col_no = i + 1;
            //alert(col_no);
        }

    }
    for (i = 0; i < rows.length; i++) {



        rows[i].onclick = function() {
            return function() {
                //featureOverlay.getSource().clear();
                if (geojson) {
                    geojson.resetStyle();
                }
                $(function() {
                    $("#table td").each(function() {
                        $(this).parent("tr").css("background-color", "white");
                    });
                });
                var cell = this.cells[col_no - 1];
                var id = cell.innerHTML;


                $(document).ready(function() {
                    $("#table td:nth-child(" + col_no + ")").each(function() {
                        if ($(this).text() == id) {
                            $(this).parent("tr").css("background-color", "grey");
                        }
                    });
                });

                features = geojson.getLayers();

                for (i = 0; i < features.length; i++) {



                    if (features[i].feature.id == id) {
                        //alert(features[i].feature.id);
                        //featureOverlay.getSource().addFeature(features[i]);
                        selected = features[i];
                        selected.setStyle({
                            'color': 'red'
                        });
                        map.fitBounds(selected.getBounds());
                        console.log(selected.getBounds());
                    }
                }

                //alert("id:" + id);
            };
        }(rows[i]);
    }
}

//list of wms_layers_ in window on click of button

function wms_layers() {

   
     
  $("#wms_layers_window").modal({backdrop: false});
  //$("#wms_layers_window").draggable();
  $("#wms_layers_window").modal('show');
 
    

    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "http://localhost:8080/geoserver/wms?request=getCapabilities",
            dataType: "xml",
            success: function(xml) {
                $('#table_wms_layers').empty();
                // console.log("here");
                $('<tr></tr>').html('<th>Name</th><th>Title</th><th>Abstract</th>').appendTo('#table_wms_layers');
                $(xml).find('Layer').find('Layer').each(function() {
                    var name = $(this).children('Name').text();
                    // alert(name);
                    //var name1 = name.find('Name').text();
                    //alert(name);
                    var title = $(this).children('Title').text();

                    var abst = $(this).children('Abstract').text();
                    //   alert(abst);


                    //   alert('test');
                    $('<tr></tr>').html('<td>' + name + '</td><td>' + title + '</td><td>' + abst + '</td>').appendTo('#table_wms_layers');
                    //document.getElementById("table_wms_layers").setAttribute("class", "table-success");

                });
                addRowHandlers1();
            }
        });
    });




    function addRowHandlers1() {
        //alert('knd');
        var rows = document.getElementById("table_wms_layers").rows;
        var table = document.getElementById('table_wms_layers');
        var heads = table.getElementsByTagName('th');
        var col_no;
        for (var i = 0; i < heads.length; i++) {
            // Take each cell
            var head = heads[i];
            //alert(head.innerHTML);
            if (head.innerHTML == 'Name') {
                col_no = i + 1;
                //alert(col_no);
            }

        }
        for (i = 0; i < rows.length; i++) {

            rows[i].onclick = function() {
                return function() {

                    $(function() {
                        $("#table_wms_layers td").each(function() {
                            $(this).parent("tr").css("background-color", "white");
                        });
                    });
                    var cell = this.cells[col_no - 1];
                    layer_name = cell.innerHTML;
                    // alert(layer_name);

                    $(document).ready(function() {
                        $("#table_wms_layers td:nth-child(" + col_no + ")").each(function() {
                            if ($(this).text() == layer_name) {
                                $(this).parent("tr").css("background-color", "grey");



                            }
                        });
                    });

                    //alert("id:" + id);
                };
            }(rows[i]);
        }

    }

}
// add wms layer to map on click of button
function add_layer() {
    //  alert("jd"); 

    //alert(layer_name);
    //map.removeControl(layerSwitcher);

    var name = layer_name.split(":");
    //alert(layer_name);
    var layer_wms = L.tileLayer.wms('http://localhost:8080/geoserver/wms?', {
        layers: layer_name,
        transparent: 'true',
        format: 'image/png'
    
    }).addTo(map);
    //layerControl.addOverlay(india_district,"india_district");

    layerControl.addOverlay(layer_wms, layer_name);
    overlays.addLayer(layer_wms, layer_name);


    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "http://localhost:8080/geoserver/wms?request=getCapabilities",
            dataType: "xml",
            success: function(xml) {


                $(xml).find('Layer').find('Layer').each(function() {
                    var name = $(this).children('Name').text();
                    // alert(name);
                    if (name == layer_name) {
                        // use this for getting the lat long of the extent
                        var bbox1 = $(this).children('EX_GeographicBoundingBox').children('southBoundLatitude').text();
                        var bbox2 = $(this).children('EX_GeographicBoundingBox').children('westBoundLongitude').text();
                        var bbox3 = $(this).children('EX_GeographicBoundingBox').children('northBoundLatitude').text();
                        var bbox4 = $(this).children('EX_GeographicBoundingBox').children('eastBoundLongitude').text();
                        var southWest = L.latLng(bbox1, bbox2);
                        var northEast = L.latLng(bbox3, bbox4);
                        var bounds = L.latLngBounds(southWest, northEast);
                        map.fitBounds(bounds);

                        // use below code for getting the extent in the projection defined in geoserver

                        /* $(this).find('BoundingBox').each(function(){
                         if ($(this).attr('CRS') != "CRS:84" ){
                         var bbox1 = $(this).attr('minx');
                         var bbox2 = $(this).attr('miny');
                         var bbox3 = $(this).attr('maxx');
                         var bbox4 = $(this).attr('maxy');
                         var southWest = L.latLng(bbox1, bbox2);
                         var northEast = L.latLng(bbox3, bbox4);
                         var bounds = L.latLngBounds(southWest, northEast);
                          map.fitBounds(bounds);
                         }
                         });*/

                        //  alert($(this).children('EX_GeographicBoundingBox').text());
                      if (bounds != undefined){alert(layer_name+" added to the map");}
                    }



                });

            }
        });
    });


    legend();

}

function close_wms_window(){
layer_name = undefined;
}

// function on click of getinfo
function info() {
    if (document.getElementById("info_btn").innerHTML == "Activate GetInfo") {

        document.getElementById("info_btn").innerHTML = "De-Activate GetInfo";
        document.getElementById("info_btn").setAttribute("class", "btn btn-danger btn-sm");
        map.on('click', getinfo);
    } else {

        map.off('click', getinfo);
        document.getElementById("info_btn").innerHTML = "Activate GetInfo";
        document.getElementById("info_btn").setAttribute("class", "btn btn-success btn-sm");

    }
}

// getinfo function
function getinfo(e) {


    //var url1 = test.getFeatureInfoUrl(e.latlng);
    //console.log(url1);
    
    var point = map.latLngToContainerPoint(e.latlng, map.getZoom());
    
    var bbox = map.getBounds().toBBoxString();
    var size = map.getSize();
    var height = size.y;
    var width = size.x;
    var x = point.x;
    var y = point.y;
    

   
   
    if (content) {
        content = '';
    }
  
  overlays.eachLayer(function (layer) {
     var url = 'http://localhost:8080/geoserver/wms?SERVICE=WMS&VERSION=1.1.1&REQUEST=GetFeatureInfo&FORMAT=image%2Fpng&TRANSPARENT=true&QUERY_LAYERS=' + layer.options.layers + '&LAYERS=' + layer.options.layers + '&INFO_FORMAT=text%2Fhtml&X=' + x + '&Y=' + y + '&CRS=EPSG%3A4326&STYLES=&WIDTH=' + width + '&HEIGHT=' + height + '&BBOX=' + bbox;
console.log(url);   
     $.get(url, function(data) {
            //content.push(data);

            content += data;
            //console.log(content);

            popup.setContent(content);
            popup.setLatLng(e.latlng);
            map.openPopup(popup);


        });
  });
  
    

}


// clear function
function clear_all() {
    document.getElementById('map').style.height = '100%';
    document.getElementById('table_data').style.height = '0%';
    map.invalidateSize();
    $('#table').empty();
   $('#legend').empty();
    //$('#table1').empty();
    if (geojson) {
        map.removeLayer(geojson);
    }
    map.flyTo([36.83390,10.2387], 16);

    /*document.getElementById("query_panel_btn").innerHTML = "Open Query Panel";
  document.getElementById("query_panel_btn").setAttribute("class", "btn btn-success btn-sm");

    document.getElementById("query_tab").style.width = "0%";
    document.getElementById("map").style.width = "100%";
    document.getElementById("map").style.left = "0%";
    document.getElementById("query_tab").style.visibility = "hidden";
    document.getElementById('table_data').style.left = '0%';

    document.getElementById("legend_btn").innerHTML = "☰ Show Legend";
    document.getElementById("legend").style.width = "0%";
    document.getElementById("legend").style.visibility = "hidden";
    document.getElementById('legend').style.height = '0%';

    map.off('click', getinfo);
    document.getElementById("info_btn").innerHTML = "Activate GetInfo";
    document.getElementById("info_btn").setAttribute("class", "btn btn-success btn-sm");
  
  overlays.eachLayer(function (layer) {
  map.removeLayer(layer);
  //layerControl.removeLayer(layer);
  //overlays.removeLayer(layer);
  
  });
  //overlays.clearLayers();
  
    */
    map.invalidateSize();

}

/*function show_hide_querypanel() {

    if (document.getElementById("query_tab").style.visibility == "hidden") {

  document.getElementById("query_panel_btn").innerHTML = "Hide Query Panel";
        document.getElementById("query_panel_btn").setAttribute("class", "btn btn-danger btn-sm");
    document.getElementById("query_tab").style.visibility = "visible";
        document.getElementById("query_tab").style.width = "20%";
        document.getElementById("map").style.width = "79%";
        document.getElementById("map").style.left = "20%";
        
        document.getElementById('table_data').style.left = '20%';
        map.invalidateSize();
    } else {
        document.getElementById("query_panel_btn").innerHTML = "Open Query Panel";
        document.getElementById("query_panel_btn").setAttribute("class", "btn btn-success btn-sm");
        document.getElementById("query_tab").style.width = "0%";
        document.getElementById("map").style.width = "100%";
        document.getElementById("map").style.left = "0%";
        document.getElementById("query_tab").style.visibility = "hidden";
        document.getElementById('table_data').style.left = '0%';

        map.invalidateSize();
    }
}*/

function show_hide_legend() {

    if (document.getElementById("legend").style.visibility == "hidden") {

        document.getElementById("legend_btn").innerHTML = "☰ Hide Legend";
     document.getElementById("legend").style.visibility = "visible";
        document.getElementById("legend").style.width = "15%";
       
        document.getElementById('legend').style.height = '38%';
        map.invalidateSize();
    } else {
        document.getElementById("legend_btn").innerHTML = "☰ Show Legend";
        document.getElementById("legend").style.width = "0%";
        document.getElementById("legend").style.visibility = "hidden";
        document.getElementById('legend').style.height = '0%';

        map.invalidateSize();
    }
}





var serverPort = 'localhost:8080';
var geoserverWorkspace = 'geoApp';

var identifyLayers = [];
var projectionName = 'EPSG:4326';
var layerList = [];



var geojson;
var queryGeoJSON;
var featureOverlay;
var querySelectedFeatureOverlay;
var clickSelectedFeatureOverlay;






var toolbarDivElement = document.createElement('div');
toolbarDivElement.className = 'toolbarDiv';

var fsButton = document.createElement('button');
fsButton.innerHTML = "<img src='{% static 'geoApp/resources/images/fullscreen.svg'%}' alt='' class='myImg'></img>";
fsButton.className = 'myButton';
fsButton.title = 'Full Screen';

var fsElement = document.createElement('div');
fsElement.className = 'myButtonDiv';
fsElement.appendChild(fsButton);
toolbarDivElement.appendChild(fsElement);

fsButton.addEventListener("click", () => {
    var mapEle = document.getElementById("map");
    if (mapEle.requestFullscreen) {
        mapEle.requestFullscreen();
    } else if (mapEle.msRequestFullscreen) {
        mapEle.msRequestFullscreen();
    } else if (mapEle.mozRequestFullscreen) {
        mapEle.mozRequestFullscreen();
    } else if (mapEle.webkitRequestFullscreen) {
        mapEle.webkitRequestFullscreen();
    }
})

function fullscreen(){

        var mapEle = document.getElementById("map");
    if (mapEle.requestFullscreen) {
        mapEle.requestFullscreen();
    } else if (mapEle.msRequestFullscreen) {
        mapEle.msRequestFullscreen();
    } else if (mapEle.mozRequestFullscreen) {
        mapEle.mozRequestFullscreen();
    } else if (mapEle.webkitRequestFullscreen) {
        mapEle.webkitRequestFullscreen();
    }


}
var myImage = '<img class="button-image" src="{% static "geoApp/resources/images/fullscreen.svg"%}"/>';
L.easyButton( myImage, function(){ 
    onclick: fullscreen()
}).setPosition('topright').addTo(map);

ctlStyle = L.control.styleEditor({position:'topright'}).addTo(map);




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////







/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








var markerFeature;
/*function addInteractionForSpatialQuery(intType) {
    draw = new ol.interaction.Draw({
        source: clickSelectedFeatureOverlay.getSource(),
        type: intType,
        style: interactionStyle
    });
    map.addInteraction(draw);

    draw.on('drawend', function (e) {
        markerFeature = e.feature;
        markerFeature.set('geometry', markerFeature.getGeometry());
        map.removeInteraction(draw);
        document.getElementById('spUserInput').classList.toggle('clicked');
        map.addLayer(clickSelectedFeatureOverlay);
    })
}


function selectFeature(evt) {
    if (featureOverlay) {
        featureOverlay.getSource().clear();
        map.removeLayer(featureOverlay);
    }
    var selectedFeature = map.forEachFeatureAtPixel(evt.pixel,
        function (feature, layer) {
            return feature;
        });

    if (selectedFeature) {
        featureOverlay.getSource().addFeature(selectedFeature);
    }
}*/
/*
function addMapLayerList(selectElementName) {
    var select = document.getElementById("selectLayer");
    while (select.options.length > 0) {
        select.remove(0);
    }
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "http://" + serverPort + "/geoserver/wfs?request=getCapabilities",
            dataType: "xml",
            success: function (xml) {
                var select = $('#' + selectElementName);
                select.append("<option class='ddindent' value=''></option>");
                $(xml).find('FeatureType').each(function () {
                    $(this).find('Name').each(function () {
                        var value = $(this).text();
                        if (layerList.includes(value)) {
                            select.append("<option class='ddindent' value='" + value + "'>" + value + "</option>");
                        }
                    });
                });
            }
        });
    });

};


function newpopulateQueryTable(url) {
    if (typeof attributePanel !== 'undefined') {
        if (attributePanel.parentElement !== null) {
            attributePanel.close();
        }
    }
    $.getJSON(url, function (data) {
        var col = [];
        col.push('id');
        for (var i = 0; i < data.features.length; i++) {

            for (var key in data.features[i].properties) {

                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        var table = document.createElement("table");

        table.setAttribute("class", "table table-bordered table-hover table-condensed");
        table.setAttribute("id", "attQryTable");
        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1);                   // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < data.features.length; i++) {
            tr = table.insertRow(-1);
            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                if (j == 0) { tabCell.innerHTML = data.features[i]['id']; }
                else {
                    tabCell.innerHTML = data.features[i].properties[col[j]];
                }
            }
        }

        // var tabDiv = document.createElement("div");
        var tabDiv = document.getElementById('attListDiv');

        var delTab = document.getElementById('attQryTable');
        if (delTab) {
            tabDiv.removeChild(delTab);
        }

        tabDiv.appendChild(table);

        document.getElementById("attListDiv").style.display = "block";


    });
};

function newaddGeoJsonToMap(url) {

    if (queryGeoJSON) {
        queryGeoJSON.getSource().clear();
        map.removeLayer(queryGeoJSON);
    }

    queryGeoJSON = new ol.layer.Vector({
        source: new ol.source.Vector({
            url: url,
            format: new ol.format.GeoJSON()
        }),
        style: querySelectedFeatureStyle,

    });

    queryGeoJSON.getSource().on('addfeature', function () {
        map.getView().fit(
            queryGeoJSON.getSource().getExtent(),
            { duration: 1590, size: map.getSize(), maxZoom: 21 }
        );
    });
    map.addLayer(queryGeoJSON);
};

function newaddRowHandlers() {
    var attTable = document.getElementById("attQryTable");
    // var rows = document.getElementById("attQryTable").rows;
    var rows = attTable.rows;
    var heads = attTable.getElementsByTagName('th');
    var col_no;
    for (var i = 0; i < heads.length; i++) {
        // Take each cell
        var head = heads[i];
        if (head.innerHTML == 'id') {
            col_no = i + 1;
        }

    }
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function () {
            return function () {
                clickSelectedFeatureOverlay.getSource().clear();

                $(function () {
                    $("#attQryTable td").each(function () {
                        $(this).parent("tr").css("background-color", "white");
                    });
                });
                var cell = this.cells[col_no - 1];
                var id = cell.innerHTML;
                $(document).ready(function () {
                    $("#attQryTable td:nth-child(" + col_no + ")").each(function () {
                        if ($(this).text() == id) {
                            $(this).parent("tr").css("background-color", "#d1d8e2");
                        }
                    });
                });

                var features = queryGeoJSON.getSource().getFeatures();

                for (i = 0; i < features.length; i++) {
                    if (features[i].getId() == id) {
                        clickSelectedFeatureOverlay.getSource().addFeature(features[i]);

                        clickSelectedFeatureOverlay.getSource().on('addfeature', function () {
                            map.getView().fit(
                                clickSelectedFeatureOverlay.getSource().getExtent(),
                                { duration: 1500, size: map.getSize(), maxZoom: 24 }
                            );
                        });

                    }
                }
            };
        }(rows[i]);
    }
}



// start : spatial query
var bufferButton = document.createElement('button');
bufferButton.innerHTML = "<img src='{% static 'geoApp/resources/images/mapSearch.png'%}' alt='' class='myImg'></img>";
bufferButton.className = 'myButton';
bufferButton.id = 'bufferButton';
bufferButton.title = 'Spatial Query';

var bufferElement = document.createElement('div');
bufferElement.className = 'myButtonDiv';
bufferElement.appendChild(bufferButton);
toolbarDivElement.appendChild(bufferElement);

var bufferFlag = false;


function spatialQ() {
    bufferButton.classList.toggle('clicked');
    bufferFlag = !bufferFlag;
    document.getElementById("map").style.cursor = "default";
    if (bufferFlag) {
        if (geojson) {
            geojson.getSource().clear();
            map.removeLayer(geojson);
        }

        if (featureOverlay) {
            featureOverlay.getSource().clear();
            map.removeLayer(featureOverlay);
        }
        document.getElementById("spQueryDiv").style.display = "block";

        addMapLayerList_spQry();
    } else {
        document.getElementById("map").style.cursor = "default";
        document.getElementById("spQueryDiv").style.display = "none";
        document.getElementById("attListDiv").style.display = "none";

        if (geojson) {
            geojson.getSource().clear();
            map.removeLayer(geojson);
        }

        if (featureOverlay) {
            featureOverlay.getSource().clear();
            map.removeLayer(featureOverlay);
        }
        map.removeInteraction(draw);
        if (document.getElementById('spUserInput').classList.contains('clicked')) { document.getElementById('spUserInput').classList.toggle('clicked'); }
    }

}


var myImage2 = '<img class="button-image" src="{% static "geoApp/resources/images/mapSearch.png"%}"/>';
L.easyButton( myImage2, function(){ 
    onclick: spatialQ()
}).setPosition('topleft').addTo(map);






*/
/*function addMapLayerList_spQry() {
    var select = $('#buffSelectLayer');
    select.empty();
    select.append("<option class='ddindent' value=''></option>");
    for (i = 0; i < layerList.length; i++) {
        var value = layerList[i];
        select.append("<option class='ddindent' value='" + value + "'>" + value + "</option>");
    }
};
//















$(document).ready(function () {

    // render layerswitcher control
    //var toc = document.getElementById('layerSwitcherContent');
    //layerSwitcherControl = new ol.control.LayerSwitcher.renderPanel(map, toc, { reverse: true });
    $("#selectLayer").change = function () {
    //document.getElementById("selectLayer").onchange = function () {
        var select = document.getElementById("selectAttribute");
        while (select.options.length > 0) {
            select.remove(0);
        }
        var value_layer = $(this).val();
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "http://" + serverPort + "/geoserver/wfs?service=WFS&request=DescribeFeatureType&version=1.1.0&typeName=" + value_layer,
                dataType: "xml",
                success: function (xml) {

                    var select = $('#selectAttribute');
                    //var title = $(xml).find('xsd\\:complexType').attr('name');
                    //  alert(title);
                    select.append("<option class='ddindent' value=''></option>");
                    $(xml).find('xsd\\:sequence').each(function () {

                        $(this).find('xsd\\:element').each(function () {
                            var value = $(this).attr('name');
                            //alert(value);
                            var type = $(this).attr('type');
                            //alert(type);
                            if (value != 'geom' && value != 'the_geom') {
                                select.append("<option class='ddindent' value='" + type + "'>" + value + "</option>");
                            }
                        });

                    });
                }
            });
        });
    }
    $("#selectAttribute").change = function () {
    //document.getElementById("selectAttribute").onchange = function () {
        var operator = document.getElementById("selectOperator");
        while (operator.options.length > 0) {
            operator.remove(0);
        }

        var value_type = $(this).val();
        // alert(value_type);
        var value_attribute = $('#selectAttribute option:selected').text();
        operator.options[0] = new Option('Select operator', "");

        if (value_type == 'xsd:short' || value_type == 'xsd:int' || value_type == 'xsd:double') {
            var operator1 = document.getElementById("selectOperator");
            operator1.options[1] = new Option('Greater than', '>');
            operator1.options[2] = new Option('Less than', '<');
            operator1.options[3] = new Option('Equal to', '=');
        }
        else if (value_type == 'xsd:string') {
            var operator1 = document.getElementById("selectOperator");
            operator1.options[1] = new Option('Like', 'Like');
            operator1.options[2] = new Option('Equal to', '=');
        }
    }
    $("#attQryRun").click = function () {
    //document.getElementById('attQryRun').onclick = function () {
        map.set("isLoading", 'YES');

        if (featureOverlay) {
            featureOverlay.getSource().clear();
            map.removeLayer(featureOverlay);
        }

        var layer = document.getElementById("selectLayer");
        var attribute = document.getElementById("selectAttribute");
        var operator = document.getElementById("selectOperator");
        var txt = document.getElementById("enterValue");

        if (layer.options.selectedIndex == 0) {
            alert("Select Layer");
        } else if (attribute.options.selectedIndex == -1) {
            alert("Select Attribute");
        } else if (operator.options.selectedIndex <= 0) {
            alert("Select Operator");
        } else if (txt.value.length <= 0) {
            alert("Enter Value");
        } else {
            var value_layer = layer.options[layer.selectedIndex].value;
            var value_attribute = attribute.options[attribute.selectedIndex].text;
            var value_operator = operator.options[operator.selectedIndex].value;
            var value_txt = txt.value;
            if (value_operator == 'Like') {
                value_txt = "%25" + value_txt + "%25";
            }
            else {
                value_txt = value_txt;
            }
            var url = "http://" + serverPort + "/geoserver/" + geoserverWorkspace + "/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=" + value_attribute + "+" + value_operator + "+'" + value_txt + "'&outputFormat=application/json"
            newaddGeoJsonToMap(url);
            newpopulateQueryTable(url);
            setTimeout(function () { newaddRowHandlers(url); }, 1000);
            map.addLayer(clickSelectedFeatureOverlay);
            map.set("isLoading", 'NO');
        }
    }
    $("#attQryClear").click = function () {
    //document.getElementById('attQryClear').onclick = function () {
        if (queryGeoJSON) {
            queryGeoJSON.getSource().clear();
            map.removeLayer(queryGeoJSON);
        }

        if (clickSelectedFeatureOverlay) {
            clickSelectedFeatureOverlay.getSource().clear();
            map.removeLayer(clickSelectedFeatureOverlay);
        }
        coordList = '';
        markerFeature = undefined;
        document.getElementById("attListDiv").style.display = "none";
    }

    document.getElementById("qryType").onchange = function () {
        var value_attribute = $('#qryType option:selected').text();
        var buffDivElement = document.getElementById("bufferDiv");

        if (value_attribute == 'Within Distance of') {
            buffDivElement.style.display = "block";
        } else {
            buffDivElement.style.display = "none";
        }
    }
    $("#srcCriteria").change = function () {
    //document.getElementById("srcCriteria").onchange = function () {
        if (queryGeoJSON) {
            queryGeoJSON.getSource().clear();
            map.removeLayer(queryGeoJSON);
        }

        if (clickSelectedFeatureOverlay) {
            clickSelectedFeatureOverlay.getSource().clear();
            map.removeLayer(clickSelectedFeatureOverlay);
        }
        if (document.getElementById('spUserInput').classList.contains('clicked')) { document.getElementById('spUserInput').classList.toggle('clicked'); }
    }
    $("#spUserInput").click = function () {
    //document.getElementById('spUserInput').onclick = function () {
        document.getElementById('spUserInput').classList.toggle('clicked');
        if (document.getElementById('spUserInput').classList.contains('clicked')) {
            if (queryGeoJSON) {
                queryGeoJSON.getSource().clear();
                map.removeLayer(queryGeoJSON);
            }

            if (clickSelectedFeatureOverlay) {
                clickSelectedFeatureOverlay.getSource().clear();
                map.removeLayer(clickSelectedFeatureOverlay);
            }
            var srcCriteriaValue = document.getElementById('srcCriteria').value;
            if (srcCriteriaValue == 'pointMarker') {
                addInteractionForSpatialQuery('Point');

            }
            if (srcCriteriaValue == 'lineMarker') {
                addInteractionForSpatialQuery('LineString');
            }
            if (srcCriteriaValue == 'polygonMarker') {
                addInteractionForSpatialQuery('Polygon');
            }
        } else {
            coordList = '';
            markerFeature = undefined;
            map.removeInteraction(draw);
        }
    }
    $("#spQryRun").click = function () {
    //document.getElementById('spQryRun').onclick = function () {

        var layer = document.getElementById("buffSelectLayer");
        var value_layer = layer.options[layer.selectedIndex].value;

        var srcCriteria = document.getElementById("srcCriteria");
        var value_src = srcCriteria.options[srcCriteria.selectedIndex].value;
        var coordList = '';
        var url;
        var markerType = '';
        if (markerFeature) {
            if (value_src == 'pointMarker') {
                coordList = markerFeature.getGeometry().getCoordinates()[0] + " " + markerFeature.getGeometry().getCoordinates()[1];
                markerType = 'Point';
            }
            if (value_src == 'lineMarker') {
                var coordArray = markerFeature.getGeometry().getCoordinates();

                for (i = 0; i < coordArray.length; i++) {
                    if (i == 0) {
                        coordList = coordArray[i][0] + " " + coordArray[i][1];
                    } else {
                        coordList = coordList + ", " + coordArray[i][0] + " " + coordArray[i][1];
                    }
                }
                markerType = 'LineString';
            }
            if (value_src == 'polygonMarker') {
                var coordArray = markerFeature.getGeometry().getCoordinates()[0];
                for (i = 0; i < coordArray.length; i++) {
                    if (i == 0) {
                        coordList = coordArray[i][0] + " " + coordArray[i][1];
                    } else {
                        coordList = coordList + ", " + coordArray[i][0] + " " + coordArray[i][1];
                    }
                }
                coordList = "(" + coordList + ")";
                markerType = 'Polygon';
            }

            var value_attribute = $('#qryType option:selected').text();
            if (value_attribute == 'Within Distance of') {

                var dist = document.getElementById("bufferDistance");
                var value_dist = Number(dist.value);
                // value_dist = value_dist / 111.325;

                var distanceUnit = document.getElementById("distanceUnits");
                var value_distanceUnit = distanceUnit.options[distanceUnit.selectedIndex].value;
                url = "http://" + serverPort + "/geoserver/" + geoserverWorkspace + "/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=DWITHIN(geom," + markerType + "(" + coordList + ")," + value_dist + "," + value_distanceUnit + ")&outputFormat=application/json";


            } else if (value_attribute == 'Intersecting') {
                url = "http://" + serverPort + "/geoserver/" + geoserverWorkspace + "/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=INTERSECTS(geom," + markerType + "(" + coordList + "))&outputFormat=application/json";
            } else if (value_attribute == 'Completely Within') {
                url = "http://" + serverPort + "/geoserver/" + geoserverWorkspace + "/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=" + value_layer + "&CQL_FILTER=WITHIN(geom," + markerType + "(" + coordList + "))&outputFormat=application/json";
            }
            newaddGeoJsonToMap(url);
            coordList = '';
            markerFeature = undefined;
        }
    }
    $("#spQryClear").click = function () {
    //document.getElementById('spQryClear').onclick = function () {
        if (queryGeoJSON) {
            queryGeoJSON.getSource().clear();
            map.removeLayer(queryGeoJSON);
        }

        if (clickSelectedFeatureOverlay) {
            clickSelectedFeatureOverlay.getSource().clear();
            map.removeLayer(clickSelectedFeatureOverlay);
        }
        coordList = '';
        markerFeature = undefined;
    }

    var mapInteractions = map.getInteractions();
    for (var x = 0; x < mapInteractions.getLength(); x++) {
        var mapInteraction = mapInteractions.item(x);
        if (mapInteraction instanceof ol.interaction.DoubleClickZoom) {
            map.removeInteraction(mapInteraction);
            break;
        }
    }

    for (var x = 0; x < mapInteractions.getLength(); x++) {
        var mapInteraction = mapInteractions.item(x);
        if (mapInteraction instanceof ol.interaction.DragPan) {
            map.removeInteraction(mapInteraction);
            break;
        }
    }

});
*/










</script>

<!--<script type="text/javascript" src="{% static 'geoApp/src/l.debug.js' %}"></script>-->
</body>
</html>