
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
        {{-- <?php if (isset($_SESSION['edit-user'])) : ?>
            <div class="alert__message error " style="text-align: center;">
                <p><?php echo $_SESSION['edit-user'];
                    unset($_SESSION['edit-user']); ?></p>

            </div>
        <?php endif; ?> --}}
        <h2>Modifier un utilisateur</h2>

        <form action="{{ route('edit_user.process',$user->id) }}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="name" value="{{$user->name}}" placeholder="nouveau nom">
            {{-- <input type="hidden" name="id" value="{{ $user->id }}" placeholder="First Name"> --}}
            {{-- <input type="text" name="lastname" value="" placeholder="Last Name"> --}}
            {{-- <input type="password" name="createpassword" value="" placeholder="Create password"> --}}
          

            <button type="submit" name="submit" class="btn">Modifier</button>

        </form>
    </div>
</section>
</body>
</html>
