<x-layout>
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container bg-white  my-5">
        <div class="row align-item-center border-bot-top-main mt-5 pt-5">
            <div class="col-12 col-md-4 py-5 my-5 d-flex align-item-center">
                <img src="{{ Storage::url($car->userimg) }}" class="card-img-top border-custom" alt="...">
            </div>
            <div class="col-12 col-md-8 my-5 py-5 text-center">
                <a class="fs-3" href="{{route('car.auth', ['auth'=>$car->user->id])}}">Nome Pilota : {{$car->user->name}}</a>
                <h2>Modello Auto : {{ $car->model }}</h2>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam ab reiciendis odit accusantium
                    itaque natus explicabo labore voluptas quasi quam, est tempore amet ad illo laudantium quas modi
                    quod voluptatem! {{ $car->description }}
                </p>
                @if(count($car->gatherings) > 0 )
                <h4>Eventi a cui ha partecipato :</h4>
                <ul class="list-unstyled py-3">
                    @foreach ($car->gatherings as $gathering)
                        <li class="fs-5 tc-main">{{$gathering->title}}</li>
                    @endforeach
                </ul>
                @endif
                <a href="{{ route('car.index') }}" class="btn btn-red">torna indietro</a>
                @if ($car->user->id == Auth::id())
                <a href="{{ route('car.edit', compact('car')) }}" class="btn btn-red m-3">modifica!</a>
                <form method="POST" action="{{ route('car.destroy' , compact('car')) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-red m-3">Cancella</button>
                </form>                    
                @endif
            </div>
        </div>
    </div>

    </div>
    </div>
</x-layout>
