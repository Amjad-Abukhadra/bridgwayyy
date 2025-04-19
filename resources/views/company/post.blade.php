@extends('layouts.app')
@section('body')
<div class="container">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title">
    </div>
    <div class="photo-upload">
        <div class="plus-icon">+</div>
        <p>Add photo</p>
    </div>
    <div class="form-group">
        <label for="contact-info">Contact info</label>
        <input type="text" class="form-control" id="contact-info" placeholder="Enter contact information">
    </div>
    <div></div> <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="5" placeholder="Enter description"></textarea>
    </div>
    <div></div> <div class="publish-button-container">
        <button type="button" class="btn btn-publish">Publish</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection