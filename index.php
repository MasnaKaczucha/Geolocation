<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
    <!--https://dev.to/techmesh/calculate-distance-between-2-geo-locations-in-php-mysql-5agg -->
    <script>
        const successCallback = (position) => {
            console.log(position);
        };

        const errorCallback = (error) => {
            console.log(error);
        };

        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    </script>
</head>
<body>
<h1>Hello World</h1>
<p>I'm hosted with GitHub Pages.</p>
</body>
</html>
