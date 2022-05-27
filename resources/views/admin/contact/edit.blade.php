@extends('layouts.app')
@section('title', 'container')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form edit </strong> Contact Us
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('contact.store', $contact->id)}}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="hf-email" class=" form-control-label">Nama</label>
                                            <input type="text" name="name" class="form-control" value="{{ $contact->nama }}">
                                    </div>
                                    <div class="form-group">
                                            <label for="hf-email" class=" form-control-label">Callname</label>
                                            <input type="text" name="callname" class="form-control" value="{{ $contact->callname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hf-email" class=" form-control-label">File</label>
                                        <input type="file" name="file" class="form-control" value="{{ $contact->file }}">
                                    </div>
                                    <div class="form-group">
                                            <label for="hf-password" class=" form-control-label">Pesan</label>
                                            <textarea name="pesan" class="form-control">{{ $contact->pesan }}</textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection