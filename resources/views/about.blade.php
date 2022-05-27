@extends('layouts.main')
@section('container')
<div class="contaer">
  <div class="ja">
      <div class="col-md-10">
          <div class="card p-1 py-1">
              <div class="text-center"> <img src="image/pppp.png" width="250px" class="rounded-circle"> </div>
              <div class="text-center mt-3"> 
                  <h4 class="mt-3 mb-0">Muamar Zidan Tri Antoro</h4> <span class="mt-2">Codeofomiru11@gmail.com</span>
                  <div class="px-2 mt-4">
                      <p class="fonts">Hallo everyone, My name is Muamar Zidan Tri antoro, i am currently studying at telkom purwokerto vocational high school</p>
                      <p class="fonts">I can work well with a team or solo project</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="card-roww">
  <div class="borrder">
    <div class="nameskil">
      <h5 class="text-center">About | Skill</h5>
      <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
        <main class="mdl-layout__content container">
          @foreach ($skills as $skl)
          <div class="mdl-grid2 mt-1">
            <div class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-shadow--2dp">
              <figure class="mdl-card__media">
                <img src="{{ asset('image_skill/' . $skl->icon) }}" alt="" width="140px" class="border-radius-10 img-fluid card-img-top"/>
              </figure>
              <div class="mdl-card__title">
                <h4 class="mt-2 fw-bold" >{{$skl->name}}</h4>
                <h6 class="mt-2" >{{$skl->level}}</h6>
              </div>
              <div class="mdl-card__actions mdl-card--border">
              </div>
            </div>
          </div>
          @endforeach
        </main>
      </div>
    </div>
  </div>
</div>


@endsection







{{-- 
<div class="sikils">
  <div class="skil-grid">
    <div class="skill-card">
      <header class="skill-card__header"><img class="skill-card__icon" src="https://upload.wikimedia.org/wikipedia/commons/3/38/HTML5_Badge.svg" alt="HTML5 Logo"/></header>
      <section class="skill-card__body">
        <h2 class="skill-card__title">html</h2><span class="skill-card__duration">6 ans d'expérience</span>
        <ul class="skill-card__knowledge">
          <li>HTML5</li>
          <li>Sémantique</li>
          <li>SVG</li>
          <li>Canvas</li>
        </ul>
      </section>
    </div>
  </div>
</div> --}}


{{-- 
<div class="about">
  <div class="ft-border">
    <div class="pabout">
      <p>About | Profile</p>
  </div>
    <div class="cardname">
      <img src="image/pppp.png" alt="zidan">
      <div class="cardinfo">
        <div class="col-sm-6">
          <div class="about-info">
            <p class="span1">Name  : Muamar Zidan Tri Antoro</p> 
            <p class="span1">Email : Codeofomiru11@gmail.com</p>
            <p class="span1"></p>
          </div>
        </div>
    </div>
      </div>
  </div>
</div> --}}
