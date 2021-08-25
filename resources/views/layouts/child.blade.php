<!-- Хранится в resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Внутренняяя')

@section('sidebar')
    @parent
    <p>Дочерняя боковая панель</p>
@endsection

@section('content')
    <p>Дочерний контент</p>
@endsection






