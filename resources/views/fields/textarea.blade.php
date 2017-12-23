<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @if(isset($title))
        <label for="field-{{$name}}">{{$title}}</label>
    @endif
    <textarea class="form-control no-resize {{$class or ''}}" id="field-{{$slug}}"
              rows="{{$rows or ''}}"
              @if(isset($prefix))
                      name="{{$prefix}}[{{$lang}}]{{$name}}"
              @else
              name="{{$lang}}{{$name}}"
              @endif
              placeholder="{{$placeholder or ''}}"
              maxlength="{{$maxlength or ''}}"
              minlength="{{$minlength or ''}}"
    >{!! $value or old($name) !!}</textarea>
    @if(isset($help))
        <p class="form-text text-muted">{{$help}}</p>
    @endif
</div>
<div class="line line-dashed b-b line-lg"></div>
