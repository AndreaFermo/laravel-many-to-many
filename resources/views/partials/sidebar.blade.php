<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.projects.index')}}" class="nav-link {{ (request()->is('admin/projects')) ? 'active' : '' }}">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Projects
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.projects.create')}}" class="nav-link {{ (request()->is('admin/projects/create')) ? 'active' : '' }}">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Nuovo Progetto
            </a>
        </li>

    </ul>
</div>