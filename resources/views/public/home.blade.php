@extends('public.layout', ['appName' => $appName, 'title' => 'Home', 'author' => $author])
@section('content')
<section class="hero"><div class="wrap">
  <div class="pill">{{ $industry }} · Bangladesh + Global</div>
  <h1 style="margin-top:1rem">{{ $appName }}</h1>
  <p>{{ $tagline }}</p>
  <div class="cta">
    <a class="btn btn-primary" href="/demo">Start Free Demo</a>
    <a class="btn btn-ghost" href="/screens">View Screens</a>
  </div>
</div></section>
<main><div class="wrap">
  <img class="shot" src="/images/dashboard.svg" alt="{{ $appName }} dashboard"/>
  <h2 style="margin-top:2rem">Toggleable engines</h2>
  <div class="grid" style="margin-top:1rem">
    @foreach($modules as $key => $module)
      <div class="card">
        <div class="pill">{{ ($module['enabled'] ?? false) ? 'ENABLED' : 'OPTIONAL' }}</div>
        <h3>{{ $module['name'] }}</h3>
        <p>{{ $module['description'] }}</p>
      </div>
    @endforeach
  </div>
</div></main>
@endsection