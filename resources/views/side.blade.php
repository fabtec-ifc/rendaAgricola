<div class="d-flex flex-column p-3 bg-white" style="width: 280px">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <a href="/profile" class="link-underline link-underline-opacity-0 h-50">
            <i class="ri-user-smile-line ri-4x text-black"></i>
        </a>
        <p>{{ auth()->user()->name }}</p>
        <div>
            <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                sair
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <hr>
    <div class="mt-2">
        <div class="list-group list-group-flush">
            <a href="/dashboard" class="list-group-item list-group-item-action {{ request()->is('*charts*') ? 'active text-green' : '' }}">
                <span class="d-inline-flex gap-4 align-items-center">
                    <span class="d-flex align-items-center gap-1">
                        <i class="ri-dashboard-line ri-lg"></i>
                        Dashboard
                    </span>
                </span>
            </a>
            @if(auth()->check() && in_array(auth()->user()->tipoUsuario_id, [1,2]))
            <a href="/usuario" class="list-group-item list-group-item-action {{ request()->is('*usuario*') ? 'active text-green' : '' }}">
                <span class="d-inline-flex gap-2 align-items-center">
                    <span class="d-flex align-items-center gap-1">
                        <i class="ri-group-line ri-lg"></i>
                        Usuários
                    </span>
                </span>
            </a>
            @endif
            @if(auth()->check() && in_array(auth()->user()->tipoUsuario_id, [1,2]))
            <a href="/tipoUsuario" class="list-group-item list-group-item-action {{ request()->is('*tipoUsuario*') ? 'active text-green' : '' }}">
                <span class="d-inline-flex gap-2 align-items-center">
                    <span class="d-flex align-items-center gap-1">
                        <i class="ri-user-settings-line ri-lg"></i>
                        Tipo Usuário
                    </span>
                </span>
            </a>
            @endif
    
          
    
    
        </div>
    </div>
</div>
