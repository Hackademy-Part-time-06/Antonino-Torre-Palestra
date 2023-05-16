<x-main>
    <x-slot name="title">Contatti</x-slot>

    <form class="margin-top">
        <h3>Inserisci i tuoi dati</h3>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome e Cognome</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Es. Mario Rossi">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Raccontaci la tua esperienza</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
</x-main>