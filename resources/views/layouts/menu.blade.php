
<li class="{{ Request::is('pasals*') ? 'active' : '' }}">
    <a href="{!! route('pasals.index') !!}"><i class="fa fa-edit"></i><span>Pasals</span></a>
</li>

<li class="{{ Request::is('kecelakaans*') ? 'active' : '' }}">
    <a href="{!! route('kecelakaans.index') !!}"><i class="fa fa-edit"></i><span>Kecelakaans</span></a>
</li>


<li class="{{ Request::is('kendaraans*') ? 'active' : '' }}">
    <a href="{!! route('kendaraans.index') !!}"><i class="fa fa-edit"></i><span>Kendaraans</span></a>
</li>

<li class="{{ Request::is('korbanKendaraans*') ? 'active' : '' }}">
    <a href="{!! route('korbanKendaraans.index') !!}"><i class="fa fa-edit"></i><span>Korban Kendaraans</span></a>
</li>

<li class="{{ Request::is('korbanKecelakaans*') ? 'active' : '' }}">
    <a href="{!! route('korbanKecelakaans.index') !!}"><i class="fa fa-edit"></i><span>Korban Kecelakaans</span></a>
</li>


