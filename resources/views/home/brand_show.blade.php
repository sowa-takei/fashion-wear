@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="card">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div style="text-align: center;">
                    <img src="{{ Storage::url($brands->image_id) }}" height="400px" >
                    {{ $brands->name}}
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div style="text-align: center;">
                        {{ $brands->introduction }}
                    </div> 
                </div> 
            </div>
        </div>
        @foreach ($items as $item)
            <img src="{{ Storage::url($item->image_id) }}"  >
        @endforeach
    </div>
</div>
@endsection