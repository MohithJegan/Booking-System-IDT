<h1>Welcome, {{ session('admin')->name ?? 'Admin' }}</h1>
<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
