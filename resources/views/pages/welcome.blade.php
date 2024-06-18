@extends('layout.app')
@section('title')
wekcome
@endsection

@section('content')

<div class=""> 
    <ul class=""></ul>
    @foreach($name as $names)
    <li class="odd:text-red-600 list-decimal">{{$names}}</li>
    @endforeach
</div>




@endsection