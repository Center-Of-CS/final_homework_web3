<div class="sidebar" role="navigation">          
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li class="nav-heading ">
                <span>  خوش آمدیدی   [  <?php echo $_SESSION['username'] ?>  ] </span>
            </li>

            <li class="<?php if(!empty($_GET['page']) and $_GET['page'] == "index"  ) echo "active" ?>">
                <a href="index.php" class="material-ripple ">
                    <i class="material-icons">home</i> خانه  
                </a>
            </li>

            <li class="">
                <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i>   املاک      <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="main.php?page=addContact"> اضافه نمودن اکانت    </a></li>
                    <li class="" ><a href="main.php?page=listContact"> لیست املاک </a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>