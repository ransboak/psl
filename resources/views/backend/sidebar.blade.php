<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">Default</a></li>
                        <li><a href="dashboard-saas.html">Saas</a></li>
                        <li><a href="dashboard-crypto.html">Crypto</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Sign Ons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href={{'pending-applications'}}>Pending <span class="badge badge-pill badge-info float-right">03</span></a></li>
                                <li><a href={{'investments'}}>Completed</a></li>
                            </ul>
                        </li>
                        <li><a href={{'fixeddeposit'}}>Fixed Deposit</a></li>
                        <li><a href={{'treasurybills'}}>Treasury Bills</a></li>
                        <li><a href="layouts-light-sidebar.html">CIS</a></li>
                    </ul>
                </li>

                <li class="menu-title">Users</li>

                <li>
                    <a href={{'customers'}} class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Customers</span>
                    </a>
                </li>

                <li>
                    <a href={{'staff'}} class=" waves-effect">
                        <i class="bx bx-chat" ></i>
                        <span class="badge badge-pill badge-success float-right">New</span>
                        <span>Staff</span>
                    </a>
                </li>
            

            </ul>
        </div>
        
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
{{-- 
<form class="modal-body" action="/create-staff" method="POST">
    @csrf
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter lastname">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="contact">Telephone</label>
        <input type="text" name="contact" class="form-control" id="contact" aria-describedby="emailHelp" placeholder="Enter Telephone">
    </div>
    <div class="form-group">
        <label for="staff_id">Staff ID</label>
        <input type="text" name="staff_id" class="form-control" id="staff_id" aria-describedby="emailHelp" placeholder="Enter staff id">
    </div>
    <div class="form-group">
        <label for="password">Enter Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Add Staff</button>
</div>
</form>


 --}}
