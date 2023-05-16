<x-main>
    <x-slot name="title">Corsi</x-slot>
    <div class="container mt-5">
        <div class="row">
            @foreach ($corsi as $corso)
            <div class="card col-4" style="background-color: rgba(0, 255, 153, 0.784)">
                <img class="card-img-top img-fluid" src="https://tse2.mm.bing.net/th?id=OIP.A46hzBdAE6UcYt9jV64J7AHaE6&pid=Api&P=0&h=180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$corso['nome']}}</h5>
                    <p class="card-text">{{$corso['orario']}}</p>
                    <a href="{{route('detail',['name'=>$corso['nome']])}}"><button type="buttom" class="btn btn-outline-light">Info</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-main>