<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivasyon Botu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .motivation {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .gif {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="motivation">{{ $randomMotivation }}</div>
    @if ($gifUrl)
        <img src="{{ $gifUrl }}" alt="Motivational GIF" class="gif">
    @else
        <p>GIF bulunamadı!</p>
    @endif
</body>
</html>
