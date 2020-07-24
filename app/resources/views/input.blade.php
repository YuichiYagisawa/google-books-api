@extends('template')

@section('input')

  <form action="/result" method="get">
    @csrf
    <input type="text" name="book" size="20" id="inc_serch" />
    <input type="submit" value="Submit" />
  </form>

  <div>
    <ul id='book_list'></ul>
  </div>
  
  {{-- @foreach ($books as $book)
    {{ $book->title }}<br>
  @endforeach --}}
    
@endsection