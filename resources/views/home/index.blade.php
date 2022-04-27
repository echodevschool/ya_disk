<html>
<head>

</head>
<body>
<h1>{{ $data }}</h1>
@if($max > $min)
    @php
        $php = 'it php';
    @endphp
    {{$php}}
@endif
<script src="{{mix('js/index.js')}}"></script>
</body>
</html>
