
@if (isset($javascript_session_storage))
  @if (is_array($javascript_session_storage))
    @foreach ($javascript_session_storage as $key => $value)
      <input type="hidden" class="javascript-input" name="{{ $key }}" value="{{ json_encode($value) }}">
    @endforeach
  @endif
@endif

@if ( ! Auth::check())
  <script>
    sessionStorage.clear();
  </script>
@endif

<script>
  var inputs = document.querySelectorAll('input[type="hidden"][class="javascript-input"]');
  inputs.forEach(function(input) {
    window.sessionStorage.setItem(input.name, input.value);
    input.remove();
  });
</script>
