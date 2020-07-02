@foreach ($json_decode['items'] as $item)
  {{ $item['volumeInfo']['title'] }} <br>
  <hr>
@endforeach
<a href="/">戻る</a>