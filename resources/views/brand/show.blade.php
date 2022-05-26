@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
      <div class="card">
        <div class="card-header">{{ __('ブランド詳細画面') }}</div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ Storage::url($brands->image_id) }}" width="100%" >
                </div>
                <div class="col-9">
                    <table class="table table-borderless"> 
                        <tr>
                            <th>ブランドid</th>
                            <td>{{ $brands->id}}</td>
                        </tr>
                        <tr>
                            <th>ブランド名</th>
                            <td>{{ $brands->name}}</td>
                        </tr>
                        <tr>
                            <th>ブランド詳細</th>
                            <td>{{ $brands->introduction }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection