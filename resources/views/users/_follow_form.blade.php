@can('follow', $user)
  <div class="text-center mt-2 mb-4">
    @if (Auth::user()->isFollowing($user->id))
      <form action="{{ route('fans.destroy', $user->id) }}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-sm btn-outline-primary" type="submit">取消关注</button>
      </form>
    @else
      <form action="{{ route('fans.store', $user->id) }}" method="POST">
        @csrf
        <button class="btn btn-sm btn-primary" type="submit">关注</button>
      </form>
    @endif
  </div>
@endcan
