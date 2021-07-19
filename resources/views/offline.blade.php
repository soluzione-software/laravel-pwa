<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>No internet</title>

    <!-- inline the webpage's stylesheet -->
    <style>
        body {
            font-family: helvetica, arial, sans-serif;
            margin: 2em;
        }

        h1 {
            font-style: italic;
            color: #3c4655;
        }

        p {
            margin-block: 1rem;
        }

        button {
            display: block;
        }
    </style>
</head>
<body>
<h1>No internet</h1>

<p>Click the button below to try reloading.</p>
<button type="button">Reload</button>

<!-- inline the webpage's javascript file -->
<script>
    document.querySelector("button").addEventListener("click", () => {
        window.location.reload();
    });
</script>
</body>
</html>