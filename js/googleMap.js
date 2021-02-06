// Initialize and add the map
function initMap() {
    // The location of Mombasa
    const uluru = { lat: 4.0435, lng: 39.6682 };
    // The map, centered at Mombasa
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: Mombasa,
    });
    // The marker, positioned at Mombasa
    const marker = new google.maps.Marker({
        position: Mombasa,
        map: map,
    });
}