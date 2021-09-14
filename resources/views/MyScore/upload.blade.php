@extends('layouts.app')

@section('content')
    <div class="upload">    
        <form action="/myscore/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="name">
                    <h2>タイトル</h2>
                    <input type="text" name="title" placeholder="タイトル"/>
                </div>
                <div class="image"></div>
                    <label for="photo">画像ファイル:</label>
                    <input type="file" class="form-control" name="file">
                    <br>
                    <input type="submit" value="アップロード" style="margin:20px;"/>
                </div>    
        </form>
    </div>
    <div class="notice">
        <p>＊画像を送付する際は一枚にまとめ，見やすいようなコード譜を心がけてください。</p>
    </div>
@endsection