<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('category.index') ? 'active' : '' }}">
        <i class="nav-icon fa fa-th"></i>
        <p>Liste de Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('articles.index') }}" class="nav-link {{ Request::is('article.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Liste des Articles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tag.index') }}" class="nav-link {{ Request::is('tag') ? 'active' : '' }}">
        <i class="nav-icon fa fa-hashtag"></i>
        <p>Listes des Tags</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Roles</p>
    </a>
</li>
@permission('read', 'User')
    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users.index') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>Liste des utlisateurs</p>
        </a>
    </li>
@endpermission

