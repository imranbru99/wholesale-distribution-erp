@extends('public.layout', ['appName' => $appName, 'title' => 'Pricing', 'author' => $author])
@section('content')
<main><div class="wrap">
  <h1>Opportunity packaging</h1>
  <div class="grid" style="margin-top:1.4rem">
    <div class="card"><h3>Starter Ops</h3><p>Core + Inventory + Sales/POS + Documents for single-branch ROI validation.</p></div>
    <div class="card"><h3>Growth ERP</h3><p>Accounting, HR/Payroll, Attendance, CRM, Reports for scaling SMEs.</p></div>
    <div class="card"><h3>Enterprise OS</h3><p>Production, Quality, Logistics, AI Hub, API, multi-branch governance.</p></div>
  </div>
</div></main>
@endsection