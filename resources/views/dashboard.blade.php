<form action="{{ route('logout') }}" method="POST">
    @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
</form>