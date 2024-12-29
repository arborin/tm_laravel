@props(['url'])

<form action="{{ route($url) }}" method="post">
    @csrf
    <button type="submit" class="text-white">
        Logout
    </button>
</form>
