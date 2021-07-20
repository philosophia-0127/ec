@extends('layouts.frame')

@section('title')
    Top
@endsection

@section('content')
    topページ
    <a href="{{ route('home.about') }}">店舗詳細へ</a>
@endsection
