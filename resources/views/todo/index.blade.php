<form method="post" action="">
  {{ csrf_field() }}
  {{ '<span>Default' }}
  {!!'<strong>Default</strong>'!!}
  {{-- 此註解將不會出現在渲染後的 HTML --}}
  <input type="text" name="title" value="">
  <button type="submit" name="button">Submit</button>
</form>