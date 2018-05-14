@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
    <a class="btn" href="{{ route('perbaikanruangans.index') }}"><i class="icon-list"></i> List </a>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12"> 
        <div class="card">
            
            {!! Form::open(['route' => 'perbaikanruangans.store', 'method' => 'post'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Form Pengajuan Perbaikan
            </div>
            
            <div class="card-body">
                
                 @include('perbaikan_ruangan._form')
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Simpan</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>

            {{ Form::close() }}
            
           
            
        </div>
    </div>
</div>
@endsection