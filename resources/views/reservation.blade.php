@extends ('base')

@php
 $heures = [
     // crénaux du midi
     '12:00:00' =>'12:00',
     '12:30:00' =>'12:30',
     '13:00:00' =>'13:00',
     '13:30:00' =>'13:30',
     
     // crénaux du soir
     '20:00:00' =>'20:00',
     '20:30:00' =>'20:30',
     '21:00:00' =>'21:00',
     '21:30:00' =>'21:30',
     
    ];   
    @endphp

@section('content')


<section>
    <h2>Réservation</h2>
    <form action="{{route ('main.reservation.store')}}" method="POST">
        @csrf  
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom') }}" not-required>
            @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couverts" id="couverts" min="1" max="16" value="{{ old('couverts') }}" not-required>
            @error('couverts')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="heure">Heure</label>
           <select name="heure" id="heure" not-required>
            <option value="">12:00</option>
            <!-- créneaux du midi-->
            <option value="12:00:00">12:00</option>
            <option value="12:30:00">12:30</option>
            <option value="13:00:00">13:00</option>
            <option value="13:30:00">13:00</option>

            <!-- créneaux du soir-->
            <option value="20:00:00">20:00</option>
            <option value="20:30:00">20:30</option>
            <option value="21:00:00">21:00</option>
            <option value="21:30:00">21:30</option>
           </select>
           @error('heure')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
        </div>
        <div>
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" value="{{ old('jour') }}" not-required>
            @error('jour')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value="{{ old('telephone') }}" not-required>
            @error('telephone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="commentaires">Commentaires</label>
            <textarea name="" id="commentaires" cols="30" rows="10">{{ old('commentaires') }}</textarea>
            @error('commentaire')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Réserver</button>
        </div>
    </form>
</section>

@endsection