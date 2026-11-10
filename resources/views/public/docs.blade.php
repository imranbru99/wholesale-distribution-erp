@extends('public.layout', ['appName' => $appName, 'title' => 'Docs', 'author' => $author])
@section('content')
<main><div class="wrap">
  <h1>Operator handbook</h1>
  <div class="card" style="margin-top:1rem">
    <ol class="muted">
      <li>Configure <code>.env</code> and run Composer.</li>
      <li>Migrate & seed demo users/records.</li>
      <li>Toggle modules in Admin → Module Control.</li>
      <li>Connect Attendance Hub / AI Hub as needed.</li>
      <li>Train each role on scoped screens.</li>
    </ol>
  </div>
</div></main>
@endsection