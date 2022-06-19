@extends('layouts.app')

@section('sample_cs')
    <!-- CSS Libraries -->

@endsection

@section('content')
    {{--        breadcump sample --}}


    <section class="section">

        @component("component.breadcrumb",["data"=>[
    "Sample" => route("sample"),
    ]])
            @slot('menu')Form Validation @endslot
            @slot("last") Validation @endslot
        @endcomponent
        {{--        breadcump sample --}}

        <div class="section-body">
            <h2 class="section-title">Form Validation</h2>
            <p class="section-lead">Form validation using default from Bootstrap 4</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form>
                            <div class="card-header">
                                <h4>Default Validation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label>Message</label>
                                    <textarea class="form-control" required=""></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <form class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>JavaScript Validation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" required="">
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required="">
                                    <div class="invalid-feedback">
                                        Oh no! Email is invalid.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="email" class="form-control">
                                    <div class="valid-feedback">
                                        Good job!
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Message</label>
                                    <textarea class="form-control" required=""></textarea>
                                    <div class="invalid-feedback">
                                        What do you wanna say?
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form>
                            <div class="card-header">
                                <h4>Server-side Validation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control is-valid" value="Debra Stewart" required="">
                                    <div class="valid-feedback">Good job!</div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control is-invalid" required="" value="rizal@fakhri">
                                    <div class="invalid-feedback">Oh no! Email is invalid.</div>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label>Message</label>
                                    <textarea class="form-control is-invalid" required="">Hello, i'm handsome!</textarea>
                                    <div class="invalid-feedback">Oh no! You entered an inappropriate word.</div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <form class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>JavaScript Validation (Horizontal Form)</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Your Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" required="">
                                        <div class="invalid-feedback">What's your name?</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" required="">
                                        <div class="invalid-feedback">Oh no! Email is invalid.</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control">
                                        <div class="valid-feedback">Good job!</div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <label class="col-sm-3 col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" required=""></textarea>
                                        <div class="invalid-feedback">What do you wanna say?</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('samplejs')
    <!-- JS Libraies -->

@endsection

<div class="card">
    <div class="card-header">
        <h4>Date &amp; Time Picker</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Datetime Local</label>
            <input type="datetime-local" class="form-control">
        </div>
        <div class="form-group">
            <label>Month</label>
            <input type="month" class="form-control">
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="time" class="form-control">
        </div>
        <div class="form-group mb-0">
            <label>Week</label>
            <input type="week" class="form-control">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Multiple Upload</h4>
    </div>
    <div class="card-body">
        <div class="form-group input-field">
            <label class="active" for="images">Game Photos</label>
            <div class="input-images-1" style="padding-top: .5rem;"></div>
            {{--                                        <input required type="file" accept="image/png, .jpeg, .jpg, image/gif" multiple class="input-images-1 p-1 form-control @error('images') is-invalid @enderror" name="images[]" id="images" value="{{old('images')}}" style="padding-top: .5rem;">--}}
            @error('images')
            <small class="invalid-feedback font-weight-bold" role="alert">
                {{ $message }}
            </small>
            @enderror
        </div>
    </div>
</div>



