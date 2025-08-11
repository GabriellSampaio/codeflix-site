<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeFlix</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
</head>
<body>
      <header>
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('img/codeflix-white.png')}}" class="logo">
                </a>
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li><a href="#">EM CARTAZ</a></li>
                    <li><a href="{{url('/contato')}}">CONTATO</a></li>
                    <li><a href="{{url('/sobre')}}">QUEM SOMOS</a></li>
                </ul>
            </nav>

            <div class="btn-contato">
                <a href="#">
                    <button>MINHA CONTA</button>
                </a>
            </div>
        </div>
    </header>

        <!--Conteúdo exclusivo de cada página -->
    
        @yield('content')  

   <footer>
        <div class="logo-footer">
            <a href="#">
                <img src="{{asset('img/codeflix-white.png')}}" class="logo">
            </a>
        </div>

        <p class="txt-footer">Todos os direitos reservados &copy</p>

        <div class="redes-sociais">
            <p class="txt-footer">Redes Sociais</p>
            <ul class="lista-redes">
                <li><a href="#"><img src="{{asset('img/instagram-logo.png')}}" class="icons"></a></li>
                <li><a href="#"><img src="{{asset('img/youtube-logo.png')}}" class="icons"></a></li>
                <li><a href="#"><img src="{{asset('img/tiktok-logo.png')}}" class="icons"></a></li>
            </ul>          
        </div>
    </footer>   