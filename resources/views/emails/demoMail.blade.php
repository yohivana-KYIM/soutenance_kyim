
<!DOCTYPE html>
<html>
<head>
    <title>EMAILS</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div>
        <li class="nav-item">
          <a href="" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            </span>
            <span class="mt-1 ms-1 sidebar-text">

            CML
            </span>
          </a>
        </li>
    </div>
        <div class="py-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light shadow-sm components-section">
                        <div class="card-body">
                            <div class="mb-3 mt-5">
                                <h1 class="text-2xl font-bold text-gray-900">Bienvenue mr/Mme  {{  $mailData['name']}}  Dans Le Systeme Du Centre Medical  La Life </h1>
{{-- <h3>votre  password est:{{auth()->user()->password}}</h3> --}}
                            </div>
                        </div>
                        <p>votre email: {{  $mailData['email']}}</p>
                        <p>votre mot de passe: {{  $mailData['password']}}</p>
                        <p>votre fonction: {{  $mailData['fonction']}}</p>
                                <div>Mail valide avec succès</div>

                                <h4 class="mt-4 mb-0 leading-normal text-size-sm"> <a
                                    href="{{ route('login') }}" class="font-bold text-slate-700">lien deconnexion</a>
                            </h4>



      <p>Thank you</p>
  </body>
</html>


