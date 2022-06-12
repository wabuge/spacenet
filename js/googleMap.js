// Initialize and add the map
function initMap() {
    // The location of Malindi
    //3.2192° S, 40.1169° E
    const uluru = { lat: 3.2192, lng: 40.1169 };
    // The map, centered at Mombasa
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: Malindi,
    });
    // The marker, positioned at Mombasa
    const marker = new google.maps.Marker({
        position: Malindi,
        map: map,
    });
}