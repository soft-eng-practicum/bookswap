<!-- NOTE - like app.blade.php, this is a blade temnplate file.
It is used for errors, listing them, DO NOT format like a page  -->
@if(count($errors))
<div class="form=group">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
