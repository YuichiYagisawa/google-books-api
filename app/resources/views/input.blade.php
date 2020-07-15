@extends('template')

@section('input')

  <form action="/result" method="post">
    @csrf
    <input type="text" name="book" size="20" id="inc_serch" />
    <input type="submit" value="Submit" />
  </form>

  <div id='book_list'>
  </div>
  
  @foreach ($books as $book)
    {{ $book->title }}<br>
  @endforeach
    
@endsection