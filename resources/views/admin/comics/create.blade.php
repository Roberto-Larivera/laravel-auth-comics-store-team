@extends('layouts.admin')

@section('content')
<h1>
    Nuovo fumetto
</h1>

<form action="{{ route('admin.comics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Name *</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required maxlength="98" placeholder="Write the name...">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Price *</label>
        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}" required maxlength="98" placeholder="Write the price...">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Quantity *</label>
        <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}"required placeholder="Write the quantity...">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}" placeholder="Write the description...">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Url image</label>
        <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}" placeholder="Write the url...">
    </div>
    
    <div class="mb-3">
        <p>
            The fields with * are <strong>compulsory</strong>.
        </p>
    </div>
    <div>
        <button type="submit" class="btn btn-success">
            Save
        </button>
    </div>
</form>
@endsection