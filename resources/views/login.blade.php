
<!-- identifiants boris1 00000000 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Responsive Blog Site</title>
</head>

<body>
   <section class="form__section">
        <div class="container form__section-container">
            <h2>Connectez vous </h2>
            



        
            <form action="{{ route('login.process') }}" method="POST" >
                @csrf
                @method('POST')
                <input type="text" name="email" value="" placeholder="Email">

                <input type="password" name="password" value="" placeholder="Mot de passe">
                <button type="submit" name="submit" class="btn">Se Connecter</button>
             
            </form>
        </div>
    </section>
</body>

</html>