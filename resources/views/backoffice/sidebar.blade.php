<div data-simplebar>
    <ul class="app-menu">

        <li class="menu-title"></li>

        <li class="menu-item">
            <a href="{{ url('backoffice') }}" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="airplay "></i></span>
                <span class="menu-text"> Dashboards </span>
                <span class="badge bg-info rounded-pill ms-auto">3</span>
            </a>
        </li>


        <li class="menu-title">Menu </li>

        <li class="menu-item">
            <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="briefcase"></i></span>
                <span class="menu-text"> Trainings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuComponentsui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ url('backoffice/trainings/create') }}" class="menu-link">
                            <span class="menu-text">Add New Training</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('backoffice/trainings') }}" class="menu-link">
                            <span class="menu-text">Training List</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="layers-3"></i></span>
                <span class="menu-text"> Inhouse Training </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuExtendedui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ url('backoffice/inhouses/create') }}" class="menu-link">
                            <span class="menu-text">Add New Inhouse Training</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('backoffice/inhouses') }}" class="menu-link">
                            <span class="menu-text">Inhouse Training List</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>


        <li class="menu-item">
            <a href="#menuMenueui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="layers-3"></i></span>
                <span class="menu-text"> Menu Section </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuMenueui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ url('/backoffice/about') }}" class="menu-link">
                            <span class="menu-text">About</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ url('/backoffice/clients') }}" class="menu-link">
                            <span class="menu-text">Clients</span>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="{{ url('/backoffice/contact') }}" class="menu-link">
                            <span class="menu-text">Contact US</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>


        <li class="menu-item">
            <a href="#menuSettingui" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="layers-3"></i></span>
                <span class="menu-text"> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuSettingui">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ url('backoffice/information') }}" class="menu-link">
                            <span class="menu-text">Information</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>


    </ul>
</div>
