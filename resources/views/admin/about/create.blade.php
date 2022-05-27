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
                              Data <strong>About Skill</strong>
                          </div>
                          <div class="card-body card-block">
                            <form action="/skill/store" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="hf-icon" class=" form-control-label">Image</label>
                                            <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label class=" form-control-label">Skill</label>
                                            <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Level</label>
                                        <div>   
                                            <input type="checkbox" id="level1" name="level" value="Beginner">
                                            <label for="level">Beginner</label><br>
                                            <input type="checkbox" id="level2" name="level" value="Intermediate">
                                            <label for="level">Intermediate</label><br>
                                            <input type="checkbox" id="level3" name="level" value="Expert">
                                            <label for="level">Expert</label>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Tambah
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
