<x-layout>
    <x-slot name="title">
    登録フォーム
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>

    <h1>登録フォーム</h1>
     <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label>
              氏名
                <input type="string" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group row">
        <label>
        性別
         <p class="col-sm-4 col-form-label"></p>
                <div class="col-sm-8">
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
            @error('gender')
            <div class="error">{{ $message }}</div>
            @enderror       
                </div>
        </label>
        <div class="form-group">
        <tr><th>出身地</th><td>
        <select type="text" class="form-control" name="prefecture">                 
        @foreach(config('prefecture') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
         </select>
           @error('prefecture')
           <div class="error">{{ $message }}</div>
           @enderror     
       </div>
        <div class="form-group">
        <tr><th>職種</th><td>
        <select type="text" class="form-control" name="company">                 
        @foreach(config('company') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
         </select>
           @error('company')
           <div class="error">{{ $message }}</div>
           @enderror 
        </div>
        <div class="form-group">
        <tr><th>部署</th><td>
        <select type="text" class="form-control" name="jyob">                 
        @foreach(config('jyob') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
        </select>
           @error('jyob')
           <div class="error">{{ $message }}</div>
           @enderror 
         </div>
        <tr><th>役職</th><td>
        <select type="text" class="form-control" name="employmentstatus">                          
        @foreach(config('employmentstatus') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
       </select>
           @error('employmentstatus')
           <div class="error">{{ $message }}</div>
           @enderror 
       </div>
        <div class="form-button">
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
</x-layout>
