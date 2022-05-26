@extends('layouts.app_admin')

@section('content')
<div class="conteiner">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('新規作成画面') }}
                <a href="{{ route('brand.create') }}" class="btn btn-primary">+</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-borderless"> 
                        <thead class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>ブランド名</th>
                               
                                
                            </tr>
                        </thead>
                        @foreach ($brands as $brand)
                            <tr>  
                                <td>{{ $brand->id}}</td>
                                <td>{{ $brand->name}}</td>
                                <td><a href="{{ route('brand.show',['id'=>$brand->id]) }}" class="btn btn-primary">詳細</a></td>
                                <td><a href="{{ route('brand.edit',['id'=>$brand->id]) }}" class="btn btn-info">編集</a></td>
                                <td>
                                    <form action="{{ route('brand.destroy',['id'=>$brand->id]) }}" method="POST">@csrf
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