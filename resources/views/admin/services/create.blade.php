@extends('admin.layout')

@section('content')

<h3 class="mb-4">Add New Service</h3>

{{-- SUCCESS MESSAGE --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- VALIDATION ERRORS --}}
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
<form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
    @csrf

    {{-- TITLE --}}
    <div class="mb-3">
        <label>Service Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter service title">
    </div>

    {{-- DESCRIPTION --}}
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" id="editor" class="form-control"></textarea>
    </div>

    {{-- EXCERPT --}}
    <div class="mb-3">
        <label>Short Description (Excerpt)</label>
        <textarea name="excerpt" class="form-control" rows="2"></textarea>
    </div>

    {{-- IMAGE --}}
    <div class="mb-3">
        <label>Service Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    {{-- SEO TITLE --}}
    <div class="mb-3">
        <label>SEO Title</label>
        <input type="text" name="meta_title" class="form-control">
    </div>

    {{-- SEO DESCRIPTION --}}
    <div class="mb-3">
        <label>SEO Description</label>
        <textarea name="meta_description" class="form-control"></textarea>
    </div>

    {{-- SEO KEYWORDS --}}
    <div class="mb-3">
        <label>SEO Keywords</label>
        <input type="text" name="meta_keywords" class="form-control">
    </div>

    {{-- SUBMIT --}}
    <button type="submit" class="btn btn-success">
        Publish Service
    </button>

    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        Back
    </a>

</form>

<script src="https://cdn.tiny.cloud/1/fh7sp7yojdxv8sd5knpxphsvo5xb5uwtf1a8hrquqzwaof6l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: '#editor',
        height: 300,
        menubar: false,
        plugins: [
            'link', 'lists', 'table', 'code'
        ],
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link | code'
    });
</script>

@endsection