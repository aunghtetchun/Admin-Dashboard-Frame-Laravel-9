
<div class="section-header">
    <h1>{{ $menu }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}"><i class="fa-solid fa-house-chimney"></i> Dashboard</a></div>
        @foreach($data as $name=>$link)
            <div class="breadcrumb-item"><a href="{{ $link }}">{{ $name }}</a></div>
        @endforeach
        <div class="breadcrumb-item">{{ $last }}</div>
    </div>
</div>
