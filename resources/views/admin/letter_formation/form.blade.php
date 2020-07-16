
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($letter_formation->name) ? $letter_formation->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'type' }}</label>
    <select name="type" class="form-control selectpicker">
        <option value="type">Select type</option>
    {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}
            <option value="six_letter_group" @if(isset($letter_formation->type))
                @if($letter_formation->type  == "six_letter_group") selected @endif
                @endif>
                six_letter_group
            </option>
            <option value="general_group" @if(isset($letter_formation->type))
                @if($letter_formation->type  == "general_group") selected @endif
                @endif>
                general_group
            </option>
    </select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($letter_formation->description) ? $letter_formation->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('detached_image') ? 'has-error' : ''}}">
    <label for="detached_image" class="control-label">{{ __('detached_image') }}</label>
    <input class="form-control" name="detached_image" type="file" id="detached_image" value="{{ isset($letter_formation->detached_image) ? $letter_formation->detached_image : ''}}">
    <input type='text'  name="old_detached_image" value="{{ isset($letter_formation->detached_image) ? $letter_formation->detached_image : ''}}" />
    {!! $errors->first('detached_image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('initial_image') ? 'has-error' : ''}}">
    <label for="initial_image" class="control-label">{{ __('initial_image') }}</label>
    <input class="form-control" name="initial_image" type="file" id="initial_image" value="{{ isset($letter_formation->initial_image) ? $letter_formation->initial_image : ''}}">
    <input type='text'  name="old_initial_image" value="{{ isset($letter_formation->initial_image) ? $letter_formation->initial_image : ''}}" />
    {!! $errors->first('initial_image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('medial_image') ? 'has-error' : ''}}">
    <label for="medial_image" class="control-label">{{ __('medial_image') }}</label>
    <input class="form-control" name="medial_image" type="file" id="medial_image" value="{{ isset($letter_formation->medial_image) ? $letter_formation->medial_image : ''}}">
    <input type='text'  name="old_medial_image" value="{{ isset($letter_formation->medial_image) ? $letter_formation->medial_image : ''}}" />
    {!! $errors->first('medial_image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('final_image') ? 'has-error' : ''}}">
    <label for="final_image" class="control-label">{{ __('final_image') }}</label>
    <input class="form-control" name="final_image" type="file" id="final_image" value="{{ isset($letter_formation->final_image) ? $letter_formation->final_image : ''}}">
    <input type='text'  name="old_final_image" value="{{ isset($letter_formation->final_image) ? $letter_formation->final_image : ''}}" />
    {!! $errors->first('final_image', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('sound') ? 'has-error' : ''}}">
    <label for="sound" class="control-label">{{ __('sound') }}</label>
    <input class="form-control" name="sound" type="file" id="sound" value="{{ isset($letter_formation->sound) ? $letter_formation->sound : ''}}">
    <input type='text'  name="old_sound" value="{{ isset($letter_formation->sound) ? $letter_formation->sound : ''}}" />
    {!! $errors->first('sound', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
