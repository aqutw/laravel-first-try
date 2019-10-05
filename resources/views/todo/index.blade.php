@foreach ($todos as $todo)
  <p>{{ $todo->id . ' ' . $todo->title . ' ' . $todo->created_at }}</p>
  <form action="{{ url(TODO_ROUTE_NAME, ['todo'=>$todo->id]) }}" method="post">
    @method('delete')
    @csrf
    <input type="submit" value="Delete">
  </form>
@endforeach

<form method="post" action="{{ url(TODO_ROUTE_NAME) }}">
  {{ csrf_field() }}
  {{ '<span>Default' }}
  {!!'<strong>Default</strong>'!!}
  {{-- 此註解將不會出現在渲染後的 HTML --}}
  <input type="text" name="title" value="">
  <button type="submit" name="button">Submit</button>
</form>

{{ $todos }}
