<x-main>
    <x-slot name="title">Homepage</x-slot>
    <header>
        <video src="https://content.rsggroup.com/video/upload/c_limit,f_auto,q_auto,dpr_auto,w_1920/v1671009901/GoldsGym/Videos/GG_JK2023_MainVideo_1920x1080_60sek.mp4#t=0,60" autoplay muted></video>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-6 d-flex flex-column align-items-center justify-content-center text-center">
                <h3>Cerca il corso adatto a te</h3>
                <p>In GymTime potrai trovare una proposta di allenamento ultra-moderna con i migliori macchinari e uno stile old school unico al mondo. Approfitta dell’offerta: allenati subito, paga a Settembre: per te fino a 4 mesi gratis*! Offerta valida fino al 31.5</p>
                <a href="{{route('corse')}}"><button type="button" class="btn btn-outline-light">Iscriviti</button></a>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="https://www.my-personaltrainer.it/2019/09/27/borsone-da-palestra_900x760.jpeg" alt="borsone">
            </div>
        </div>
    </section>
</x-main>