<div class="form-group">
    {!! Form::label('yt_name', '團員姓名：') !!}
    {!! Form::text('yt_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('c_id', '頻道編號：') !!}
    {!! Form::select('c_id', $teams, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year','團員年齡:') !!}
    {!! Form::date('year',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('onboarddate','出道日:') !!}
    {!! Form::date('onboarddate',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('education', '團員學歷：') !!}
    {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', '團員國籍：') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
