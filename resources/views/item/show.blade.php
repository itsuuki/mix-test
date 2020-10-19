@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/item.css') }}">
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/item.js') }}" defer></script>
@section('content')
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
      @foreach ($image as $img)
        <img src="{{ asset('storage/'. $img->image)}}" width="290px" height="290px">
      @endforeach
      
    </div>
    
    <div class="rights">
      <div class="right">
        <div class="tname">
          {{ $item->tname }}
        </div>
        <div class="price">
          {{ $item->price }}円
        </div>
        <a href="#" class="buy-button">購入</a>
      </div>
    </div>
  </div>
  <div class="bottom">
    {{ $item->description}}
  </div>
</div>
<div id="graydisplay"></div>
@endsection