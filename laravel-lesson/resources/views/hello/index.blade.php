<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16px;
            color: #999;
        }

        h1 {
            font-size: 100px;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>foreachディレクティブに関して</p>
    <ol>
        @for ($i = 1; $i < 100; $i++)
            @if ($i % 2 == 1)
                @continue
            @elseif($i <= 10)
                <li>NO,{{ $i }}</li>
            @else
            @break
        @endif
    @endfor
</ol>
<!-- <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form> -->
</body>

</html>
