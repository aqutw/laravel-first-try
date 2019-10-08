<!doctype html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h1>Try AJAX response:</h1>
<ul>
  <li>TRY_AJAX_1_ROUTE_NAME
  <li>{{ route(TRY_AJAX_1_ROUTE_NAME) }}
</ul>

{{-- HTML::route_relative(TRY_AJAX_1_ROUTE_NAME, array()) --}}

{{ helperfn1('eeee') }}

<button type=button>send AJAX request!</button>

<script src=https://code.jquery.com/jquery-3.4.1.min.js></script>
<script>
$(function () {
  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

  $('button').click(function(){
    $.get("{{ route(TRY_AJAX_1_ROUTE_NAME) }}", function (data) {
      console.log(data);
      debugger;
      alert('Outputed AJAX data in Browser Console.');
    },'json');
  });
});
</script>
</body>
</html>
