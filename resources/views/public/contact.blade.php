@extends('public.layout', ['appName' => $appName, 'title' => 'Contact', 'author' => $author])
@section('content')
<main><div class="wrap">
  <h1>Let’s deploy {{ $appName }}</h1>
  <div class="card" style="margin-top:1rem" class="muted">
    <p><strong>{{ $author['name'] ?? 'Imran Ahmed' }}</strong> — Senior Full-Stack & AI Engineer</p>
    <p>Email: <a href="mailto:{{ $author['email'] ?? 'me@imrandev.bd' }}">{{ $author['email'] ?? 'me@imrandev.bd' }}</a></p>
    <p>WhatsApp: <a href="https://wa.me/8801576918420">+880 1576-918420</a></p>
    <p>Website: <a href="{{ $author['website'] ?? 'https://imrandev.bd' }}">{{ $author['website'] ?? 'https://imrandev.bd' }}</a></p>
  </div>
</div></main>
@endsection