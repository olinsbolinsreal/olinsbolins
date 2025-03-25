<?php
    $data = '{"location":{"city":"Cesis","woeid":851991,"country":"Latvia","lat":57.31802,"long":25.281811,"timezone_id":"Europe/Riga"},"current_observation":{"pubDate":1741941340,"wind":{"chill":16,"direction":"NW","speed":12},"atmosphere":{"humidity":83,"visibility":14.98,"pressure":994.6},"astronomy":{"sunrise":"6:36 AM","sunset":"6:21 PM"},"condition":{"temperature":28,"text":"Cloudy","code":26}},"forecasts":[{"day":"Fri","date":1741968000,"high":36,"low":21,"text":"Partly Cloudy","code":30},{"day":"Sat","date":1742054400,"high":41,"low":27,"text":"Sunny","code":32},{"day":"Sun","date":1742140800,"high":40,"low":22,"text":"Snow","code":16},{"day":"Mon","date":1742227200,"high":41,"low":26,"text":"Partly Cloudy","code":30},{"day":"Tue","date":1742313600,"high":44,"low":29,"text":"Mostly Cloudy","code":28},{"day":"Wed","date":1742400000,"high":48,"low":31,"text":"Mostly Sunny","code":34},{"day":"Thu","date":1742486400,"high":51,"low":32,"text":"Sunny","code":32},{"day":"Fri","date":1742572800,"high":55,"low":35,"text":"Partly Cloudy","code":30},{"day":"Sat","date":1742659200,"high":54,"low":36,"text":"Partly Cloudy","code":30},{"day":"Sun","date":1742745600,"high":54,"low":35,"text":"Mostly Sunny","code":34},{"day":"Mon","date":1742832000,"high":53,"low":38,"text":"Sunny","code":32}]}';
    $weatherData = json_decode($data, true);  // Dekodē JSON uz PHP masīvu
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laika Prognoze</title>
</head>
<body>
    <h1>Laika prognoze</h1>

    <p>Pilsēta: <strong><?php echo $weatherData['location']['city']; ?></strong></p>
    <p>Temperatūra: <strong><?php echo $weatherData['current_observation']['condition']['temperature']; ?>°C</strong></p>
    <p>Laika apstākļi: <strong><?php echo $weatherData['current_observation']['condition']['text']; ?></strong></p>

</body>
</html>