<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $author['name'] ?? 'Imran Ahmed' }}">
    <title>{{ $title ?? $appName }} · {{ $appName }}</title>
    <style>
        :root{--bg:#042f2e;--ink:#ecfeff;--muted:#99f6e4;--accent:#f0fdfa;--text:#0f172a;--soft:#f8fafc;--card:#fff;--line:#e2e8f0}
        *{box-sizing:border-box} body{margin:0;font-family:Georgia,serif;color:var(--text);background:var(--soft)}
        a{color:inherit;text-decoration:none} .wrap{max-width:1120px;margin:0 auto;padding:0 1.25rem}
        header{background:linear-gradient(135deg,#042f2e,#0f766e 55%,#155e75);color:var(--ink);padding:1rem 0;position:sticky;top:0;z-index:20}
        nav{display:flex;gap:1rem;flex-wrap:wrap;align-items:center;justify-content:space-between}
        nav .brand{font-size:1.15rem;font-weight:700}
        nav .links{display:flex;gap:.9rem;flex-wrap:wrap;font-family:Segoe UI,Arial,sans-serif;font-size:.92rem}
        .hero{padding:4.2rem 0 3rem;background:linear-gradient(135deg,#042f2e,#0f766e 55%,#155e75);color:var(--ink)}
        .hero h1{font-size:clamp(2.1rem,5vw,3.5rem);line-height:1.08;margin:0 0 1rem}
        .hero p{font-family:Segoe UI,Arial,sans-serif;font-size:1.12rem;max-width:46rem;color:var(--muted)}
        .cta{display:flex;gap:.8rem;flex-wrap:wrap;margin-top:1.6rem}
        .btn{font-family:Segoe UI,Arial,sans-serif;padding:.85rem 1.15rem;border-radius:12px;font-weight:700;display:inline-block}
        .btn-primary{background:var(--accent);color:#042f2e}
        .btn-ghost{border:1px solid var(--muted);color:var(--ink)}
        main{padding:2.4rem 0 4rem}
        .grid{display:grid;gap:1rem;grid-template-columns:repeat(auto-fit,minmax(240px,1fr))}
        .card{background:var(--card);border:1px solid var(--line);border-radius:16px;padding:1.15rem}
        .card h3{margin:.15rem 0 .45rem;font-size:1.12rem}
        .card p,.muted{font-family:Segoe UI,Arial,sans-serif;color:#475569;line-height:1.55}
        footer{border-top:1px solid var(--line);padding:2rem 0;font-family:Segoe UI,Arial,sans-serif;color:#64748b}
        table{width:100%;border-collapse:collapse;font-family:Segoe UI,Arial,sans-serif;background:#fff;border-radius:12px;overflow:hidden}
        th,td{padding:.75rem 1rem;border-bottom:1px solid var(--line);text-align:left}
        th{background:#ecfeff}
        .shot{width:100%;border-radius:16px;border:1px solid var(--line);background:#fff}
        .pill{display:inline-block;font-family:Segoe UI,Arial,sans-serif;font-size:.75rem;padding:.2rem .55rem;border-radius:999px;background:#ccfbf1;color:#115e59}
    </style>
</head>
<body>
<header>
  <div class="wrap">
    <nav>
      <a class="brand" href="/">{{ $appName }}</a>
      <div class="links">
        <a href="/features">Features</a>
        <a href="/modules">Modules</a>
        <a href="/screens">Screens</a>
        <a href="/pricing">Pricing</a>
        <a href="/demo">Demo</a>
        <a href="/docs">Docs</a>
        <a href="/contact">Contact</a>
        <a href="/admin">Admin</a>
      </div>
    </nav>
  </div>
</header>
@yield('content')
<footer>
  <div class="wrap">
    <strong>{{ $appName }}</strong> · Built by
    <a href="{{ $author['website'] ?? 'https://imrandev.bd' }}">{{ $author['name'] ?? 'Imran Ahmed' }}</a>
    · <a href="mailto:{{ $author['email'] ?? 'me@imrandev.bd' }}">{{ $author['email'] ?? 'me@imrandev.bd' }}</a>
    · GitHub Actions disabled
  </div>
</footer>
</body>
</html>
