<x-layout>
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container bg-white py-5 my-5 border-bot-top-main ">
        <div class="row align-item-center">
            <div class="col-12 col-md-4 py-5">
                <img src="{{Storage::url($gathering->img)}}" class="card-img-top border-custom" alt="...">
            </div>
            <div class="col-12 col-md-8 py-5 text-center ">
                <h5>{{ $gathering->title }}</h5>
                <h5>{{ $gathering->date }}</h5>
                <h5>{{ $gathering->location }}</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor natus mollitia, voluptatum eius deserunt itaque doloremque labore nostrum ex ullam animi aut nihil, placeat, dicta ut assumenda eaque recusandae. Beatae. {{$gathering->description}}</p>
                <a href="{{ route('gathering.index') }}" class="btn btn-red">torna indietro</a>
            </div>
        </div>
    </div>

    </div>
    </div>
</x-layout>

