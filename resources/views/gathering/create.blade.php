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
            <h1 class="py-5 underline-main">Hey Pilota! Proponi il tuo Evento qui</h1>
            <h3 class="py-5 underline-main">Ricordati di riempire tutti i campi con le informazioni richieste</h3>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('gathering.store')}}" enctype="multipart/form-data" class="mb-5 ">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtitle" class="form-label">Titolo dell'evento , niente di volgare eh</label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputimg" class="form-label">Carica una copertina dell'evento</label>
                        <input type="file" name="img" class="form-control" id="exampleInputimg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputdate" class="form-label">Inserisci una data per l'evento, non il lunedì che ho da fare!</label>
                        <input type="date" name="date" class="form-control" id="exampleInputdate" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputlocation" class="form-label">Dove lo faresti!</label>
                        <input type="text" name="location" class="form-control" id="exampleInputlocation" aria-describedby="emailHelp">
                    </div>
                    <label for="exampleInputDescription" class="form-label">Raccontaci un pò cosa avresti in mente</label>
                    <div class="mb-3">
                        <textarea class="border-bot-top-main" name="description" id="exampleInputDescription" cols="37" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-red">Accendi i motori!</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
