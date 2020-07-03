<form action="/result" method="post">
  @csrf
  <input type="text" name="book" size="20" />
  <input type="submit" value="Submit" />
</form>

@foreach ($books as $book)
  {{ $book->title }}<br>
@endforeach