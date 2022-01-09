<div class="d-flex mt-4 mb-4">
  <div class="flex-shrink-0">
    <a href="{{ route('users.show', $user) }}">
      <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
  </div>
  <div class="flex-grow-1 ms-3">
    <h5 class="mt-0 mb-1">
      {{ $user->name }}
      <span class="fs-6 fw-light"> / {{ $status->created_at->diffForHumans() }}</span>
    </h5>
    {{ $status->content }}
  </div>

  @can('destroy', $status)
    <div class="flex-shrink-0">
      <form action="{{ route('statuses.destroy', $status) }}" method="POST" onsubmit="return confirm('您确定要删除本条微博吗？');">
        @csrf
        @method('delete')
        <button class="btn btn-sm btn-danger" type="submit">删除</button>
      </form>
    </div>
  @endcan
</div>
