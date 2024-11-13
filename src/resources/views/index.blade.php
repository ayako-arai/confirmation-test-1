@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
@if (count($errors) > 0)
<p>入力に問題があります</p>
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<body>
<div class="contact-form">
    <div class="contact-form__heading">
        <h2 class="contact-form__title">Contact</h2>
    </div>

    <form  class="form" action="/contacts/confirm" method="post">
        @csrf
        <table class="contact-table">
            <tr>
            <th class="contact-item">お名前<span>※</span></th>
                <td class="contact-body">
                @error('first_name')
                <li>{{ $message }}</li>
                @enderror
                <input class="form-text" type="text" name="first_name" placeholder="山田" />
                @error('last_name')
                <li>{{ $message }}</li>
                @enderror
                <input class="form-text" type="text" name="last_name" placeholder="太郎" />
                </td>
            </tr>

            <tr>
            <th class="contact-item">性別<span>※</span></th>
                <td class="contact-body">
                    @error('gender')
                    <li>{{ $message }}</li>
                    @enderror
                    <label class="contact-sex">
                    <input type="radio" name="gender" />
                    <span class="contact-sex-txt">男性</span>
                    </label>
                    <label class="contact-sex">
                    <input type="radio" name="gender" />
                    <span class="contact-sex-txt">女性</span>
                    </label>
                    <label class="contact-sex">
                    <input type="radio" name="gender" />
                    <span class="contact-sex-txt">その他</span>
                    </label>
                </td>
            </tr>

            <tr>
            <th class="contact-item">メールアドレス<span>※</span></th>
            <td class="contact-body">
                @error('email')
                <li>{{ $message }}</li>
                @enderror
               <input class="form-text" type="email" name="email" placeholder="test@example.com" />
            </td>
            </tr>

            <tr>
            <th class="contact-item">電話番号<span>※</span></th>
            <td class="contact-body">
                @error('tel')
                <li>{{ $message }}</li>
                @enderror
                <input class="form-text" type="tel" name="tel" placeholder="080" /><p>-</p>
                <input class="form-text" type="tel" name="tel" placeholder="1234" /><p>-</p>
                <input class="form-text" type="tel" name="tel" placeholder="5678" />
            </td>
            </tr>

            <tr>
            <th class="contact-item">住所<span>※</span></th>
            <td class="contact-body">
                @error('address')
                <li>{{ $message }}</li>
                @enderror
                <input class="form-text" type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷千駄ヶ谷1-2-3" />
            </td>

            <tr>
            <th class="contact-item">建物名</th>
            <td class="contact-body">
                <input class="form-text" type="text" name="building" placeholder="千駄ヶ谷マンション101" />
            </td>
            <tr>

            <tr>
            <th class="contact-item">お問い合わせの種類<span>※</span></th>
            <td class="contact-body">
                @error('item')
                <li>{{ $message }}</li>
                @enderror
                <select name="item">
                    <option value="">選択してください</option>
                    <span value="商品のお届けについて">商品のお届けについて</span>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル
                    ">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
            </td>
            </tr>

            <tr>
            <th class="contact-item">お問い合わせ内容<span>※</span></th>
            <td class="contact-body">
                @error('detail')
                <li>{{ $message }}</li>
                @enderror
                <textarea  class="form-textarea" name="detail" rows="5" placeholder="お問い合わせ内容をご記載ください">
                </textarea>
            </td>
            </tr>
        </table>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
</body>
@endsection