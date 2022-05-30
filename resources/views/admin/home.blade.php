@extends('layouts.app_admin')

@section('content')
<div class="conteiner">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->introduction }}</td>
                                <td>{{ $item->price }}</td>                                
                                <td><a href="{{ route('item.show',['id'=>$item->id]) }}" class="btn btn-primary">詳細</a></td>
                                <td><a href="{{ route('item.edit',['id'=>$item->id]) }}" class="btn btn-info">編集</a></td>
                                <td>
                                    <form action="{{ route('item.destroy',['id'=>$item->id]) }}" method="POST">@csrf
                                        <button type="submit" class="btn btn-danger">削除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
