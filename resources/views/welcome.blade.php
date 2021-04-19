<x-layout>

    @if (session('message'))
    <div class="mt-5 pt-5"></div>
    <div class="mt-5 pt-5"></div>
        <div class='alert alert-danger'>
            {{ session('message') }}
        </div>
    @endif

    <header class="border-bot-top-main pt-5 mt-5">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/video/rally.mp4" type="video/mp4">
        </video>
        @guest
            <div class="container h-100 ">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 underline-main">RallyMANIA</h1>
                    </div>
                </div>
            </div>
        @else
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h2 class="display-3 underline-main py-2">Benvenuto {{ Auth::user()->name }} in</h2>
                        <h1 class="display-3 underline-main">RallyMANIA</h1>
                    </div>
                </div>
            </div>
        @endguest
    </header>
    <div class="container bg-white px-5">
        <div class="row ">
            <div class="col-12 col-md-6 text-center mt-5 pt-5">
                <p class="fs-2 fw-bold">Benvenuto Pilota nella più grande famiglia di appassionati di rally</p>
                <p class="fs-2 fw-bold">Iscriviti subito per scoprire tutti i nostri eventi ed accedere ai vantaggi da
                    Socio</p>
            </div>
            <div class="col-12 col-md-6 mt-5 pt-5">
                <img src="/img/meccanico.jpg" class="img-fluid border-custom" alt="">
                <p class="text-center pt-3">Il nostro team al lavoro</p>
            </div>
            <div class="col-12 text-center py-5 underline-main">
                <h2>Chi Siamo</h2>
            </div>
            <div class="col-12 col-md-6 pb-3">
                <img src="/img/rally-1.jpg" class="img-fluid border-custom my-5" alt="">
            </div>
            <div class="col-12 col-md-6 my-5">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, laboriosam consequuntur. Quia
                    obcaecati, soluta aliquid sunt illo quas dolores excepturi quibusdam nulla mollitia ratione quidem
                    ab consequatur sit sed delectus?</p>
                <ul>
                    <li>lorem bernasco</li>
                    <li>lorem bernasco</li>
                    <li>lorem bernasco</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sequi consectetur recusandae
                    consequatur maiores vitae, impedit perferendis delectus id quos repellat molestias, minus neque
                    magnam voluptatem ab eveniet obcaecati dolor.</p>
            </div>
            <div class="col-12 text-center my-5 underline-main">
                <h2>Cosa Facciamo</h2>
            </div>
            <div class="col-12 col-md-6 my-5">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, laboriosam consequuntur. Quia
                    obcaecati, soluta aliquid sunt illo quas dolores excepturi quibusdam nulla mollitia ratione quidem
                    ab consequatur sit sed delectus?</p>
                <ul>
                    <li>lorem bernasco</li>
                    <li>lorem bernasco</li>
                    <li>lorem bernasco</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, amet. Est porro, totam iusto corrupti
                    repellendus minus atque delectus cumque. Hic cupiditate dolores nihil voluptate maiores obcaecati
                    facilis, eius sunt?</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="/img/rally-2.jpg" class="img-fluid my-5  border-custom" alt="">
            </div>
        </div>
    </div>
    <div class="container py-5 px-5 bg-white">
        <div class="row ">
            <h3 class="text-center pb-5 underline-main">Entra nella nostra grande Famiglia!</h3>
            <div class="col-12 col-md-6">
                <img src="/img/famiglia.jpg" class="img-fluid border-custom bg-black " alt="">
            </div>
            <div class="col-12 col-md-6 py-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate hic explicabo repellendus error!
                    Cumque saepe nostrum expedita aspernatur, dignissimos quisquam mollitia repellendus quo distinctio
                    suscipit pariatur, et voluptate ea vitae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quae explicabo nemo dolorem
                    deleniti? Nulla eligendi maxime ab, delectus commodi necessitatibus. Temporibus recusandae, aliquam
                    incidunt perspiciatis quas voluptatum qui voluptatem.

                </p>
            </div>
        </div>
    </div>





</x-layout>
