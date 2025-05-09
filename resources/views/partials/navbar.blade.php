<nav class="navbar">
    <div class="navbar-brand">Grade Report</div>

    <div class="navbar-user">
        @if(auth('teacher')->check())
            <span>{{auth('teacher')->user()->name}}</span>
        @elseif(auth('student')->check())
            <span>{{auth('student')->user()->name}}</span>
        @endif

    </div>
    <div>
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit"  class="logout-btn">Logout</button>
        </form>
    </div>
</nav>
