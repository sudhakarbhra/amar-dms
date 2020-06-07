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
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appOne"
                  aria-expanded="false" aria-controls="appOne">
               <i class="mdi mdi-motorbike"></i>
               <span class="nav-text">Inventory</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appOne"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="#">
                         <span class="nav-text">Models</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">Colors</span>
                        </a>
                     </li>
                  </div>
               </ul>

            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appTwo"
                  aria-expanded="false" aria-controls="appTwo">
               <i class="mdi mdi-file-document-outline"></i>
               <span class="nav-text">Recipts</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appTwo"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="#">
                         <span class="nav-text">New Receipt</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">Receipts</span>
                        </a>
                     </li>
                  </div>
               </ul>
               
            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appThree"
                  aria-expanded="false" aria-controls="appThree">
               <i class="mdi mdi-account-group-outline"></i>
               <span class="nav-text">Teams</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="appThree"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li >
                        <a class="sidenav-item-link" href="#">
                         <span class="nav-text">New Member</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">Members</span>
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
            <a  class="text-light" href="logout">
               <h6 class="text-uppercase">
               Logout <span class="float-right"><i class="mdi mdi-logout"></i></span>
               </h6>
            </a>
         </div>
      </div>

   </div>
</aside>
