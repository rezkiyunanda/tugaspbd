<!-- Nama Pasal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pasal', 'Nama Pasal:') !!}
    {!! Form::text('nama_pasal', null, ['class' => 'form-control']) !!}
</div>

<!-- Bunyi Pasal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bunyi_pasal', 'Bunyi Pasal:') !!}
    {!! Form::text('bunyi_pasal', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Pelanggaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_pelanggaran', 'Jenis Pelanggaran:') !!}
    {!! Form::text('jenis_pelanggaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pasals.index') !!}" class="btn btn-default">Cancel</a>
</div>
