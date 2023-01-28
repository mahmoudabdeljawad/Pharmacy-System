<div id="throbber" style="display:none; min-height:120px;"></div>

<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">
                <i class="fa-solid fa-clipboard-medical"></i>PharmaDiget</i>

            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 15px;"><?php @session_start(); echo $_SESSION['uname']; ?> <b
                        class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="Myprofile.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="ChangePassword.php"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="crud/logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav ">
                <li>
                    <a href="dashboard.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home"></i>
                        Dashbord </a>

                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-id-card "></i>
                        Invoices <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="invoice.php"><i class="fa fa-angle-double-right"></i> New Invoice</a></li>
                        <li><a href="manageinvoice.php"><i class="fa fa-angle-double-right"></i> Manage Invoice </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-handshake-o "></i>
                        Customer <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="customerpage.php"><i class="fa fa-angle-double-right"></i> Add Customer </a></li>
                        <li><a href="managecustomer.php"><i class="fa fa-angle-double-right"></i> Manage Customer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-shopping-bag "></i>
                        Medicine <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-4" class="collapse">
                        <li><a href="medecine.php"><i class="fa fa-angle-double-right"></i> Add Medicine </a></li>
                        <li><a href="managemideicne.php"><i class="fa fa-angle-double-right"></i> Manage Medicine</a>
                        </li>
                        <li><a href="managemedStock.php"><i class="fa fa-angle-double-right"></i> Manage Medicine Stock</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-users"></i>
                        Supplier <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-5" class="collapse">
                        <li><a href="Supplier.php"><i class="fa fa-angle-double-right"></i> Add Supplier</a></li>
                        <li><a href="managesupplier.php"><i class="fa fa-angle-double-right"></i> Manage Supplier </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="fa fa-bar-chart  "></i>
                        Purchase <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-6" class="collapse">
                        <li><a href="purchase.php"><i class="fa fa-angle-double-right"></i> Add Purchase</a></li>
                        <li><a href="ManagePurchase.php"><i class="fa fa-angle-double-right"></i> Manage Purchase</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-7"><i class="fa fa-address-book "></i>
                        Report <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-7" class="collapse">
                        <li><a href="SalesReport.php"><i class="fa fa-angle-double-right"></i> Sales Report </a></li>
                        <li><a href="PurchaseReport.php"><i class="fa fa-angle-double-right"></i> Purchase Report </a>
                        </li>
                    </ul>
                </li>
<?php if(isset($_SESSION['admin'])){ ?>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-8"><i class="fa fa-address-book "></i>
                        Sequrity Data <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-8" class="collapse">
                        <li><a href="SequrityAdd.php"><i class="fa fa-angle-double-right"></i> Add Employee </a></li>
                        <li><a href="SeqirityManage.php"><i class="fa fa-angle-double-right"></i> Manage Employee </a>
                        </li>
                    </ul>
                </li>
<?php }else "";?>


                <!-- 
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-8"><i class="fa fa-fw fa-search "></i>
                        Search <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-8" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main">
                <div class="col-lg-12 well  " id="content">
                    <!-- start section  header two -->


                    <!--  end section header  two  -->

                    <!-- start header three  -->