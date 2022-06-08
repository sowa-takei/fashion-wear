@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
      <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ Storage::url($items->image_id) }}" height="400px" >
                </div>
                <div class="col-7">
                    <table class="table table-borderless"> 
                        <tr>
                            <th>商品名</th>
                            <td>{{ $items->name}}</td>
                        </tr>
                        <tr>
                            <th>値段</th>
                            <td>{{ $items->price }}円</td>     
                        </tr>
                    </table>
                    <table class="table table-borderless"> 
                        <tr>
                            <th>ブランド詳細</th>
                        </tr>
                        <tr>
                            <td>{!! nl2br(htmlspecialchars($items->introduction )) !!}</td>
                        </tr>
                    </table>    
                </div>
            </div>
            
              
                       
                
            
          </div>
    </div>
</div>
@endsection
