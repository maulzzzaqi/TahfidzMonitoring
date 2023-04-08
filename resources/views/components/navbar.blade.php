<div class="navbar bg-green-600">
    <div class="flex-1">
        <a href="{{ url('/') }}" class="btn btn-ghost normal-case text-white text-xl">TahfidzMonitoring</a>
    </div>
    @guest
    <div class="flex-none gap-2">
        <a href="{{ route('login') }}"><button class="btn btn-outline text-white">Login</button></a>
        <a href="{{ route('register') }}"><button class="btn btn-outline text-white">Register</button></a>
    </div>
    @else
    <div class="flex-none gap-2">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    @endguest
</div>
