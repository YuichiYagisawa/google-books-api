@foreach ($json_decode['items'] as $item)
  {{ $item['volumeInfo']['title'] }} <br>
  <form action="/detail" method="post">
    @csrf
    <input type="hidden"  name="book_url" value="{{ $item['selfLink'] }}">
    <input type="submit" value="詳細">
  </form>
  <hr>
@endforeach
<a href="/">戻る</a>