<x-main>
  <x-slot name="title">Contatti</x-slot>  
    
    <div class="container py-4 margin-top">
      <form method="POST" action="{{route('send')}}"> 
        @method ("POST")
        @csrf
        <h3>Inserisci i tuoi dati</h3>
        <div class="mb-3">
          <label class="form-label" for="name">Nome</label>
          <input class="form-control" type="text" placeholder="Nome" id="name" name="name" value="{{old('name')}}"/>
        </div>
        
        <!--  -->
        <div class="mb-3">
          <label class="form-label" for="numberTelephon">Telefono</label>
          <input class="form-control" type="number" placeholder="Numero di telefono" id="numberTelephon" name="numberTelephon" value="{{old('numberTelephon')}}"/>
        </div>
        <!--  -->
        <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input class="form-control" type="email" placeholder="Email" id="email" name="email" value="{{old('email')}}"/>
        </div>
        <!-- -->
        <div class="mb-3">
          <label class="form-label" for="message">Messaggio</label>
          <textarea class="form-control" type="text" placeholder="Messaggio" id="message" name="message"style="height: 10rem;">{{old('message')}}</textarea>
        </div>
        
        <!--  -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg" >Invia</button>
        </div>
        
      </form>
    </div>
</x-main>