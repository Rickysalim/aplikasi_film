@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="d-flex" action="/search" method="GET">
                    <input name="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 81rem; height: 32rem; margin-bottom: 50px; margin-top: 50px;">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center; margin-top: 30vh;">MOVIE DOESN'T EXIST</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
