<x-layout>
    @if ($errors->any())
    <div class="py-5"></div>
        <div class="alert alert-danger pt-5 mt-5">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container border-bot-top-main  bg-custom-create-gathering">
        <div class="row justify-content-center text-center blur">
            <h1 class="py-5 underline-main">Hey Pilota! Modifica tutto BBBBABY</h1>
            <h3 class="py-5 underline-main">Ricordati di riempire tutti i campi con le informazioni richieste</h3>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('gathering.update', compact('gathering'))}}" enctype="multipart/form-data" class="mb-5 ">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputtitle" class="form-label" >Modifica il titolo dell'evento</label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle" value="{{$gathering->title}}">
                    </div>
                    <div class="mb-3">
                        <img src="{{Storage::url($gathering->img)}}" alt="">
                        <label for="exampleInputimg" class="form-label">Modifica l'immagine dell'evento</label>
                        <input type="file" name="img" class="form-control" id="exampleInputimg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputdate" class="form-label">Modifica la data per l'evento, non il lunedì che ho da fare!</label>
                        <input type="date" name="date" class="form-control" id="exampleInputdate" aria-describedby="emailHelp" value="{{$gathering->date}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputlocation" class="form-label">Modifca Dove lo faresti!</label>
                        <input type="text" name="location" class="form-control" id="exampleInputlocation" aria-describedby="emailHelp" value="{{$gathering->location}}">
                    </div>
                    <label for="exampleInputDescription" class="form-label">Raccontaci un pò cosa avresti in mente</label>
                    <div class="mb-3">
                        <textarea class="border-bot-top-main" name="description" id="exampleInputDescription" cols="37" rows="5">{{$gathering->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-red">Modifica i motori!</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

