<x-layout>
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container py-5 mt-5">
        <h1 class="tc-white underline-main text-center mb-5 pb-5">Scopri i nostri Eventi che si terrano prossimamente!</h1>
        <div class="row  text-center">
            @foreach ($gatherings as $gathering)  
            <div class="col-12 col-md-4 py-4">
                <div class="card border-custom">
                    <h5 class="card-title py-3">{{$gathering->title}}</h5>
                    <h5>Data evento : {{$gathering->date}}</h5>
                    <div class="card-body">
                        <img src="{{Storage::url($gathering->img)}}" class="card-img-top " alt="...">
                        <a href="{{route('gathering.show', compact('gathering'))}}" class="btn btn-red m-3">Scopri di più!</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
