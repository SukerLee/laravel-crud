<!-- Art Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_title', 'Art Title:') !!}
    {!! Form::text('art_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Tag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_tag', 'Art Tag:') !!}
    {!! Form::text('art_tag', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('art_description', 'Art Description:') !!}
    {!! Form::textarea('art_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Keywords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('art_keywords', 'Art Keywords:') !!}
    {!! Form::textarea('art_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('art_content', 'Art Content:') !!}
    {!! Form::textarea('art_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Thumb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_thumb', 'Art Thumb:') !!}
    {!! Form::text('art_thumb', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_time', 'Art Time:') !!}
    {!! Form::date('art_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Editor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_editor', 'Art Editor:') !!}
    {!! Form::text('art_editor', null, ['class' => 'form-control']) !!}
</div>

<!-- Art View Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_view', 'Art View:') !!}
    {!! Form::number('art_view', null, ['class' => 'form-control']) !!}
</div>

<!-- Cate Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cate_id', 'Cate Id:') !!}
    {!! Form::number('cate_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
