<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Responsive Blog Site</title>
</head>

<body>
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Ajouter un utilisateur</h2>
            {{-- <?php if (isset($_SESSION['add-user'])) : ?>
                    <div class="alert__message error">
                        <p><?php echo $_SESSION['add-user'];
                        unset($_SESSION['add-user']);
                        ?></p>
                    </div>
                <?php endif;?> --}}
            <form action="{{ route('add_user.process') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" value="" placeholder="Nom Complet">
                {{-- <input type="text"name="lastname" value="" placeholder="Last Name"> --}}
                {{-- <input type="text" name="username" value="" placeholder="Username"> --}}
                <input type="email" name="email" value="" placeholder="Email">
                <input type="password" name="password" value="" placeholder="Mot de Passe">
                <input type="hidden" name="role" value="0" placeholder="Confirmer Mot de Passe">
               


                <button type="submit" name="submit" class="btn">Creer</button>

            </form>
        </div>
    </section>

</body>

</html>
