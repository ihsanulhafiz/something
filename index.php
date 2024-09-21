<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You've been Rick Rolled!</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <?php
    // PHP code to generate a random message
    $messages = array(
        "Congratulations! You've won a free iPhone!",
        "Click here for an exclusive offer!",
        "You're the 1,000,000th visitor!"
    );
    $randomMessage = $messages[array_rand($messages)];
    ?>

    <div id="content">
        <h1><?php echo $randomMessage; ?></h1>
        <button onclick="playVideo()">Claim Now!</button>
    </div>

    <iframe id="rickroll" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display: none;"></iframe>

    <script>
        function playVideo() {
            document.getElementById('content').style.display = 'none';
            document.getElementById('rickroll').style.display = 'block';
        }
    </script>
</body>
</html>