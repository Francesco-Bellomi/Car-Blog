<x-layout>
    <div class="mt-5 pt-5">
    </div>
    <div class="container py-5 mt-5">
        <h1 class="tc-white text-center underline-main pt-5">Scopri Le Auto dei nostri Piloti!</h1>
        <div class="row  text-center pt-5 mt-5">
            @foreach ($cars as $car)  
            <div class="col-12 col-md-4 py-4">
                <div class="card border-custom">
                    <h5 class="card-title pt-3">{{$car->model}}</h5>
                    <div class="card-body">
                        <img src="{{Storage::url($car->img)}}" class="card-img-top " alt="...">
                        <a href="{{route('car.show', compact('car'))}}" class="btn btn-red m-3">Vedi proprietario!</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
