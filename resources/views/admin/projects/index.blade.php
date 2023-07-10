@extends("layouts.admin")

@section('content')

    <section>
        <div class="row">
            <a class="btn btn-primary my-2" href="{{ route("admin.projects.create") }}">Aggiungi</a>
            @foreach ($projects as $project)
                <div class="card col-3 m-2" style="width: 18rem;">
                    <img src="{{ ($project->image) ? $project->image : "https://www.signfix.com.au/wp-content/uploads/2017/09/placeholder-600x400.png" }}" class="card-img-top" alt="{{ $project->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
@endsection