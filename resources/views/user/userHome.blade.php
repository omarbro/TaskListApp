<x-app-layout>
	<div>
	<h1>Welcome To User Dashboard.</h1>
	</div>
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
	<ul class="nav">
          
          
          <li class="nav-item menu-items" style="background-color: #F5C6AA;text-align: center;margin-bottom: 10px">
            <a class="nav-link" href="{{url('addTaskUserView')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add New Task</span>
            </a>
          </li>
          <li class="nav-item menu-items" style="background-color: #F5C6AA;text-align: center;margin-bottom: 10px">
            <a class="nav-link" href="{{url('showTask')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">View Task</span>
            </a>
          </li>
        </ul>
      </div>
     </nav>
</x-app-layout>
