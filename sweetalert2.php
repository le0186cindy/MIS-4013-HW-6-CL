<?php
    $current_page = basename($_SERVER['PHP_SELF']);
    include 'header.php';
?>
<html>
<body>

<div class="my-2 mx-4">
    <div class="my-2">
        <h1>SweetAlert2</h1>
        <p>A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes</p>
    </div>
    <div class="my-2">
        <h3>It can show an alert! Click the button below to try</h3>
        <button class="btn btn-info" onclick="showAlert()">Try Alert!</button>
    </div>
    <div class="my-2">
        <h3>You could use it for a confirmation box instead of the ugly default JavaScript one!</h3>
        <button class="btn btn-info" onclick="showAlert2()">Try confirm box!</button>
    </div>
    <div class="my-2">
        <h3>One alert can have multiple options!</h3>
        <button class="btn btn-info" onclick="showAlert3()">Multiple options!</button>
    </div>
</div>

</body>

</html>