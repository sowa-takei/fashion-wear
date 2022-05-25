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
                                <th>ブランド名</th>
                                <th>商品詳細</th>
                                <th>値段</th>
                            </tr>
                        </thead>
                            <tr>  
                                <td>   
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection