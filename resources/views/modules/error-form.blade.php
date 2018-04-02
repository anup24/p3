@if(count($errors) > 0)
    <ul class='alert alert-danger'>
        @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
@endif