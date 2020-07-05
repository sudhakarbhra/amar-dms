<aside class="left-sidebar bg-sidebar">
   <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
         <a href="/index.html" title="Sleek Dashboard">
            <svg
               class="brand-icon"
               xmlns="http://www.w3.org/2000/svg"
               preserveAspectRatio="xMidYMid"
               width="30"
               height="33"
               viewBox="0 0 30 33"
               >
               <g fill="none" fill-rule="evenodd">
                  <path
                     class="logo-fill-blue"
                     fill="#7DBCFF"
                     d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                     />
                  <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
               </g>
            </svg>
            <span class="brand-name text-truncate">SRI AMAR BIKES</span>
         </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">
         <!-- sidebar menu -->
         <ul class="nav sidebar-inner" id="sidebar-menu">
         <li>
              <a class="sidenav-item-link" href="javascript:void(0)">
               <i class="mdi mdi-view-dashboard-outline"></i>
               <span class="nav-text">Dashboard</span>
            </a>
         </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appBike"
                  aria-expanded="false" aria-controls="appBike">
               <i class="mdi mdi-motorbike"></i>
               <span class="nav-text">Inventory</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appBike"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="./bikes.php">
                         <span class="nav-text">Bike Models</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="./colors.php">
                        <span class="nav-text">Bike Colors</span>
                        </a>
                     </li>
                  </div>
               </ul>

            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appReceipt"
                  aria-expanded="false" aria-controls="appReceipt">
               <i class="mdi mdi-file-document-outline"></i>
               <span class="nav-text">Recipts</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appReceipt"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="./receipts.php">
                        <span class="nav-text">All Receipts</span>
                        </a>
                     </li>
                  </div>
               </ul>
               
            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appCustomer"
                  aria-expanded="false" aria-controls="appCustomer">
               <i class="mdi mdi-account-group-outline"></i>
               <span class="nav-text">Customers</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appCustomer"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="./customers.php">
                        <span class="nav-text">All Customers</span>
                        </a>
                     </li>
                  </div>
               </ul>
               
            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appTeams"
                  aria-expanded="false" aria-controls="appTeams">
               <i class="mdi mdi-account-circle-outline"></i>
               <span class="nav-text">Teams</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appTeams"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="./members.php">
                        <span class="nav-text">All Members</span>
                        </a>
                     </li>
                  </div>
               </ul>
               
            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appComm"
                  aria-expanded="false" aria-controls="appComm">
               <i class="mdi mdi-chat"></i>
               <span class="nav-text">Communication</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appComm"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="./customer-master.php">
                        <span class="nav-text">Customer Master</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="./customer-list.php">
                        <span class="nav-text">Customer List</span>
                        </a>
                     </li>
                  </div>
               </ul>
               
            </li>
           
         </ul>
      </div>

      <div class="sidebar-footer">
         <hr class="separator mb-0" />
         <div class="sidebar-footer-content">
            <a  class="text-light" href="./logout.php">
               <h6 class="text-uppercase">
               Logout <span class="float-right"><i class="mdi mdi-logout"></i></span>
               </h6>
            </a>
         </div>
      </div>

   </div>
</aside>
