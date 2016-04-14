<div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="btn-open-mobile"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                            <?php
                                         $menu = new menu();
                                        $menu = new menu();
                                        $all = $menu->menuPadre();
                                        while($Mvert = mysqli_fetch_array($all)){ 
                                            ?>
                            <li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="../public/data/12.png"><?php echo $Mvert['nombre']; ?></a></li>
                            <?php } ?>
                            
                            
                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <?php
                                        
                                       
                                        $horiz = $menu->menuPadreV();
                                        while($row = mysqli_fetch_array($horiz)){ 
                                            ?>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row['nombre']; ?></a>
                                        <?php
                                            $vert = $menu->menuHijosV($row['id']);
                                            if(!is_null($row2 = mysqli_fetch_array($vert))){

                                        ?>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    
                                                    <?php
                                                    do{ 
                                                        ?>
                                                    <li class="link_container"><a href="index.html"><?php echo $row2['nombre']; ?></a></li>
                                                    <?php }while($row2 = mysqli_fetch_array($vert)); ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php } 
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>