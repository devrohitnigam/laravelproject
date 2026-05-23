<div class="sidebar">
    <h4>Admin Panel</h4>

    {{-- DASHBOARD (ALL ROLES) --}}
    <a href="{{ route('dashboard') }}" 
       class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    {{-- USERS (ADMIN + EDITOR) --}}
    @if(in_array(auth()->user()->role, ['admin','editor']))
        <a href="{{ route('admin.users') }}" 
           class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">
            Users
        </a>
    @endif

    {{-- BLOGS (ADMIN + EDITOR + SUBSCRIBER VIEW ONLY) --}}
    @if(in_array(auth()->user()->role, ['admin','editor','subscriber']))
        <a href="{{ route('admin.blogs.index') ?? '#' }}">
            Blogs
        </a>
    @endif

    {{-- SERVICES (ALL CAN VIEW) --}}
    <a href="{{ route('admin.services.index') ?? '#' }}">
        Services
    </a>

    <form method="POST" action="{{ route('logout') }}" class="p-3">
        @csrf
        <button class="btn btn-danger w-100 btn-sm">Logout</button>
    </form>
</div>