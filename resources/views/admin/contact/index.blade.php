@extends('layouts.app')
@section('title', 'container')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Callname</th>
                        <th scope="col">Image</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($contacts as $index => $contact)
                        <tr>
                            <td>{{ $index  + 1}}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->callname }}</td>
                            <td>{{ $contact->file }}</td>
                            <td>{{ $contact->pesan }}</td>
                            <td>
                                <a href="{{ route('contact.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('contact.destroy', $contact->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection


