<div class="d-flex mt-4 mb-4">
  <div class="flex-shrink-0">
    <a href="{{ route('users.show', $user) }}">
      <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
  </div>
  <div class="flex-grow-1 ms-3">
    <h5 class="mt-0 mb-1">{{ $user->name }} <span class="fs-6 fw-light"> /
        {{ $status->created_at->diffForHumans() }}</span></h5>
    {{ $status->content }}
  </div>
</div>
