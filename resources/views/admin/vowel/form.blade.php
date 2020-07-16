<div class="form-group {{ $errors->has('letter') ? 'has-error' : ''}}">
    <label for="letter" class="control-label">{{ 'Letter' }}</label>
    <input class="form-control" name="letter" type="text" id="letter" value="{{ isset($vowel->letter) ? $vowel->letter : ''}}" required>
    {!! $errors->first('letter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($vowel->name) ? $vowel->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pronounced') ? 'has-error' : ''}}">
    <label for="pronounced" class="control-label">{{ 'pronounced' }}</label>
    <input class="form-control" name="pronounced" type="text" id="pronounced" value="{{ isset($vowel->pronounced) ? $vowel->pronounced : ''}}" required>
    {!! $errors->first('pronounced', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'type' }}</label>
    <select name="type" class="form-control selectpicker">
        <option value="type">Select type</option>
    {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}
            <option value="short_vowels" @if(isset($vowel->type))
                @if($vowel->type  == "short_vowels") selected @endif
                @endif>
                Short Vowels (Harakat)
            </option>
            <option value="long_vowels" @if(isset($vowel->type))
                @if($vowel->type  == "long_vowels") selected @endif
                @endif>
                Long Vowels (Huroof Maddah)
            </option>
            <option value="sukun" @if(isset($vowel->type))
                @if($vowel->type  == "sukun") selected @endif
                @endif>
                zero-vowel (Sukun)
            </option>
            <option value="shaddah" @if(isset($vowel->type))
                @if($vowel->type  == "shaddah") selected @endif
                @endif>
                Letter Emphasis (Shaddah)
            </option>
            <option value="nunation" @if(isset($vowel->type))
                @if($vowel->type  == "nunation") selected @endif
                @endif>
                Nunation (Tanween)
            </option>
    </select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($vowel->description) ? $vowel->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($vowel->image) ? $vowel->image : ''}}">
    <input type='text'  name="old_image" value="{{ isset($vowel->image) ? $vowel->image : ''}}" />
    {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sound') ? 'has-error' : ''}}">
    <label for="sound" class="control-label">{{ __('sound') }}</label>
    <input class="form-control" name="sound" type="file" id="sound" value="{{ isset($vowel->sound) ? $vowel->sound : ''}}">
    <input type='text'  name="old_sound" value="{{ isset($vowel->sound) ? $vowel->sound : ''}}" />
    {!! $errors->first('sound', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
