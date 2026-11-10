@extends('public.layout', ['appName' => $appName, 'title' => 'Demo', 'author' => $author])
@section('content')
<main><div class="wrap">
  <h1>Demo access</h1>
  <p class="muted">After <code>php artisan migrate --seed</code>:</p>
  <table style="margin-top:1rem">
    <thead><tr><th>Role</th><th>Email</th><th>Password</th></tr></thead>
    <tbody>
      <tr><td>Super Admin</td><td><code>admin@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>Business Owner</td><td><code>owner@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>Operations Manager</td><td><code>manager@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>Accountant</td><td><code>accounts@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>HR Officer</td><td><code>hr@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>Floor / Counter Staff</td><td><code>staff@demo.local</code></td><td><code>password</code></td></tr>
<tr><td>Customer / Portal User</td><td><code>customer@demo.local</code></td><td><code>password</code></td></tr>
    </tbody>
  </table>
  <p style="margin-top:1.4rem"><a class="btn btn-primary" style="background:#0f766e;color:#fff" href="/admin">Open Admin Panel</a></p>
</div></main>
@endsection