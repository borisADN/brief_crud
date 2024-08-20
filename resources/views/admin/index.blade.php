<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/general.css">
    <title>Responsive Blog Site</title>
    <style>
        :root {
            --color-primary: #6f6af8;
            --color-primary-light: hsl(242, 91%, 69%, 18%);
            --color-primary-variant: #5854c7;
            --color-red: #da0f3f;
            --color-red-light: hsl(346, 87%, 46%, 15%);
            --color-green: #00c476;
            --color-green-light: hsl(156, 100%, 38%, 15%);
            --color-gray-900: #1e1e66;
            --color-gray-700: #2d2b7c;
            --color-gray-300: rgba(242, 242, 254, 0.3);
            --color-gray-200: rgba(242, 242, 254, 0.7);
            --color-white: #f2f2fe;
            --color-bg: #0f0f3e;
            --transition: all 300ms ease;
            --container-width-lg: 74%;
            --container-width-md: 88%;
            --form-width: 40%;
            --card-border-radius-1: 0.3rem;
            --card-border-radius-2: 0.5rem;
            --card-border-radius-3: 0.8rem;
            --card-border-radius-4: 2rem;
            --card-border-radius-5: 5rem;
        }

        .action {
            width: 100%
        }

        * {
            margin: 0;
            padding: 0;
            outline: 0;
            appearance: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;

        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        body {
            scrollbar-width: none;
            -ms-overflow-style: none;
            font-family: "Montserrat", sans-serif;
            line-height: 1.6;
            color: var(--color-gray-200);
            background: var(--color-bg);
            font-size: 0.9rem;
            overscroll-behavior: none;
        }

        .container {
            width: var(--container-width-lg);
            max-width: 1800px;
            margin-inline: auto;
        }

        section {
            margin-top: 3rem;
            width: 100vw;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: var(--color-white);
            line-height: 1.3;
        }

        h1 {
            font-size: 1.7rem;
            margin: 1rem 0;
        }

        h3 {
            font-size: 1.1rem;
            margin: 0.8rem 0 0.5rem;
        }

        h4 {
            font-size: 1rem;
        }

        h2 {
            margin-bottom: 1rem;
        }

        a {
            transition: var(--transition);
            color: var(--color-white);
        }

        .btn {
            display: inline-block;
            width: fit-content;
            padding: 0.6rem 1.2rem;
            background-color: var(--color-primary);
            border-radius: var(--card-border-radius-2);
            cursor: pointer;
            border: none;
            transition: var(--transition);
            color: var(--color-white);
            text-align: center;
        }

        .btn.sm {
            padding: 0.3rem 0.7rem;
            font-size: 0.8rem;
        }

        .btn.danger {
            background: var(--color-red);
        }

        .btn:hover {
            background: var(--color-white);
            color: var(--color-bg);
        }

        input,
        textarea,
        select {
            padding: 0.8rem 1.4rem;
            border-radius: var(--card-border-radius-2);
            background-color: var(--color-gray-900);
            resize: none;
            border: none;
            color: var(--color-white);
        }

        .dashboard {
            /* margin-top: 6rem; */
        }

        .dashboard__container {
            display: grid;
            grid-template-columns: 14rem auto;
            gap: 1rem;
            background: var(--color-gray-900);
            padding: 2rem;
            margin-bottom: 5rem;
            height: 60vh;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        .dashboard aside a {
            background: var(--color-primary);
            display: flex;
            gap: 1rem;
            align-items: center;
            padding: 1.6rem;
        }

        .dashboard aside ul li:not(:last-child) a {
            border-bottom: 1px solid var(--color-gray-900);
        }

        .dashboard aside a:hover {
            background: var(--color-gray-700);
        }

        .dashboard aside a.active {
            background: var(--color-gray-900);
        }

        .dashboard main {
            margin-left: 1.5rem;
            /* overflow-y: auto; */
        }

        .dashboard main h2 {
            margin: 0 0 2rem 0;
            line-height: 1;
        }

        .table-container {
            max-height: 300px;
            width: 100%;
            overflow-y: auto;
            border-radius: var(--card-border-radius-2);
            background: var(--color-gray-900);
        }

        .table-container table {
            width: 100%;
            box-sizing: border-box;
            border-collapse: collapse;
            table-layout: fixed;
            /* Ensure the columns have fixed widths */
        }

        .table-container thead {
            background: var(--color-gray-700);
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .table-container thead th {
            /* padding: 1rem; */
            text-align: left;
            background: var(--color-gray-700);
        }

        .table-container tbody td {
            /* padding: 1rem; */
            text-align: left;
            background: var(--color-gray-900);
            border-bottom: 1px solid var(--color-gray-300);
        }

        .table-container tbody tr:hover td {
            background-color: var(--color-gray-700);
            color: var(--color-white);
            cursor: default;
            transition: var(--transition);
        }

        .table-container tbody::-webkit-scrollbar {
            width: 8px;
            display: none;
        }

        .action {
            width: fit-content !important;
        }

        .menu-gauche::-webkit-scrollbar {
            display: none;
        }

        .table-container tbody::-webkit-scrollbar-thumb {
            /* background-color: var(--color-primary); */
            /* border-radius: var(--card-border-radius-1); */
            display: none;

        }

        .table-container::-webkit-scrollbar-thumb {
            display: none !important;
        }
    </style>
</head>

<body>
    @if (Auth::check() && Auth::user()->is_admin)
        <section class="dashboard">
            @if (session('success'))
                <div class="alert__message success container">
                    {{ session('success') }}
                </div>
            @endif
        
      

            <section class="dashboard">
                <div class="container dashboard__container">
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
                        <h2>TOUS LES UTILISATEURS</h2>
                        @if ($users->count() > 0)
                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="20%" >Nom</th>
                                            <th>Email</th>
                                            <th width="20%">Modifier</th>
                                            <th width="20%">Retirer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td width="20%">{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td width="20%">
                                                    <a href="{{ route('edit_user', $user->id) }}"
                                                        class="btn sm">Editer</a>
                                                    </td>
                                                    <td width="20%" >
                                                        <button class="button" onclick="showAlert('{{ $user->id }}')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 69 14" class="svgIcon bin-top">
                                                                <g clip-path="url(#clip0_35_24)">
                                                                    <path fill="black"
                                                                        d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_35_24">
                                                                        <rect fill="white" height="14" width="69">
                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
    
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 69 57" class="svgIcon bin-bottom">
                                                                <g clip-path="url(#clip0_35_22)">
                                                                    <path fill="black"
                                                                        d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_35_22">
                                                                        <rect fill="white" height="57" width="69">
                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                        @endforeach
                                        <!-- Ajoute d'autres lignes ici -->
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        @if ($users->count() == 0)
                            <div class="alert__message error">
                                <p>AUCUN UTILISATEUR POUR LE MOMENT</p>
                            </div>
                        @endif
                    </main>
                </div>
            </section>

            <!-- Alert Templates -->
            @foreach ($users as $user)
                <div id="alert-card-{{ $user->id }}" class="card hidden">
                    <div class="card-content">
                        <p class="card-heading">Confirmation</p>
                        <p class="card-description">Voulez vous vraiment supprimer l'utilisateur <span
                                style="font-weight: bold; color: blue">{{ $user->name }}</span>?</p>
                    </div>
                    <div class="card-button-wrapper">
                        <button class="card-button secondary"
                            onclick="hideAlert('{{ $user->id }}')">Annuler</button>
                        {{-- <button class="card-button primary" id="delete-button">Supprimer</button> --}}
                        <a href="{{ route('delete_user', $user->id) }}" class="card-button primary" id="delete-button">

                            Oui</a>
                    </div>
                    <button class="exit-button" onclick="hideAlert('{{ $user->id }}')">
                        <svg height="20px" viewBox="0 0 384 512">
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                            </path>
                        </svg>
                    </button>
                </div>
            @endforeach
            <script>
                function showAlert(userId) {
                    document.getElementById('alert-card-' + userId).classList.remove('hidden');
                }

                function hideAlert(userId) {
                    document.getElementById('alert-card-' + userId).classList.add('hidden');
                }

                // Close alert card if click on the outside of it
                window.addEventListener('click', function(event) {
                    var alerts = document.querySelectorAll('.card');
                    alerts.forEach(function(card) {
                        if (event.target == card) {
                            card.classList.add('hidden');
                        }
                    });
                });
            </script>
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
        font-size: 2rem;
        color: #da4518
    }

    span:hover {
        cursor: pointer;
        text-decoration: underline;
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
        color: red;
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
        onComplete: (self) => {
            self.cursor.remove();
            document.querySelector('#typed').innerHTML = 'Bonne Visite!';
        }
    });
</script>

</html>
@endif
</body>

</html>
