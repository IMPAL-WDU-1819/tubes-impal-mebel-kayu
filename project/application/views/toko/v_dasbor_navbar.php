<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <span class="navbar-brand" href="#">Halo, <?php echo $user["nama_toko"]?> <?php echo $user["namabelakang_toko"]?> (Toko)</span>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                                <!-- <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-panel"></i>
                                        <p>Stats</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="ti-bell"></i>
                                            <p class="notification">5</p>
                                            <p>Notifications</p>
                                            <b class="caret"></b>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Notification 1</a></li>
                                        <li><a href="#">Notification 2</a></li>
                                        <li><a href="#">Notification 3</a></li>
                                        <li><a href="#">Notification 4</a></li>
                                        <li><a href="#">Another notification</a></li>
                                      </ul>
                                </li> -->
                <li>
                    <a href="<?php echo base_url()?>logout/toko">
                        <i class="ti-settings"></i>
                        <p>Keluar Akun</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
