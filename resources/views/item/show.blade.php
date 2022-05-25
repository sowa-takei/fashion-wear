@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('新規作成画面') }}
                <a href="{{ route('item.create') }}" class="btn btn-primary">+</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-borderless"> 
                        <thead class="thead-light">
                            <tr>
                                <th>商品id</th>
                                <th>商品名</th>
                                <th>商品詳細</th>
                                <th>値段</th>
                            </tr>
                        </thead>
                        
                            <tr>
                                <td>{{ $items->id}}</td>
                                <td>{{ $items->name}}</td>
                                <td>{{ $items->introduction }}</td>
                                <td>{{ $items->price }}</td>
                                <td><a href="" class="btn btn-primary">詳細</a></td>
                            </tr>
                         
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
