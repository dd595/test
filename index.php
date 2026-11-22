<?php
$url = "http://159.65.71.7:8081/blabla123.php";
$html = file_get_contents($url);

preg_match('/<body[^>]*>(.*?)<\/body>/is', $html, $matches);
$body = $matches[1] ?? "Could not fetch page.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Fetcher</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ddd;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .content {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Fetched Page Body</h2>

    <div class="content">
        <?= $body ?>
    </div>
</div>

</body>
</html>
