@extends('firebase.app')

@section('content')
<div class="container">
    <form action="{{ url('addpost') }} " method="POST">
        @csrf 
        <button class="btn btn-primary" type="submit"> Send Post Data </button>
</form>
</div>
@endsection

