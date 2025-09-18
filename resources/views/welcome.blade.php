@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white shadow-sm rounded">
    <div class="input-group w-50">
        <span class="input-group-text bg-white border-0">
            <i class="bi bi-search text-muted"></i>
        </span>
        <input type="text" class="form-control border-0" placeholder="Search your favourite books...">
    </div>
    
    <div class="d-flex align-items-center gap-3">
        <span class="fw-semibold">Reyga</span>
        <img src="{{ asset('image/profile.jpg') }}" 
             class="rounded-circle" 
             alt="profile" 
             style="width:40px; height:40px; object-fit:cover;">
    </div>
</div>


<div class="mb-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Recommended</h5>
        <a href="#" class="text-primary">See All</a>
    </div>
    <div class="row g-3">
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/money.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Psychology of Money</h6>
                    <small class="text-muted">Morgan Housel</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/Innovation.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">How Innovation Works</h6>
                    <small class="text-muted">Matt Ridley</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/Company.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Company of One</h6>
                    <small class="text-muted">Paul Jarvis</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/stupore.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Stupore E Tremori</h6>
                    <small class="text-muted">Amelie Nothomb</small>
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
                <img src="{{ asset('image/bees.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Bees</h6>
                    <small class="text-muted">Laline Paul</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/help.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Real Help</h6>
                    <small class="text-muted">Ayodeji Awosika</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/fact.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Fact of a Body</h6>
                    <small class="text-muted"></small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/room.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">The Room</h6>
                    <small class="text-muted">Jonas Karisson</small>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card book-card shadow-sm">
                <img src="{{ asset('image/through.png') }}" class="card-img-top" alt="book">
                <div class="card-body">
                    <h6 class="card-title">Through the Breaking</h6>
                    <small class="text-muted">Cate Ermand</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
