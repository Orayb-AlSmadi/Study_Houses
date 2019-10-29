@extends('layouts.app')

@section('content')




    @if(count($results)===0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Sorry</div>
                        <div class="card-body">
                            <p>Sorry there are no study houses matching your terms</p>


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
                        <div class="card-header">Choose your Study House</div>


                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="/Reservation">
                                @csrf
                                <div class="form-row col-md-4">
                                    <div class="form-group ">
                                        <label for="inputState">Available Study Houses </label>
                                        <select name="cafe_id" id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            @for($i=0;$i<count($results);$i++){
                                            <option value="{{$results[$i]->id}}">{{$results[$i]->cafe_name}}</option>
                                            }
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="input-group ">
                                        <label for="inputState">Chairs number</label>
                                        <div class="input-group-prepend">
                                            <input type="number" min="1" class="form-control"
                                                   name="chairs">
                                        </div>
                                        <div class="input-group ">
                                            <label for="inputState">Hours</label>
                                            <div class="input-group-prepend">
                                                <input type="number" min="1" class="form-control"
                                                    name="hours"  >
                                            </div>
                                        </div>

                                        <div class="input-group ">
                                            <label for="inputState">Date</label>
                                            <div class="input-group-prepend">
                                                <input type="date" name="date">
                                            </div>
                                        </div>

                                        <label for="appt">Choose a time for your reservation:</label>

                                        <input type="time" id="appt" name="start"
                                               min="07:00" max="19:00" required>

                                        <small>Study house hours are 7am to 7pm</small>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Reserve</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
