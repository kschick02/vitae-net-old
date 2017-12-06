@extends("layouts.app")
@section("title", "Medscanner Administration - Medication")
@section("content")
<div class="container col-md-8 col-md-offset-2">
  <? $medications = App\Medication::all(); ?>
  <div class="panel-group" id="medications" role="tablist">
    @foreach ($medications as $medication)
      <div class="panel panel-default">
        <div class="panel-heading" role="tab">
          <div class="row">
            <a class="accordion collapsed col-md-8" role="button" data-toggle="collapse" data-parent="#medications" data-target="#medication{{ $medication->medication_id }}">
              @include("partials.medication.header", ["medication" => $medication])
            </a>
            <div class="btn-toolbar col-md-4">
              <a href="/medications/{{ $medication->medication_id }}/edit" class="btn btn-primary h3">Edit</a>
              <button type="button" class="btn btn-danger h3" data-toggle="modal" data-target="#medication-delete-modal" data-id="{{ $medication->medication_id }}">Delete</button>
            </div>
          </div>
        </div>
        <div id="medication{{ $medication->medication_id }}" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            @include("partials.medication.body", ["medciation" => $medication])
          </div>
        </div>
      </div>
    @endforeach
  </div>
  @include("partials.medication.delete-modal")
</div>
@endsection
