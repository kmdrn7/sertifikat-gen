<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<body>
    <style>
        .page-break {
            page-break-after: always;
        }
        * {
            margin: 0;
            padding: 0;
        }
    </style>
    <div style="position: relative">
        @php $jml=count($nama); $i=0; @endphp
        @foreach ($nama as $data)
        @php $i++; @endphp
        <h3 style="font-family: 'Times New Roman', sans-serif;
                    left: 0;
                    top: 7.30cm;
                    position: absolute;
                    width: 100%;
                    margin-left: 3cm;
                    margin-right: 3cm;
                    z-index: 99;
                    font-size: 38px;
                    text-align: center;
                    color: 231F1E">
                    {{ $data }}
            </h3>
        <img style="position: absolute;
                    width: 100%;
                    z-index: 1"
            src="{{ public_path($img) }}" alt="">
        @if ($i != $jml)
            <div class="page-break"></div>
        @endif
        @endforeach
    </div>
</body>
</html>