
@if (session('primary_message'))
<div class="alert alert-dismissible alert-primary fade show text-center" role="alert">
  {{ session('primary_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('secondary_message'))
<div class="alert alert-dismissible alert-secondary fade show text-center" role="alert">
  {{ session('secondary_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('success_message'))
<div class="alert alert-dismissible alert-success fade show text-center" role="alert">
  {{ session('success_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('danger_message'))
<div class="alert alert-dismissible alert-danger fade show text-center" role="alert">
  {{ session('danger_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('warning_message'))
<div class="alert alert-dismissible alert-warning fade show text-center" role="alert">
  {{ session('warning_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('info_message'))
<div class="alert alert-dismissible alert-info fade show text-center" role="alert">
  {{ session('info_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('light_message'))
<div class="alert alert-dismissible alert-light fade show text-center" role="alert">
  {{ session('light_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('dark_message'))
<div class="alert alert-dismissible alert-dark fade show text-center" role="alert">
  {{ session('dark_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
