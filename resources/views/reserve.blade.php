@extends('layouts.app')

@section('content')



    @if ($res === "success")

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Thank you</div>
                        <div class="card-body">
                            <p>Your reservation is now confirmed</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Sorry</div>
                        <div class="card-body">
                            <p>There is no available seats</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>

@endif
@endsection
