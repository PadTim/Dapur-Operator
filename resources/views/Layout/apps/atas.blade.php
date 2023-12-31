<nav class="main-header navbar navbar-expand  navbar-white navbar-light   border-bottom-0 bg-silver bgQ">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link text-white" style=" font-family: 'Fredoka One'; font-size:1.2em">{{ config('app.name') }}</a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
           
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </li>

        <li class="nav-item">
            <div class="nav-link">
                <div class="custom-control custom-switch ">
                    <input type="checkbox" class="custom-control-input glass" id="darkSwitch">
                    <label class="custom-control-label" for="darkSwitch"></label>
                  </div>
            </div>
        </li>

  
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        
    </ul>
</nav>