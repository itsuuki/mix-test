@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('Item.store')}}" enctype="multipart/form-data">
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
</form>
@endsection