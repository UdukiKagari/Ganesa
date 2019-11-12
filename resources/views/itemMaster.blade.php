@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="h2">商品マスタ</h1>
    <div class="btn-toolber mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">インポート</button>
            <button class="btn btn-sm btn-outline-secondary">エクスポート</button>
        </div>
    </div>
</div>
<div class="btn-toolber mb-2">
    <div class="btn-group">
        <button class="btn btn-sm btn-outline-secondary">新規商品登録</button>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>商品マスタ番号</th>
                <th>商品マスタ名</th>
                <th>ブランド名</th>
                <th>定価</th>
                <th>販売価格</th>
                <th>登録ステータス</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
    </table>
</div>
@endsection