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
                        <th scope="col">Icon</th>
                        <th scope="col">Level</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($skills as $index => $skl)
                        <tr>
                            <td>{{ $index  + 1}}</td>
                            <td>{{ $skl->icon }}</td>
                            <td>{{ $skl->name}}</td>
                            <td>{{ $skl->level }}</td>
                            <td>
                                <a href="/edit_skill/{{ $skl->id }}"><i class="fas fa-edit"></i></a>
                                <a href="/delete_skill/{{ $skl->id }}"><i class="fas fa-trash" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-2">
            {{ $skills->links() }}
        </div>
        </div>
    </div>
</div>
@endsection


{{-- /edit_about/{{ $skl->id }} --}}