@extends('template.layouts')

@section('title', 'Welcome Page')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-4">Custom Content Section</h2>
                <p class="lead">This is where your page-specific content goes. The rest of the layout (navbar, footer, etc.) is inherited from the master template.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-lg me-3">Primary Action</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">Secondary Action</a>
                </div>
            </div>
        </div>
    </div>
@endsection