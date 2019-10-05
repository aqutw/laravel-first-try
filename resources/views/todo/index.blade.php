@foreach ($todos as $todo)
  <p>{{ $todo->id . ' ' . $todo->title . ' ' . $todo->created_at }}</p>
  <form action="{{ route(DELETE_BY_ID_TODO_ROUTE_NAME, ['todo'=>$todo->id]) }}" method="post">
    @method('delete')
    @csrf
    <input type="submit" value="Delete">
  </form>
@endforeach

<ul>
  <li>{{ DELETE_BY_ID_TODO_ROUTE_NAME }}
  <li>url(route(DELETE_BY_ID_TODO_ROUTE_NAME, ['todo'=>1])) ... fail
  <li>{{ route(DELETE_BY_ID_TODO_ROUTE_NAME, ['todo'=>1]) }}
  <li>{{ CREATE_TODO_ROUTE_NAME }}
  <li>{{ url(route(CREATE_TODO_ROUTE_NAME)) }}
  <li>{{ route(CREATE_TODO_ROUTE_NAME) }}
  <li>{{ TODO_LIST_ROUTE_NAME }}
  <li>{{ url(route(TODO_LIST_ROUTE_NAME)) }}
  <li>{{ route(TODO_LIST_ROUTE_NAME) }}
</ul>
<form method="post" action="{{ route(CREATE_TODO_ROUTE_NAME) }}">
  @csrf
  {{-- csrf_field() --}}
  {{ '<span>Default' }}
  {!!'<strong>Default</strong>'!!}
  {{-- 此註解將不會出現在渲染後的 HTML --}}
  <input type="text" name="title" value="">
  <button type="submit" name="button">Submit</button>
</form>

{{ $todos }}
