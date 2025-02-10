<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Day Invitation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="envelope" onclick="toggleEnvelope()">
        <div class="flowerboquet flowerboquet1"><img src="pics/boquet.png" alt="flowers"></div>
        <div class="flowerboqueta flowerboqueta1"><img src="pics/boquet.png" alt="flowers"></div>
        <div class="flap"></div>
        <div class="body"></div>
        <div class="letter">
            <h1>Will You Be My Valentine?</h1>
            <p>Dear Samantha,</p>
            <p>I would be honored if you would be my Valentine this year. Let's make this day special together!</p>
            <p>Love, Justin</p>
        </div>
        <div class="heart heart1">❤</div>
        <div class="heart heart2">❤</div>
        <div class="heart heart3">❤</div>
        <div class="heart heart4">❤</div>
        <div class="heart heart5">❤</div>
        <div class="heart heart6">❤</div>
    </div>

    <script>
        function toggleEnvelope() {
            const envelope = document.querySelector('.envelope');
            envelope.classList.toggle('open');
        }
    </script>
</body>
</html>
