@extends('base')

@section('content')
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
                                            <th width="20%">Nom</th>
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
                                                    <a href="{{ route('edit_user', $user->id) }}" class="btn sm">Editer</a>
                                                </td>
                                                <td width="20%">
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
                        <button class="card-button secondary" onclick="hideAlert('{{ $user->id }}')">Annuler</button>
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
        </section>
    @else
        <div class="container">
            <h1 style="text-align: center">Hello , Mr <span>{{ Auth::user()->name }}</span> </h1>

            <div class="logout_btn" style="text-align: center"><a href=""
                    onclick="return confirm('Voulez-vous vous deconnecter ?')"><i class="ri-logout-box-line"></i>Se
                    deconnecter</a></div>
        </div>
        <p id="typed">
            azegeeeee
        <p>
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
    @endif
@endsection
