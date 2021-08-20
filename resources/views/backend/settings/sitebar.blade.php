

<div class=" col-md-3">
    <div class=" list-group">
        <a href="{{ route('app.settings.general') }}" class=" list-group-item list-group-item-action {{ Route::is('app.settings.general') ? 'active' : '' }}"> General</a>
        <a href="{{ route('app.settings.appaerance') }}" class=" list-group-item list-group-item-action  {{ Route::is('app.settings.appaerance') ? 'active' : '' }}">Appaerance</a>
        <a href="{{ route('app.settings.mail') }}" class=" list-group-item list-group-item-action  {{ Route::is('app.settings.mail') ? 'active' : '' }}">Mail</a>
    </div>
</div>