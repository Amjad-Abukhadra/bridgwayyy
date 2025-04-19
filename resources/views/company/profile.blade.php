@extends('layouts.app')
@section('body')
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column: Stacked Icons aligned to the left with added padding -->
            <div class="col-md-3 d-flex flex-column align-items-start justify-content-start">
                <i class="fa-regular fa-user fa-7x mb-3"></i>
                <div class="d-flex align-items-center">
                    <i class="fa-regular fa-square-plus fa-3x me-2"></i>
                    <button class="btn btn-secondary">Add</button>
                </div>
            </div>

            <!-- Right Column: Inputs -->
            <div class="col-md-9">
                <div class="row">
                    <!-- First and second inputs beside each other -->
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><strong>Name</strong></span>
                            <input type="text" class="form-control form-control-lg" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><strong>Location</strong></span>
                            <input type="text" class="form-control form-control-lg" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <!-- Third input beneath the first one, with same size -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><strong>Type</strong></span>
                            <input type="text" class="form-control form-control-lg" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div>
        <div class="container mt-4">
            <div class="row">
                <!-- Right Column: Large Textarea -->
                <div class="col-md-9">
                    <div class="mb-3">
                        <label for="largeDescription" class="form-label"><strong>Description</strong></label>
                        <textarea class="form-control" id="largeDescription" rows="10" style="font-size: 1rem;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
