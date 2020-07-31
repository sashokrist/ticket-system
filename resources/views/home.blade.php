@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <p>You are logged in!</p>

                        @if(Auth::user()->is_admin)

                            <p>
                                See all <a href="{{ url('admin/tickets') }}" class="btn btn-primary">tickets</a>
                            </p>
                        @else

                            <p>
                                See all your <a href="{{ url('my_tickets') }}" class="btn btn-primary">tickets</a> or <a href="{{ url('new-ticket') }} " class="btn btn-primary">open new ticket</a>
                            </p>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
