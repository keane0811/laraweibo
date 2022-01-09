<a href="#">
  <strong class="stat" id="following">{{ count($user->followings) }}</strong>
  关注
</a>
<a href="#">
  <strong class="stat" id="fans">{{ count($user->fans) }}</strong>
  粉丝
</a>
<a href="#">
  <strong class="stat" id="statuses">{{ $user->statuses()->count() }}</strong>
  微博
</a>
