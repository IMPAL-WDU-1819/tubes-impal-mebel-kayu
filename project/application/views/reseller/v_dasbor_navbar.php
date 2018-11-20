<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <span class="navbar-brand" href="#">Halo, <?php echo $user["nama_reseller"]?> <?php echo $user["namabelakang_reseller"]?> (Reseller)</span>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url()?>logout/reseller">
                        <i class="ti-settings"></i>
                        <p>Keluar Akun</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>