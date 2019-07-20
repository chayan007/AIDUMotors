<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">Aidu Motors</a>
            <a class="navbar-brand hidden" href="./"><i class="fa fa-signal"></i></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/user"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Business Items</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Cars</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="/addCar">Add</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="/car">Delete</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Accessories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="/addAccessory">Add</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="/accessory">Delete</a></li>
                    </ul>
                </li>
                {{--<li class="menu-item-has-children dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Modifications</a>--}}
                    {{--<ul class="sub-menu children dropdown-menu">--}}
                        {{--<li><i class="menu-icon fa fa-balance-scale"></i><a href="/addModification">Add</a></li>--}}
                        {{--<li><i class="menu-icon fa fa-exclamation-triangle"></i><a href="/modification">Delete</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <h3 class="menu-title">Publicity Items</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Media Highlights</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="/addMedia">Add</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="/media">Delete</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Gallery</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/addImage">Add</a></li>
                        <li><i class="menu-icon fa fa-exclamation-triangle"></i><a href="/image">Delete</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Reviews</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Reviews</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/addReview">Add</a></li>
                        <li><i class="menu-icon fa fa-exclamation-triangle"></i><a href="/review">Delete</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="/logout"> <i class="menu-icon fa fa-sign-in"></i>Log Out </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
