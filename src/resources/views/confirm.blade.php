@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h3>Confirm</h3>
    </div>

    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table_header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="address" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table_text">
                        <input type="text" name="item" value="{{ $contact['item'] }}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="textarea" name="detail" value="{{ $contact['detail'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="btn" type="submit" name="submit">送信</button>
            <input class="btn" type="button" value="修正" onclick="history.back(-1)">
            
        </div>
    </form>
</div>