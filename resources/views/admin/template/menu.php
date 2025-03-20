<div class="dashboard-nav">


            <nav class="dashboard-nav-list">


            
                <a href="index.php" class="dashboard-nav-item simple <?php if( $sub_manu == 'home'){echo "active"; } else{ } ?> "><i class="fa-thin fa-gauge"></i> Dashboard </a>
                <a href="do.php" class="dashboard-nav-item simple <?php if( $sub_manu == 'do'){echo "active"; } else{ } ?> "><i class="fa-light fa-chart-line-up"></i> Sales Order </a>
                <a href="status.php" class="dashboard-nav-item simple <?php if( $sub_manu == 'status'){echo "active"; } else{ } ?> "><i class="fa-light fa-ballot-check"></i> Sales Order Status </a>
                
                <a href="report.php" class="dashboard-nav-item simple <?php if( $sub_manu == 'report'){echo "active"; } else{ } ?> "><i class="fa-thin fa-list"></i> Report </a>

                <a href="setup_page.php" class="dashboard-nav-item simple <?php if( $sub_manu == 'setup'){echo "active"; } else{ } ?> "><i class="fa-thin fa-wrench"></i> Setup Page </a>

                <!-- single Dropdown start -->
                <div class='dashboard-nav-dropdown  <?php if( $manu == 'single_dropdown'){echo "show"; } else{ } ?> '>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                        <i class="fa-thin fa-folder-open"></i> Template Design list 1
                    </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="modal.php" class="dashboard-nav-dropdown-item <?php if( $sub_manu == 'modal'){echo "active"; } else{ } ?> ">Modal Button</a>
                        <a href="table.php" class="dashboard-nav-dropdown-item <?php if( $sub_manu == 'table'){echo "active"; } else{ } ?> ">Table</a>
                        <a href="input.php" class="dashboard-nav-dropdown-item  <?php if( $sub_manu == 'input'){echo "active"; } else{ } ?> ">input fieldset</a>
                        <a href="button.php" class="dashboard-nav-dropdown-item <?php if( $sub_manu == 'button'){echo "active"; } else{ } ?> ">Button list</a>
                    </div>
                </div>
                <!-- single Dropdown end -->
                
                <!-- single Dropdown start -->
                <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fa-thin fa-list"></i> Single Dropdown 2</a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="#" class="dashboard-nav-dropdown-item">Sub menu 1</a>
                        <a href="#" class="dashboard-nav-dropdown-item">Sub menu 2</a>
                        <a href="#" class="dashboard-nav-dropdown-item">Sub menu 3</a>
                    </div>
                </div>
                <!-- single Dropdown end -->



                <!-- Multipull Dropdown start -->
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fa-thin fa-folder"></i> Multipull Dropdown 
                    </a>
                    <div class='dashboard-nav-dropdown-menu'>

                        <!-- Sub Menu Dropdown start -->
                        <div class='dashboard-nav-dropdown'>
                            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"> Sub Menu Dropdown 1 </a>
                            <div class='dashboard-nav-dropdown-menu'>
                                <!-- Sub sub Menu Dropdown start -->
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 1</a>
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 2</a>
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 3</a>
                                <!-- Sub sub Menu Dropdown end -->
                            </div>
                        </div>
                        <!-- Sub Menu Dropdown end -->

                        <!-- Sub Menu Dropdown start -->
                        <div class='dashboard-nav-dropdown'>
                            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"> Sub Menu Dropdown 2 </a>
                            <div class='dashboard-nav-dropdown-menu'>
                                <!-- Sub sub Menu Dropdown start -->
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 1</a>
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 2</a>
                                <a href="#" class="dashboard-nav-dropdown-item">Sub Sub Drop 3</a>
                                <!-- Sub sub Menu Dropdown end -->
                            </div>
                        </div>
                        <!-- Sub Menu Dropdown end -->

                        <a href="#" class="dashboard-nav-dropdown-item">Sub Menu Dropdown 3 </a>
                        <a href="#" class="dashboard-nav-dropdown-item">Sub Menu Dropdown 4 </a>
                        <a href="#" class="dashboard-nav-dropdown-item">Sub Menu Dropdown 5 </a>
                    </div>
                </div>
                <!-- Multipull Dropdown end -->




                <a href="#" class="dashboard-nav-item simple"><i class="fa-thin fa-gears"></i> Settings </a>
                <a href="#" class="dashboard-nav-item simple"><i class="fa-thin fa-user"></i>Profile </a>
              <!-- <div class="nav-item-divider"></div>
              <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a> -->
            </nav>
        </div>
