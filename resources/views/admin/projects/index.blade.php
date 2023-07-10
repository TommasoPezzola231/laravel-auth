@extends("layouts.admin")

@section('content')

    <section>
        <div class="row">

            @foreach ($projects as $project)
                <div class="card col-3 m-2" style="width: 18rem;">
                    <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
@endsection