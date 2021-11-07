<div class="content"> <!-- Início da div de conteúdo -->
    <div class="navbar">
                <div class="user">
                    <i class="fas fa-bell fa-fw"></i>
                    <i class="fas fa-envelope fa-fw"></i>
                    <span><i class="fas fa-user">{{auth()->user()->USER_ADM}}</i></span>    
                </div>
                @auth
                <form method="POST" action="{{url('logout')}}">
                        @csrf
                        <input type="submit" class="btn btn-primary" value="logout"></input>
                </form>
                @endauth
    </div>