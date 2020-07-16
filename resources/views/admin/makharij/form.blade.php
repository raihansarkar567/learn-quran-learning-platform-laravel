<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Makharij  Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($makharij->name) ? $makharij->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="control-label">{{ 'Makharij  details' }}</label>
    <input class="form-control" name="details" type="text" id="details" value="{{ isset($makharij->details) ? $makharij->details : ''}}" required>
    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
