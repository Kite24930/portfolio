<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/icon.png') }}">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-status-bar-style" content="black-translucent">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://unpkg.com/sanitize.css">

    <style>
        * {
            color: #CCFFFF;
        }
        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #000F1F;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 16px;
        }
        header a {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            width: 80px;
            background-color: #CCFFFF;
            border-radius: 50%;
        }
        header a img {
            width: 60px;
        }
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }
        footer {
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <a href="{{ route('index') }}">
        <img src="{{ asset('storage/icon.png') }}" alt="icon">
    </a>
</header>
<main>
    <h1>お問い合わせ</h1>
    <div>
        <p>お問い合わせいただき、ありがとうございます。</p>
        <p>以下の内容でお問い合わせを受け付けました。</p>
    </div>
    <div>
        <p>お名前：{{ $contact['name'] }}</p>
        <p>メールアドレス：{{ $contact['email'] }}</p>
        <p>お問い合わせ内容：</p>
        <p>{!! nl2br(e($contact['message'])) !!}</p>
    </div>
    <div>
        <p>担当者より折り返しご連絡いたしますので、しばらくお待ちください。</p>
    </div>
    <div>
        <p>鳥田 莞太</p>
    </div>
</main>
<x-footer />
</body>
</html>
