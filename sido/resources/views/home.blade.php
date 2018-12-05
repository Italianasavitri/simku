@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOME Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('logout')
    <a class="dropdown-item" href="{{ route('user.logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endsection