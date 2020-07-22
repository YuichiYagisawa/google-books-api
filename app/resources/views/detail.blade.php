@extends('template')
<h1>{{ $json_decode['volumeInfo']['title'] }}</h1>
<p>{{ $json_decode['volumeInfo']['description'] }}</p>
<form action="/store" method="post">
  @csrf
  <input type="hidden" name="title" value="{{ $json_decode['volumeInfo']['title'] }}">
  <input type="hidden" name="description" value="{{ $json_decode['volumeInfo']['description'] }}">
  <input type="hidden" name="publishedDate" value="{{ $json_decode['volumeInfo']['publishedDate'] }}">
  <input type="hidden" name="id" value="{{ $json_decode['id'] }}">
  <input type="submit" value="登録">
</form>