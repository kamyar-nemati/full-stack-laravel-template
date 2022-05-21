
@if (isset($javascript_local_storage))
  @if (is_array($javascript_local_storage))
    @foreach ($javascript_local_storage as $key => $value)
      <input type="hidden" class="javascript-input" name="{{ $key }}" value="{{ json_encode($value) }}">
    @endforeach
  @endif
@endif

<script>
  var inputs = document.querySelectorAll('input[type="hidden"][class="javascript-input"]');
  inputs.forEach(function(input) {
    window.localStorage.setItem(input.name, input.value);
    input.remove();
  });
</script>
