<!doctype html>
<html lang="en">
<body>
<div class="jumbotron">
    <h1 class="display-3">Thank You, {{ $name }}</h1>
    <p class="lead">We are glad that you took the first step. We will make sure your query gets solved.</p>
    <hr class="my-2">
    <p style="font-weight: bold">You have sent the following: </p><br>
    <p>Message: {{ $message }}</p>
    <p style="font-weight: bold">You have asked to be contacted here: </p><br>
    <p>Message: {{ $email }}</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="https://www.aidumotor.com" role="button">Visit AIDU Motors</a>
    </p>
</div>
</body>
</html>