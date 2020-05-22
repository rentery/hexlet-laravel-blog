@extends('layouts.app')

@section('title', 'articles')
@section('header', 'My articles')

@section('content')
@foreach ($articles as $article)
<h2>{{$article->name}}</h2>
<div>{{$article->body}}</div>
@endforeach

@endsection