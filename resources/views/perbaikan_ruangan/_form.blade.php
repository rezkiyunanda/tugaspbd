<div class="form-group">
    <label for="ruangan_id">Ruangan</label>
    {{ Form::select('ruangan_id',$ruangans, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="tanggal_pengajuan">tanggal pengajuan</label>
    {{ Form::date('tanggal_pengajuan', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="pengaju_id">Pengaju</label>
    {{ Form::select('pengaju_id',$users, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="alasan">Alasan</label>
    {{ Form::textarea('alasan', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="perbaikan_status_id">Perbaikan Status</label>
    {{ Form::select('perbaikan_status_id',$status, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="status_pengajuan">Status Pengajuan</label>
    {{ Form::select('status_pengajuan',['1'=>'Ajukan'], null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
    {{ Form::date('tanggal_perbaikan', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="tanggal_selesai_perbaikan">Tanggal Selesai Perbaikan</label>
    {{ Form::date('tanggal_selesai_perbaikan', null, ['class' => 'form-control'])}}
</div>
