@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
      <div class="card">
        <div class="card-header">{{ __('ブランド詳細画面') }}</div>
            <div class="row">
                <div class="col-12">
                    <div style="text-align:center;"><img src="{{ Storage::url($brands->image_id) }}" height="400px" ></div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                    <table class="table table-borderless"> 
                        <tr>
                            <th>ブランドid</th>
                            <td>{{ $brands->id }}</td>    
                        </tr>
                        <tr>
                            <th>ブランド名</th>
                            <td>{{ $brands->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="table table-borderless"> 
                        <tr>
                            <th>ブランド詳細</th>
                        </tr>
                        <tr>
                            <td>{!! nl2br(htmlspecialchars($brands->introduction )) !!}</td>
                        </tr>
                    </table>       
                </div>
            </div>
          </div>
    </div>
</div>
@endsection