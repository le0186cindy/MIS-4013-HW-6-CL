<?php
    $current_page = basename($_SERVER['PHP_SELF']);
    include 'header.php';
?>
<html>
<body>

<div class="my-2 mx-4">
    <div class="my-2">
        <h1>Moment.js</h1>
        <p>Parse, validate, manipulate, and display dates and times in JavaScript</p>
    </div>

    <div class="my-2">
        <h4>Moment.js makes it easy to translate between date formats!</h4>
        <label for="dateString">Insert a date in the format (YYYY-MM-DD, Example: 2024-12-25) </label>
        <input type="text" id="dateString">
        <p id="dateStringOutput"></p>
        <button type="button" class="btn btn-info" onclick="parseDateString()">Translate</button>
    </div>
    <div class="my-2">
        <h4>Moment.js can also show you time in the future!</h4>
        <p id="oneDayAhead">Tomorrow: </p>
        <p id="oneWeekAhead">One week from now: </p>
        <p id="oneMonthAhead">One month from now: </p>
        <p id="oneMonthBefore">One month from now: </p>
        <button type="button" class="btn btn-info" onclick="momentManipulate()">Show times</button>
    </div>
    <div class="my-2">
        <h4>Moment.js can also compare dates!</h4>
        <label for="date1">Insert a date in the format (YYYY-MM-DD, Example: 2024-12-25) </label>
        <input type="text" id="date1"><br>
        <label for="date2">Insert a date in the format (YYYY-MM-DD, Example: 2024-12-25) </label>
        <input type="text" id="date2">
        <p id="compareResult"></p>
        <button type="button" class="btn btn-info" onclick="compareDates()">Compare</button>
    </div>
</div>

</body>

</html>