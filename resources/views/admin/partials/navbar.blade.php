{{ 'Welcome,' . Auth::user()->name }}
<a href="/jiangdao">Pengisi</a>
<form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">LOGOUT</button>
</form>
