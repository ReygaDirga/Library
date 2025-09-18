@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <input type="text" class="form-control w-50" placeholder="Search your favourite books...">
    <div class="d-flex align-items-center gap-2">
        <span class="fw-semibold">PROFILE</span>
        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="profile">
    </div>
</div>

<div class="mb-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Recommended</h5>
        <a href="#" class="text-primary">See All</a>
    </div>
    <div class="row g-3">
        <div class="col-md-3">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Psychology of Money</h6>
                    <small class="text-muted">Morgan Housel</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">How Innovation Works</h6>
                    <small class="text-muted">Matt Ridley</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">How Innovation Works</h6>
                    <small class="text-muted">Matt Ridley</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">How Innovation Works</h6>
                    <small class="text-muted">Matt Ridley</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <h5 class="mb-3">Categories</h5>
    <div class="mb-3">
        <button class="btn btn-primary btn-sm">All</button>
        <button class="btn btn-outline-secondary btn-sm">Sci-Fi</button>
        <button class="btn btn-outline-secondary btn-sm">Fantasy</button>
        <button class="btn btn-outline-secondary btn-sm">Drama</button>
        <button class="btn btn-outline-secondary btn-sm">Business</button>
        <button class="btn btn-outline-secondary btn-sm">Education</button>
    </div>

    <div class="row g-3">
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Bees</h6>
                    <small class="text-muted">Laline Paul</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
