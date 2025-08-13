@extends('base')

@section('content')
		   <section class="form__section">
        <div class="container form__section-container">
            <h2>Ajouter un utilisateur</h2>
         
            <form action="{{ route('add_user.process') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" value="" placeholder="Nom Complet">
                <input type="email" name="email" value="" placeholder="Email">
                <input type="password" name="password" value="" placeholder="Mot de Passe">
                <input type="hidden" name="role" value="0" placeholder="Confirmer Mot de Passe">
               


                <button type="submit" name="submit" class="btn">Creer</button>

            </form>
        </div>
    </section>
@endsection