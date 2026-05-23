@extends('admin.layout')

@section('content')

<h3 class="mb-4">Edit Service</h3>

{{-- ERRORS --}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- FORM --}}
<form method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data">
    @csrf

    {{-- TITLE --}}
    <div class="mb-3">
        <label>Service Title</label>
        <input type="text" name="title" value="{{ $service->title }}" class="form-control">
    </div>

    {{-- DESCRIPTION (WYSIWYG READY) --}}
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" id="editor" class="form-control" rows="5">
            {{ $service->description }}
        </textarea>
    </div>

    {{-- CURRENT IMAGE --}}
    <div class="mb-3">
        <label>Current Image</label><br>
        <img src="{{ $service->image ? asset('storage/'.$service->image) : 'https://via.placeholder.com/100' }}"
             width="100">
    </div>

    {{-- NEW IMAGE --}}
    <div class="mb-3">
        <label>Change Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <textarea name="excerpt" class="form-control">{{ $service->excerpt }}</textarea>

    <input type="text" name="meta_title" value="{{ $service->meta_title }}" class="form-control">

    <textarea name="meta_description" class="form-control">{{ $service->meta_description }}</textarea>

    <input type="text" name="meta_keywords" value="{{ $service->meta_keywords }}" class="form-control">

    <button class="btn btn-primary">Update Service</button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>

</form>

@endsection

{{-- TINY MCE EDITOR --}}
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#editor',
        height: 300,
        menubar: false,
        plugins: ['link', 'lists', 'code'],
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link | code'
    });
</script>