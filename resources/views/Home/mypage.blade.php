@extends('layouts.app')

@section('content')
        <h1>G-CHORD</h1>
        <a href="/artists">アーティスト一覧</a><br>
        
        <br>
        
        <form method="GET" action="/artists/search" class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="アーティスト名を検索" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">検索する</button>
        </form>
@endsection