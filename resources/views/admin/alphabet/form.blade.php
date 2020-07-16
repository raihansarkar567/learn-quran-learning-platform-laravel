<div class="form-group {{ $errors->has('letter') ? 'has-error' : ''}}">
    <label for="letter" class="control-label">{{ 'Letter' }}</label>
    <input class="form-control" name="letter" type="text" id="letter" value="{{ isset($alphabet->letter) ? $alphabet->letter : ''}}" required>
    {!! $errors->first('letter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($alphabet->name) ? $alphabet->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($alphabet->description) ? $alphabet->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('makharij_id') ? 'has-error' : ''}}">
    <label for="makharij_id" class="control-label">{{ 'makharij_id' }}</label>
    <select name="makharij_id" class="form-control selectpicker">
        <option value="makharij_id">Select makharij_id</option>
        @foreach (App\Makharij::all() as $item)
    {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}
            <option value="{{$item->id}}" @if(isset($alphabet->makharij_id))
                @if($alphabet->makharij_id  == $item->id) selected @endif
                @endif>
                {{$item->name}}
            </option>
        @endforeach
    </select>
    {!! $errors->first('makharij_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($alphabet->image) ? $alphabet->image : ''}}">
    <input type='text'  name="old_image" value="{{ isset($alphabet->image) ? $alphabet->image : ''}}" />
    {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sound') ? 'has-error' : ''}}">
    <label for="sound" class="control-label">{{ __('sound') }}</label>
    <input class="form-control" name="sound" type="file" id="sound" value="{{ isset($alphabet->sound) ? $alphabet->sound : ''}}">
    <input type='text'  name="old_sound" value="{{ isset($alphabet->sound) ? $alphabet->sound : ''}}" />
    {!! $errors->first('sound', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
