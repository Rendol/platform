<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @if(isset($title))
        <label for="field-{{$slug}}">{{$title}}</label>
    @endif
    <input type="{{$type}}" class="form-control {{$class or ''}}" id="field-{{$lang}}-{{$slug}}"
           @if(isset($prefix))
           name="{{$prefix}}[{{$lang}}]{{$name}}"
           @else
           name="{{$lang}}{{$name}}"
           @endif
           value="{{$value or old($name)}}"
           placeholder="{{$placeholder or ''}}"
           max="{{$max or ''}}"
           maxlength="{{$maxlength or ''}}"
           min="{{$min or ''}}"
           minlength="{{$minlength or ''}}"
    >
    @if(isset($help))
        <p class="form-text text-muted">{{$help}}</p>
    @endif
</div>
<div class="line line-dashed b-b line-lg"></div>
