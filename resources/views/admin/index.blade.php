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
    @if(Auth::check() && Auth::user()->is_admin)
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
    
                </ul>
            </aside>
            <main>
    
                <h2>Tout les utilisateurs</h2>
                @if ($users->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
    
                            </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($users as $user)
                            <tr>
                      
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('edit_user', $user->id) }}" class="btn sm">Edit</a></td>
    
                                    <td><a href="{{ route('delete_user',$user->id ) }}" class="btn sm danger">Delete</a></td>
                             
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
*{
    padding: 0;
    margin: 0;
}
    body{
        font-family: 'Poppins', sans-serif;
        color: #fff;
        background: #1f1f38;
        background-image: url({{ asset('bg-texture.png') }});
    }
    span{
        font-family: cursive;
        font-style: italic;
        font-size: 4rem;
        color: #da4518
    }
    span:hover{
        /* color: #0d1fbd; */
        cursor: pointer;
        text-decoration: underline;
        
       /* font-family: 'Poppins', sans-serif; */
    }
    a{
        text-decoration: none;
        padding: 1rem;
        background: #0d1fbd;
        color: #fff;
        border-radius: 1rem;
        transition: 0.5s;
    }
    i{
        font-size: 1.4rem;
        margin-right: 0.5rem;

    }

    .logout_btn{
        margin-top: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        place-items: center;
    }
    a:hover{
        background: #007bff;
        color: #fff;
    }
    .container{
        padding: 10rem;
        text-align: center;
    }
</style>
<body >
    <div class="container">
        <h1 style="text-align: center">Hello , Mr  <span>{{ Auth::user()->name }}</span> </h1>
        <div class="logout_btn" style="text-align: center"><a href="" onclick="return confirm('Voulez-vous vous deconnecter ?')"><i class="ri-logout-box-line"></i>Se deconnecter</a></div>
    </body>
    </div>
    
</html>

@endif