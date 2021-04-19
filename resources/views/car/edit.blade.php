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
    <div class=" py-5"></div>
    <div class="container border-bot-top-main  bg-custom-create">
        <div class="row justify-content-center text-center blur">
            <h1 class="py-5 underline-main">Hey Pilota Modifica Pure tutto quello che vuoi</h1>
            <h3 class="py-5 underline-main">Non dimenticare la foto!</h3>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('car.update' , compact('car')) }}" enctype="multipart/form-data" class="mb-5 ">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputmodel" class="form-label"></label>
                        <input type="text" name="model" class="form-control" id="exampleInputmodel" value="{{$car->model}}">
                    </div>
                    <div class="mb-3">
                        <img src="{{Storage::url($car->img)}}" alt="">
                        <label for="exampleInputimg" class="form-label"></label>
                        <input type="file" name="img" class="form-control" id="exampleInputimg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputowner" class="form-label"></label>
                        <input type="text" name="owner" class="form-control" value="{{$car->owner}}" id="exampleInputowner"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <img src="{{Storage::url($car->userimg)}}" alt="">
                        <label for="exampleInputuser" class="form-label" ></label>
                        <input type="file" name="userimg" class="form-control" id="exampleInputuser"
                            aria-describedby="emailHelp">
                    </div>
                    <label for="exampleInputDescription" class="form-label"></label>
                    <div class="mb-3">
                        <textarea class="border-bot-top-main" name="description" id="exampleInputDescription" cols="37"
                            rows="5">{{$car->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-red">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
