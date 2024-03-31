<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Weather App</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
</head>
<body class="bg-neutral-950 font-sans tracking-wider leading-relaxed">

<?php

$apiKey = '174dc953d017410594a60803241802';

$location = 'Philippines';

$url = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}";

$response = file_get_contents($url);

if ($response) {
    $data = json_decode($response, true);
    
    if (!isset($data['error'])) {
        $currentLocation = $data['location'];
        $currentWeather = $data['current'];
        echo "<div class='md:max-w-[50%] min-h-screen mx-auto text-white text-center mb-10'>";
            echo "<h1 class='text-center text-lg my-5'>Weather App</h1>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Location: {$currentLocation['name']}</p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Temperature: {$currentWeather['temp_c']}°C / {$currentWeather['temp_f']}°F</p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'><img src='{$currentWeather['condition']['icon']}' class='mx-auto'> {$currentWeather['condition']['text']}</p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Humidity: {$currentWeather['humidity']}</p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Wind Speed: {$currentWeather['wind_kph']} km/h</p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Sunrise: <span id='sunrise'></span></p>";
            echo "<p class='mb-5 bg-zinc-900 border-black rounded-lg mx-5 p-2'>Sunset: <span id='sunset'></span></p>";
        echo "</div>";
    } else {
        echo "Error: {$data['error']['message']}";
    }
} else {
    echo "Failed to retrieve weather data.";
}
?>


<footer class="text-center text-white">
    <p>Powered<br>by<br><a href="https://www.weatherapi.com/" title="Free Weather API">WeatherAPI.com</a><br><a href="https://sunrisesunset.io/">SunriseSunset.io</a></p>
</footer>

<script>
let latitude = 14.5243;
let longitude = 121.0792;
let url = `https://api.sunrisesunset.io/json?lat=${latitude}&lng=${longitude}`;
fetch(url)
  .then(response => response.json())
  .then(data => {
    document.querySelector('#sunrise').innerHTML = data.results.sunrise;
    document.querySelector('#sunset').innerHTML = data.results.sunset;
});

</script>
</body>
</html>