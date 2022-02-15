@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
        </div>
    </div>
    <table>
    <tr>
    <th>Movie Name</th>
    <th>Rating</th>
    <th>Date</th>
  </tr>
  @foreach($userratings as $userrating)
  <tr>
    <td>{{$userrating->movie->title}}</td>
    <td>{{$userrating->rating}}</td>
    <td>{{$userrating->created_at}}</td>
  </tr>
  @endforeach
</table>
</div>
@endsection
