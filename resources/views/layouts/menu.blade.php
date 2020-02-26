<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span>Inicio</span></a>
</li>
@if(auth()->user()->type == 'standar')
<li class="{{ Request::is('chiefs/*') ? 'active' : '' }}">
    <a href="{{ route('chiefs.edit', auth()->user()->chief->id) }}"><i class="fa fa-user"></i><span>Perfil</span></a>
</li>
<li class="{{ Request::is('patrols*') ? 'active' : '' }}">
    <a href="{{ route('patrols.index') }}"><i class="fa fa-list-alt"></i><span>Amigos</span></a>
</li>
@endif
@if(auth()->user()->type == 'admin')
<li class="{{ Request::is('chiefs*') ? 'active' : '' }}">
    <a href="{{ route('chiefs.index') }}"><i class="fa fa-list-alt"></i><span>Registros</span></a>
</li>
@endif
