@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Choose your location and special requirements </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="GET" action="/cafe">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Location</label>
                                    <select name="address" id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option  value="Amman">Amman</option>
                                        <option  value="Irbid">Irbid</option>
                                        <option  value="Zarqa">Zarqa</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" name="food" value="1" id="food"><label for="food"> Food </label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" name="cafe" value="1" id="cafe"><label for="cafe"> Cafe</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" name="projector" value="1" id="projector"><label for="projector"> Projector</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" name="smoking" value="1"  id="smoking"><label for="smoking"> Smoking </label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" name="drawing_table" value="1" id="drawing_table"><label for="drawing_table"> Drawing table </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Search Study Houses</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
