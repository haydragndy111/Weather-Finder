function getCityDetail(time){
    console.log(time);
    var temperature = time["main"]["temp"];
    var weather = time["weather"][0]["main"];
    var icon = time["weather"][0]["icon"];
    var wind = time["wind"]["speed"];
    console.log(temperature);
    console.log(weather);
    console.log(wind);
    document.getElementById("temp").innerHTML=temperature+"°";
    document.getElementById("weather").innerHTML=weather;
    document.getElementById("wind").innerHTML="wind speed: "+wind;
    document.getElementById('icon').src = "http://openweathermap.org/img/w/"+time["weather"][0]["icon"]+".png";
}
function getLongAndLat(result){
    var long = result[0]["lon"];
    var lat = result[0]["lat"];
    console.log(result);
    jQuery.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+long+"&units=metric&appid=a8455daee9abe33741608e109b46671d",
        method: 'get',
        success: getCityDetail,
    })
}
$(document).ready(function(){
    $('#search').click(function(e){
        var city = $('#city').val();
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        console.log(city);
        jQuery.ajax({
            url: "http://api.openweathermap.org/geo/1.0/direct?q="+city+"&limit=5&appid=a8455daee9abe33741608e109b46671d",
            method: 'get',
            success: getLongAndLat
        });
    });
});