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
        @php $jml=count($peserta); $i=0; @endphp
        @foreach ($peserta as $data)
        @php $i++; @endphp
        <h3 style="font-family: 'Times New Roman', sans-serif;
                    left: 0;
                    top: 3.6cm;
                    position: absolute;
                    width: 100%;
                    margin-left: 1cm;
                    margin-right: 1cm;
                    z-index: 99;
                    font-size: 25px;
                    text-align: center;
                    color: white;
                    border-bottom: 1px solid gray;
                    padding-bottom: 8px">
                    {{ $data['nama'] }}
            </h3>
        <h3 style="font-family: 'Times New Roman', sans-serif;
                    left: 0;
                    top: 4.8cm;
                    position: absolute;
                    width: 100%;
                    margin-left: 1cm;
                    margin-right: 1cm;
                    z-index: 99;
                    font-size: 15px;
                    text-align: center;
                    color: white">
                    {{ $data['nrp'] }}
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