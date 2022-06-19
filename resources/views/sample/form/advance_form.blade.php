@extends('layouts.app')

@section('sample_cs')
    <!-- CSS Libraries -->
    <link href="{{ asset('assets/modules/multi_img_up/dist/image-uploader.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection



<section class="section">
    @section('content')
        {{--        breadcump sample --}}
        @component("component.breadcrumb",["data"=>[
        "Sample" => route("sample"),
        ]])
            @slot('menu')Advance Form Example @endslot
            @slot("last") Advance Form @endslot
        @endcomponent
        {{--        breadcump sample --}}

    <div class="section-body">
        <h2 class="section-title">Advanced Forms</h2>
        <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Toggle Switches</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="control-label">Toggle switches</div>
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                    <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Option 1</span>
                                </label>
                                <label class="custom-switch">
                                    <input type="radio" name="option" value="2" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Option 2</span>
                                </label>
                                <label class="custom-switch">
                                    <input type="radio" name="option" value="3" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Option 3</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label">Toggle switch single</div>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">I agree with terms and conditions</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Image Check</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Image Check</label>
                            <div class="row gutters-sm">
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input"  />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img01.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input"  checked />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img02.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input"  />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img03.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input"  checked />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img04.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input"  />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img05.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input"  />
                                        <figure class="imagecheck-figure">
                                            <img src="assets/img/news/img06.jpg" alt="}" class="imagecheck-image">
                                        </figure>
                                    </label>
                                </div>
                            </div>
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
                        <div class="form-group justify-content-center align-items-center">
                            <label for="logo">Game Logo</label>
                            <input  required type="file" accept="image/png, .jpeg, .jpg, image/gif" class="form-control d-none  p-1 @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{old('logo')}}" placeholder="Ads Logo" onchange="readURL(this);">
                            @error('logo')
                            <small class="invalid-feedback font-weight-bold" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                            <img id="blah" onclick="$('#logo').trigger('click');" class="w-100 border" src="{{asset('images/upload.png')}}" alt="your image" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Select</h4>
                    </div>
                    <div class="card-body">
                        <div class="section-title mt-0">Default</div>
                        <div class="form-group">
                            <label>Default Select</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select2</label>
                            <select class="form-control select2" style="width: 100%">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select2 Multiple</label>
                            <select class="form-control select2" style="width: 100%" multiple="">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                                <option>Option 6</option>
                            </select>
                        </div>
                        <div class="section-title">Select Group Button</div>
                        <div class="form-group">
                            <label class="form-label">Size</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">S</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="100" class="selectgroup-input">
                                    <span class="selectgroup-button">M</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="150" class="selectgroup-input">
                                    <span class="selectgroup-button">L</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="200" class="selectgroup-input">
                                    <span class="selectgroup-button">XL</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Your skills</label>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">HTML</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                    <span class="selectgroup-button">CSS</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                    <span class="selectgroup-button">PHP</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                    <span class="selectgroup-button">JavaScript</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                    <span class="selectgroup-button">Ruby</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                    <span class="selectgroup-button">Ruby</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                    <span class="selectgroup-button">C++</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
</section>

@endsection

@section('sample_js')
<!-- JS Libraies -->
<script src="{{ asset('assets/modules/multi_img_up/dist/image-uploader.min.js') }}"></script>

<script src="{{ asset("assets/modules/select_2/dist/js/select2.min.js") }}"></script>
@endsection

