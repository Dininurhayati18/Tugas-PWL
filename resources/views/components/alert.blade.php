<div class="alert alert-{{ $theme }}" role="alert">
  {{ $slot }}
  @if($closeable == true)
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  @endif
</div>