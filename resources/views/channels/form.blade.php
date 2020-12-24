<div class="form-group">
    {!! Form::label('c_name', '團隊名稱：') !!}
    {!! Form::text('c_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category', '團隊類別：') !!}
    {!! Form::select('category', $teams, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fans','粉絲數(萬):') !!}
    {!! Form::date('fans',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('views','平均觀看量(萬):') !!}
    {!! Form::date('views',null ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
