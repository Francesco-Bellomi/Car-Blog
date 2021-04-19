<x-layout>
    <div class="container my-5 bg-white bg-custom-login">
        <div class="row justify-content-center py-5  border-bot-top-main blur ">
            <div class="col-12 text-center py-5"><h2 class="fs-1">Sei un nuovo Pilota?</h2></div>
            <div class="col-12 text-center py-5"><h1>Registrati Per Scoprire tutti i Vantaggi riservati ai Soci</h1></div>
            <div class="col-12 col-md-6 my-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUser" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUser">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci la tua Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    <button type="submit" class="btn btn-red">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
