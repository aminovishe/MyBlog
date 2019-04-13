<?php
$apiKey = "c3f37da0a2cb8aa328dae5a7b6007e1e";
//$cityId = "CITY ID";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Tunisian%20Republic&APPID=c3f37da0a2cb8aa328dae5a7b6007e1e";
//$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>
<div class="show-widget weather-big-div">
    <div class="report-container d-flex flex-row justify-content-around align-items-center">
        <div  class="w-75">
            <h2>Tunis, Tunisia</h2>
            <p class="text-center">Weather Status</p>
            <div class="time">
                <div><?php echo date("l g:i a", $currentTime); ?></div>
                <div><?php echo date("jS F, Y", $currentTime); ?></div>
                <div><?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
            <div class="weather-forecast">
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                     class="weather-icon"/>
                <span class="temperature"><?php echo ($data->main->temp_min) - 273; ?> °C</span>
            </div>
            <div class="time">
                <div>Humidity: <span class="font-weight-bold"><?php echo $data->main->humidity; ?> %</div></span>
                <div>Wind: <span class="font-weight-bold"><?php echo $data->wind->speed; ?> km/h</div></span>
            </div>
        </div>
        <div class="w-25"><img class="w-100" src="pics/tunisieDrapeau.gif"></div>
    </div>
</div>