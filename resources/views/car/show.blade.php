<x-layout>
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container bg-white  my-5">
        <div class="row align-item-center border-bot-top-main mt-5 pt-5">
            <div class="col-12 col-md-4 py-5 my-5 d-flex align-item-center">
                <img src="{{Storage::url($car->userimg)}}" class="card-img-top border-custom" alt="...">
            </div>
            <div class="col-12 col-md-8 my-5 py-5 text-center">
                <h2 class="">Nome Pilota : {{ $car->owner }}</h2>
                <h2>Modello Auto : {{$car->model}}</h2>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam ab reiciendis odit accusantium itaque natus explicabo labore voluptas quasi quam, est tempore amet ad illo laudantium quas modi quod voluptatem! {{$car->description}}</p>
                <a href="{{ route('car.index') }}" class="btn btn-red">torna indietro</a>
            </div>
        </div>
    </div>

    </div>
    </div>
</x-layout>
