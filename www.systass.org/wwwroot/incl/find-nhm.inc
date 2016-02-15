    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAALcnWoXOucwAMkb7GXuuJJRT0FVRJgXhejblEDaADn1SKIkiHBhTb2L5tHs9rzSsZW9PRS4WqHFAKfg"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
				map.addControl(new GSmallMapControl());
				map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(51.4966, -0.1769), 16);
				map.addControl(new GScaleControl( ))
// Our info window content
var infoTabs = [
  new GInfoWindowTab("Tab #1", "The Natural History Museum<br>Cromwell Rd<br>London<br>SW7 5BD"),
];

// Place a marker in the center of the map and open the info window
// automatically
var marker = new GMarker(map.getCenter());
GEvent.addListener(marker, "click", function() {
  marker.openInfoWindowTabsHtml(infoTabs);
});
map.addOverlay(marker);
marker.openInfoWindowTabsHtml(infoTabs);
      }
    }

    //]]>
    </script>
		<div id="map" style="width: 500px; height: 400px"></div>
