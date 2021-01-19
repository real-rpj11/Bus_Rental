<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('bus}}" method="post">
    <label for="busname">Bus Name:</label>
    <input type="text" name="bus_name" placeholder="Bus Name"><br>
    <br>
    <label for="passenger">No. of Passengers:</label>
    <input type="number" placeholder="No. of Passengers" name="number_of_passenger"><br>
    <br>
    <label for="price">Price/Day</label>
    <input type="number" name="price/day" placeholder="Price per Day"><br>
    <br>
    <input type="submit" value="Submit" name="submit_btn">
    </form>
</body>
</html>