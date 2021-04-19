<x-layout>
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
    <div class="container border-bot-top-main  bg-custom-create-mail">
        <div class="row justify-content-center text-center blur">
            <h1 class="py-5 underline-main">Contattaci per qualsiasi evenienza</h1>
            <h3 class="p-2">tramite numero verde al <span class="underline-main">+39 3450329402</span></h3>
            <h5>(call center aperto dalle 17:00 alle 17:02 di giovedi )</h5>
            <h3 class="p-5"> o tramite e-mail compilando il modulo sottostante</h3>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <label for="textarea" class="form-label">Dicci di che cosa hai bisogno </label>
                    <div class="mb-3">
                        <textarea name="description" id="textarea" cols="36" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-red mb-5">A tutto Gas</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
