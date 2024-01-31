<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>
    <h1>Weather</h1>
    <?php if (isset($requestedCity) && isset($currentTemp)): ?>
        <p>Current temperature in <?= $requestedCity ?> is: <?= $currentTemp ?>С</p>
    <?php elseif (isset($requestedCity) && !isset($currentTemp)): ?>
        <p>Unable to retrieve weather data. Please come back later.</p>
    <?php else: ?>
        <p>Welcome to Weather Forecast. Please enter city in the form below:</p>
    <?php endif ?>
    <form action="/weather" method="GET">
        <label for="city_name">City Name:</label>
        <input type="text" name="city_name">
        <button type="submit">Submit</button>
    </form>
    
    <a href="/"><- back</a>
</body>
</html>