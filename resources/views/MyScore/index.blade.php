@extends('layouts.app')

@section('content')
    <h1>ユーザー一覧</h1>
    <div class='myscores'>
            <div class='myscore'>
                <table class='table'>
                    <tr>
                        <th>ユーザー名</th>
                    </tr>
                    <a href="/myscore/upload">楽譜を投稿する</a>
                    @foreach ($users as $user)
                        <tr>
                            <th><a href="/myscore/{{ $user->id }}">{{ $user->name }}の楽譜</a></th>
                        </tr>
                    @endforeach
                </table>
            </div>
     </div>
@endsection