@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
      <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
                <div class="col-4">
                    <img src="{{ Storage::url($items->image_id) }}" width="100%" >
                </div>
                <div class="col-8">
                    <table class="table table-borderless"> 
                        <tr>
                            <th>商品id</th>
                            <td>{{ $items->id}}</td>
                        </tr>
                        <tr>
                            <th>商品名</th>
                            <td>{{ $items->name}}</td>
                        </tr>
                        <tr>
                            <th>商品詳細</th>
                            <td>{{ $items->introduction }}</td>
                        </tr>
                        <tr>
                            <th>値段</th>
                            <td>{{ $items->price }}円</td>     
                        </tr>
                    </table>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
