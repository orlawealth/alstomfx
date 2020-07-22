<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

            
                <li>
                    <a href="{{ route('invest.index') }}">
                        <i class="fa fa-money"></i>
                        <span>invest</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('withdraw.index') }}">
                        <i class="fa fa-usd"></i>
                        <span>withdraw</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transaction.index') }}">
                        <i data-feather="credit-card"></i>
                        <span >Transactions </span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('referral.index') }}">
                        <i class="fa fa-users   "></i>
                        <span >Referral Bonus</span>
                    </a>
                </li>
                
                
                <li>
                    <a href="{{ route('setting') }}">
                        <i class="fa fa-user"></i>
                        <span class="second"> Profile </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
