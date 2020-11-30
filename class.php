
<?php
interface Weatherable
{
    public function getMaxTemperature();
}

class OpenWeather implements Weatherable
{
    public function getMaxTemperature()
    {
        $Curl_handler = curl_init();
        $api_key = "http://api.openweathermap.org/data/2.5/weather?q=Lublin&appid=61e9029b5b1a819463d54f649962e461";
        curl_setopt($Curl_handler, CURLOPT_URL, $api_key);
        curl_setopt($Curl_handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Curl_handler, CURLOPT_HEADER, false);
        $result = curl_exec($Curl_handler);
        curl_close($Curl_handler);
        $arr = json_decode($result, true);
        $temperature = $arr["main"]["temp"];
        $temperature_in_C = $temperature - 273.15 . ' St. C';
        return $temperature_in_C;
    }
}
