@extends('base')

@section('content')
		<section class="form__section">

    <div class="container form__section-container">
       
        <h2>Modifier un utilisateur</h2>

        <form action="{{ route('edit_user.process',$user->id) }}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="name" value="{{$user->name}}" placeholder="nouveau nom">
           

            <button type="submit" name="submit" class="btn">Modifier</button>

        </form>
    </div>
</section>
@endsection