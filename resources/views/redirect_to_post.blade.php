<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>
<body>
    <form id="redirectForm" action="{{ $route }}" method="POST" style="display: none;">
        @csrf
        @foreach ($input as $key => $value)
            @if(is_array($value))
                @foreach ($value as $subKey => $subValue)
                    <input type="hidden" name="{{ $key }}[{{ $subKey }}]" value="{{ $subValue }}">
                @endforeach
            @else
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endif
        @endforeach
    </form>
    <script>
        document.getElementById('redirectForm').submit();
    </script>
</body>
</html>
