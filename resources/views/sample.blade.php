@extends('layouts.app')

@section('content')


{{--        breadcump sample --}}
        @component("component.breadcrumb",["data"=>[
       "Sample" => route("sample"),
   ]])
            @slot('menu')Sample Component @endslot
            @slot("last") All Sample @endslot
        @endcomponent
        {{--        breadcump sample --}}


<div class="section-body">
    <div class="row">

        <div class="col-12 d-flex flex-wrap justify-content-evenly align-items-center">
            <a href="{{ route('advanceForm') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Advance Form</a>
            <a href="{{ route('validation') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Form Validation</a>
            <a href="{{ route('gallery') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Gallery</a>
            <a href="{{ route('cuser') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Users</a>
        </div>
        <div class="col-12 d-flex flex-wrap mb-2 justify-content-evenly align-items-center">
            <a href="{{ route('carousel') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Carousel</a>
            <a href="{{ route('tab') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Tab</a>
            <a href="{{ route('article') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Article</a>
            <a href="{{ route('article') }}" class="btn col mb-2 mr-1 btn-outline-primary" role="button" data-bs-toggle="button">Article</a>
        </div>
        {{--        card sample --}}

        <div class="col-12 col-md-6">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Card Title 2 @endslot
                @slot('button')
                        <a href="#" class="btn btn-danger">
                            <i class="fas fa-plus fa-fw"></i>

                        </a>
                @endslot
                @slot('body')
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur, cumque debitis doloremque eius enim error facere hic maxime necessitatibus officiis, perferendis quam quisquam reiciendis similique totam ut veritatis?
                @endslot
            @endcomponent
        </div>

        <div class="col-12 col-md-6 col-lg-6">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') မင်္ဂလာပါ @endslot
                @slot('button')  @endslot
                @slot('body')
                    သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ္ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေး ဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။
                @endslot
            @endcomponent
        </div>
        {{--        card sample --}}


        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Who's Online?</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Susie Willis</div>
                                <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Bagus Dwi Cahya</div>
                                <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Wildan Ahdian</div>
                                <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Debra Stewart</div>
                                <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Label</h4>
                </div>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-dark" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" data-width="75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
        </div>

{{--        button --}}
        <div class="col-12 col-md-6 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Button</h4>
                </div>
                <div class="card-body">
                    <div class="buttons">
                        <div class="section-title mt-0">Simple</div>
                        <button type="button" class="btn btn-primary">Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-danger">Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-warning">Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-success">Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-dark">Notifications <span class="badge badge-transparent">4</span></button>
                        <div class="section-title">Icons</div>
                        <button type="button" class="btn btn-primary btn-icon icon-left"><i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-danger btn-icon icon-left"><i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-warning btn-icon icon-left"><i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span></button>
                        <button type="button" class="btn btn-success btn-icon icon-left"><i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span></button>
                    </div>
                </div>
            </div>

{{--            button--}}
            <div class="card">
                <div class="card-header">
                    <h4>Color</h4>
                </div>
                <div class="card-body">
                    <div class="colors">
                        <div class="color bg-primary text-white"><div>Primary</div></div>
                        <div class="color bg-secondary text-white"><div>Secondary</div></div>
                        <div class="color bg-success text-white"><div>Success</div></div>
                        <div class="color bg-info text-white"><div>Info</div></div>
                        <div class="color bg-warning text-white"><div>Warning</div></div>
                        <div class="color bg-danger text-white"><div>Danger</div></div>
                        <div class="color bg-light"><div>Light</div></div>
                        <div class="color bg-dark text-white"><div>Dark</div></div>
                    </div>
                </div>
            </div>



    </div>



</div>




@endsection
