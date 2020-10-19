@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/item.css') }}">
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/item.js') }}" defer></script>
@section('content')
<form method="POST" action="{{route('Item.store')}}" enctype="multipart/form-data">
<div class="tops">
  <div class="top">
    <div class="left">
      <div class="file-label">
        <label for="price">
          表
        </label>
        <label for="price">
          裏
        </label>
      </div>
      <div class="file-two">
        <input type="file" name="img" id="myfile1">
        <input type="file" name="img" id="myfile2">
      </div>
      <div class="preview">
        <img id="img1" style="width:290px;height:290px;" />
        <img id="img2" style="width:290px;height:290px;" />
      </div>
    </div>
    <div class="rights">
      <div class="right">
        <label for="tname">
            商品名
        </label>
        <input
            id="tname"
            name="tname"
            class="tname {{ $errors->has('tname') ? 'is-invalid' : '' }}"
            value="{{ old('tname') }}"
            type="text"
        >
        <label for="price">
            金額
        </label>
        <input
            id="price"
            name="price"
            class="price {{ $errors->has('price') ? 'is-invalid' : '' }}"
            value="{{ old('price') }}"
            type="text"
        >
        <button class="buy-button">購入</button>
      </div>
    </div>
  </div>
  <div class="bottom">
    <label for="price">
        商品説明
    </label>
    <textarea
        id="description"
        name="description"
        class="description"
        rows="4"
    >{{ old('description[]') }}</textarea>
  </div>
</div>
</form>
<div id="graydisplay"></div>
@endsection