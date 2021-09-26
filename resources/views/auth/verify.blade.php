@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスを確認する') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新しい認証リンクがあなたのメールアドレスに送信されました。') }}
                        </div>
                    @endif

                    {{ __('続ける前に送信された認証リンクをご確認ください') }}
                    {{ __('メールが届かない場合l') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('ここをクリックしてもう一度リクエストしてください。') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
