<h1>Create a project</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="/projects">
    {{csrf_field()}}
    <div>
    <input type="text" name="name" placeholder="Enter project title">
    </div>
    <div>
    <textarea type="text" rows="10" name="description" placeholder="enter a description"></textarea>
    </div>
    <div>
    <input type="date" name="deadline" placeholder="Enter deadline">
    </div>
    <input type="submit" value="Store project">
</form>
