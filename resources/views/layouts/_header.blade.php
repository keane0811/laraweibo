<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a href="{{ route('home') }}" class="navbar-brand">LaraWeibo</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
        <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">用户列表</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">个人中心</a>
            <a href="{{ route('users.edit', Auth::user()) }}" class="dropdown-item">编辑资料</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('delete')
                <div class="d-grid">
                  <button class="btn btn-danger" type="submit" name="button">退出</button>
                </div>
              </form>
            </a>
          </div>
        </li>
      @else
        <li class="nav-item"><a href="{{ route('help') }}" class="nav-link">帮助</a></li>
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登陆</a></li>
      @endif
    </ul>
  </div>
</nav>
