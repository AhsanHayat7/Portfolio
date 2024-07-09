
@if (Route::has('login'))
    @auth
        <div class="mx-2">
            <a href="{{ route('home') }}" class="btn btn-outline-primary">Dashboard</a>
        </div>
        <div class="mx-2">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link">Logout</button>
            </form>
        </div>
    @else
        <div class="mx-2">
            <a href="{{ route('log') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('reg') }}" class="btn btn-primary">Register</a>
        </div>
    @endauth
@endif

@push('scripts')
<script>
    $(document).ready(function () {
        $('#logout-form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function () {
                    window.location.href = '/'; // Redirect to home or another page after logout
                }
            });
        });
    });
</script>
@endpush
