@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>管理者画面</h1>
           <a href="{{ route('item.create') }}" class="btn btn-primary">+</a>
           <table class="table table-borderless">
              
                <tr>
                    <th>管理者名</th>
                    <td></td>
                </tr>
             
           </table>     
        </div>
    </div>
</div>
@endsection
