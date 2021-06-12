function pinSymbol(color) {
  return {
      path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z',
      fillColor: color,
      fillOpacity: 1,
      strokeColor: '#FFF',
      strokeWeight: 2,
      scale: 1.5,
  };
}

function myMap() {
  var mapCanvas = document.getElementById("map");
//   var city = new google.maps.LatLng( 36.625889425757535, 127.4586266264963);
//   var newmetarials = new google.maps.LatLng(36.626789661654236, 127.45817422931493);
  var engine = new google.maps.LatLng( 36.62604003335417, 127.45819657500448);
  var lifescience = new google.maps.LatLng(36.630505829445276, 127.46073685162982);
  var medicine = new google.maps.LatLng(36.62496121677499, 127.46084930136273);
  var vete =  new google.maps.LatLng(36.62329968698246, 127.45610108231679);
  var nursing = new google.maps.LatLng(36.62527010310675, 127.4548834408681);
  var elect = new google.maps.LatLng(36.62558742476862, 127.45437425131267);

  var mapOptions = {
     center: engine,
      zoom:16
  };

  var map = new google.maps.Map(mapCanvas, mapOptions);

  var marker = new google.maps.Marker({
    position:engine,
    icon: pinSymbol("#33CC00")
  });
  marker.setMap(map);

  var marker2 = new google.maps.Marker({
   position:lifescience,
   icon: pinSymbol("#33CC00")
  });
  marker2.setMap(map);

  var marker3 = new google.maps.Marker({
   position:medicine,
   icon: pinSymbol("#33CC00")
  });
  marker3.setMap(map);

  var marker4 = new google.maps.Marker({
   position:vete,
   icon: pinSymbol("#33CC00")
  });
  marker4.setMap(map);

  var marker5 = new google.maps.Marker({
   position:nursing,
   icon: pinSymbol("#33CC00")
  });
  marker5.setMap(map);

  var marker6 = new google.maps.Marker({
   position:elect,
   icon: pinSymbol("#33CC00")
  });
  marker6.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "공과대학"
  });
  infowindow.open(map,marker);

  var infowindow1 = new google.maps.InfoWindow({
    content: "생활과학대학"
  });
 infowindow1.open(map,marker2);

  var infowindow2 = new google.maps.InfoWindow({
     content: "의과대학 - 의학과"
  });
  infowindow2.open(map,marker3);

  var infowindow3 = new google.maps.InfoWindow({
     content: "수의과대학"
  });
  infowindow3.open(map,marker4);

  var infowindow3 = new google.maps.InfoWindow({
     content: "의과대학 - 간호학과"
  });
  infowindow3.open(map,marker5);

  var infowindow3 = new google.maps.InfoWindow({
     content: "전자정보대학 - 소프트웨어학과"
  });
  infowindow3.open(map,marker6);


  var myUniversity = new google.maps.Circle({
    center: engine,
    radius: 100,
    strokeColor: "#EE82EE",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#EE82EE",
    fillOpacity: 0.4
  });
myUniversity.setMap(map);

}

