@extends('layouts.app')
@section('title', 'container')
@section('content')


<div class="main-content">
    <div class="sectioncontent sectioncontent--p30">
        <div class="container-fluid">
            @foreach ($skill as $c)
                <form method="POST" action="/update_skill">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{  $c->id }}">
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Skill</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name"
                            value="{{ $c->name }}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea2">Level</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="level" name="level"
                            value="{{ $c->level }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @endforeach

        </div>
    </div>
</div>

@endsection