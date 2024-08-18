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

    @if (Auth::check() && Auth::user()->is_admin)
        <section class="dashboard">
            @if (session('success'))
                <div class="alert__message success container">
                    {{ session('success') }}
                </div>
            @endif


            <div class="container dashboard__container">
                <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
                <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>



                <aside>
                    <ul>

                        <li><a href="#" class="active"><i class="uil uil-users-alt"></i>
                                <h5>Gestion des utilisateurs</h5>
                            </a></li>
                        <li><a href="{{ route('add_user') }}"><i class="uil uil-user-plus"></i>
                                <h5>Ajouter un utilisateur</h5>
                            </a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="return confirm('Êtes-vous sûr(e) de vouloir vous deconnecter? ')"><i
                                    class="uil uil-signout"></i>
                                <h5>DECONNEXION</h5>
                            </a></li>

                    </ul>
                </aside>
                <main>

                    <h2>Tout les utilisateurs</h2>
                    @if ($users->count() > 0)
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Modifier</th>
                                    <th>Retirer</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="{{ route('edit_user', $user->id) }}" class="btn sm">Edit</a></td>
                                        <td><a href="{{ route('delete_user', $user->id) }}" class="btn sm danger"
                                                onclick="return confirm('Êtes-vous sur  de vouloir supprimer cet utilisateur?')">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    @if ($users->count() == 0)
                        <div class="alert__message error">
                            <p>AUCUN UTILISATEUR POUR LE MOMENT</p>
                        </div>
                    @endif


                </main>
            </div>
        </section>
</body>

</html>
@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: #fff;
        background: #1f1f38;
        background-image: url({{ asset('bg-texture.png') }});
    }

    span {
        /* font-family: cursive; */
        /* font-style: italic; */
        font-size: 2rem;
        color: #da4518
    }

    span:hover {
        /* color: #0d1fbd; */
        cursor: pointer;
        text-decoration: underline;

        /* font-family: 'Poppins', sans-serif; */
    }

    a {
        text-decoration: none;
        padding: 1rem;
        background: #0d1fbd;
        color: #fff;
        border-radius: 1rem;
        transition: 0.5s;
    }

    i {
        font-size: 1.4rem;
        margin-right: 0.5rem;

    }

    .logout_btn {
        margin-top: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        place-items: center;
    }

    a:hover {
        background: #007bff;
        color: #fff;
    }
    .typed-cursor {
        color: red; /* Remplacez 'red' par la couleur de votre choix */
    }
    p {
        font-size: 2rem;
    }

    .container {
        padding: 10rem;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center">Hello , Mr <span>{{ Auth::user()->name }}</span> </h1>



        <div class="logout_btn" style="text-align: center"><a href=""
                onclick="return confirm('Voulez-vous vous deconnecter ?')"><i class="ri-logout-box-line"></i>Se
                deconnecter</a></div>
    </div>
    <p id="typed">
        azegeeeee
    <p>
</body>


<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#typed', {
        strings: ['Nous sommes ravis de vous accueillir parmi nous.',
            'Que vous soyez ici pour explorer, apprendre, ou simplement profiter de l\'expérience, nous espérons que vous vous sentirez comme chez vous',
            'Si vous avez des questions ou besoin d\'aide, notre équipe est là pour vous assister à chaque étape. Nous vous souhaitons une agreable visite !',
            'Si vous avez des questions ou besoin d\'aide, notre équipe est là pour vous assister à chaque étape.'
        ],
        typeSpeed: 50,
        backSpeed: 10,
        // showCursor: false,
        onComplete: (self) => {
            self.cursor.remove(); // Retire le curseur clignotant
            document.querySelector('#typed').innerHTML = 'Bonne Visite!'; // Efface le texte à la fin
        }
        // loop: true
    });
</script>

</html>

@endif
