@extends('layouts/app')
@section('title', 'Medscanner')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default" id="panel">
    <div class="panel-heading">Students:</div>
    <div class="panel-body">
      Instructions for using the medscanner system:
      <ol>
        <li>Scan a patient's bracelet</li>
        <li>Scan medication that needs to be administered</li>
        <li>Complete the summary form</li>
        <li>Sign and accept the summary form</li>
      </ol>
      <a class="btn btn-primary" href="{{ url('/scan') }}">Begin</a>
    </div>
  </div>
</div>
@endsection
