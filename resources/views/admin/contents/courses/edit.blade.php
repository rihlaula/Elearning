@extends('admin.main')
@section('content')
    <div class="pagetitle">
        <h1>Edit Courses</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Edit Courses</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card-body">
            <form action="/admin/courses/update/{{ $courses->id }}" method="post" class="mt-3">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ $courses->name ?? '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-4 col-form-label">Category</label>
                    <div class="col-8">
                        <input id="category" name="category" type="text" class="form-control"
                            value="{{ $courses->category ?? '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-4 col-form-label">Description</label>
                    <div class="col-8">
                        <input id="desc" name="desc" type="text" class="form-control"
                            value="{{ $courses->desc ?? '' }}">
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>
@endsection
