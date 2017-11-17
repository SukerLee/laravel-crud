<!-- Sort Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sort_order', 'Sort Order:') !!}
    {!! Form::number('sort_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pic', 'Pic:') !!}
    {!! Form::file('pic', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Introduction Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('introduction', 'Introduction:') !!}
    {!! Form::textarea('introduction', null, ['class' => 'form-control']) !!}
</div>

<!-- Isshow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isshow', 'Isshow:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isshow', false) !!}
        {!! Form::checkbox('isshow', '1', null) !!} 1
    </label>
</div>

<!-- Istop Field -->
<div class="form-group col-sm-6">
    {!! Form::label('istop', 'Istop:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('istop', false) !!}
        {!! Form::checkbox('istop', '1', null) !!} 1
    </label>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Spec Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('spec', 'Spec:') !!}
    {!! Form::textarea('spec', null, ['class' => 'form-control']) !!}
</div>

<!-- Create Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('create_time', 'Create Time:') !!}
    {!! Form::date('create_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Update Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('update_time', 'Update Time:') !!}
    {!! Form::date('update_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
