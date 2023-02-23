<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class=" form-group">
        <label for="">{{$label}}</label>
        <input type={{$type}} class="form-control" name={{$name}}id="" aria-describedby="emailHelpId" placeholder="" value="{{old('name')}}">
      
        {{$demo}}
      
        <span>
        @error('{{$name}}')
            {{$message}}
            @enderror
        </span>
        {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
      </div>
    
</div>