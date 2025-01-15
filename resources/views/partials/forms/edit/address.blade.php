<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
    {{ Form::label('address', trans('general.address'), array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-7">
        <input class="form-control" aria-label="address" maxlength="191" name="address" type="text" id="address" value="{{ old('address', $item->address) }}">
        {!! $errors->first('address', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address2') ? ' has-error' : '' }}">
    <label class="sr-only " for="address2">{{  trans('general.address')  }}</label>
    <div class="col-md-7 col-md-offset-3">
        <input class="form-control" aria-label="address2" maxlength="191" name="address2" type="text" value="{{ old('address2', $item->address2) }}">
        {!! $errors->first('address2', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
    {{ Form::label('city', trans('general.city'), array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-7">
        <input class="form-control" aria-label="city" maxlength="191" name="city" type="text" id="city" value="{{ old('city', $item->city) }}">
        {!! $errors->first('city', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
    {{ Form::label('state', trans('general.state'), array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-7">
        <input class="form-control" aria-label="state" maxlength="191" name="state" type="text" id="state" value="{{ old('state', $item->state) }}">
        {!! $errors->first('state', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}

    </div>
</div>

<div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
    {{ Form::label('country', trans('general.country'), array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-7">
    {!! Form::countries('country', old('country', $item->country), 'select2') !!}
        <p class="help-block">{{ trans('general.countries_manually_entered_help') }}</p>
        {!! $errors->first('country', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
    {{ Form::label('zip', trans('general.zip'), array('class' => 'col-md-3 control-label', 'maxlength'=>'10')) }}
    <div class="col-md-7">
        <input class="form-control" name="zip" type="text" id="zip" value="{{ old('zip', $item->zip) }}">
        {!! $errors->first('zip', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>
