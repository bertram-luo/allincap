@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>Allin Cap administraction Panel</h1>
        <p>this is the backend administration page of Allin Cap</p>
        @if ($signedIn)
        <a class="btn btn-primary" href="/news/create">Create a News</a>
        @else
        <a class="btn btn-primary" href="/atuh/register">Sign Up</a>
        @endif
      </div>
    </div>
</div>
@stop
