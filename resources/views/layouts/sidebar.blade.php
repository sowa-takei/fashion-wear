<div class="col-2">  
      <form action="{{ url('serch')}}" method="post">
            {{ csrf_field()}}
            {{method_field('get')}}
            <div class="form-group">
                  <input type="text" class="form-control col-md-5" placeholder="名前を入力してください" name="name">
                  <div style="text-align:right;"><input type="submit" class="btn btn-primary col-md-5" value="検索"></div>
            </div> 
      </form>
      <div style="padding: 40.40px;line-height: 30px;">
            <p>ブランド一覧</p> 
            @foreach ($brands as $brand)
                  <a href="{{ route('user.brand_show',['id'=>$brand->id]) }}" style="cursor:default;color:inherit;text-decoration:none;">
                        {{ $brand->name }}</br>
                  </a>
            @endforeach   
      </div>
</div>



