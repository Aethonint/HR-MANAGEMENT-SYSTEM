 <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class="image">
                                <img 
    src="{{ $user->profile && $user->profile->profile_picture 
        ? asset('storage/' . $user->profile->profile_picture) 
        : asset('assets/images/user/usrbig3.jpg') }}"  class="user-img-style" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Emily Smith </div>
                            <div class="profile-usertitle-job ">{{Auth::user()->first_name ??Guest}} </div>
                        </div>
                    </li>
                   
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="users"></i>
                            <span>Employees</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/employee/all-employees.html')}}">All Employee</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/employee/add-employee.html')}}">Add Employee</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/employee/edit-employee.html')}}">Edit Employee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="briefcase"></i>
                            <span>Projects</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/projects/all-projects.html')}}">All Projects</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/projects/add-project.html')}}">Add Project</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/projects/edit-project.html')}}">Edit Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book-open"></i>
                            <span>Attendance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/attendance/today-attend.html')}}">Today Attendance</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/attendance/emp-attend.html')}}">Employee Attendance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user"></i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/clients/all-clients.html')}}">All Clients</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/clients/add-client.html')}}">Add Client</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/clients/edit-client.html')}}">Edit Client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="clipboard"></i>
                            <span>Leave Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/leave/all-leave.html')}}">All Leave Request</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/leave/leave-balance.html')}}">Leave Balance</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/leave/add-leave.html')}}">New Leave Request</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/leave/edit-leave.html')}}">Edit Leave Request</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/leave/leave-type.html')}}">Leave Types</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="headphones"></i>
                            <span>Holidays</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/holiday/all-holidays.html')}}">All Holidays</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/holiday/add-holiday.html')}}">Add Holiday</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/holiday/edit-holiday.html')}}">Edit Holiday</a>
                            </li>
                        </ul>
                    </li>
              
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="trello"></i>
                            <span>Departments</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/departments/all-departments.html')}}">All Departments</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/departments/add-department.html')}}">Add Department</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/departments/edit-department.html')}}">Edit Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="dollar-sign"></i>
                            <span>Payroll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/payroll/payslip.html')}}">Payslip</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/payroll/employee-salary.html')}}">Employee Salary</a>
                            </li>
                        </ul>
                    </li>

                    

                           <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="shield"></i>
                            <span>Complince</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/payroll/payslip.html')}}">Payslip</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/payroll/employee-salary.html')}}">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                           <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="trending-up"></i>
                            <span>Performance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/payroll/payslip.html')}}">Payslip</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/payroll/employee-salary.html')}}">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                           <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="bar-chart-2"></i>
                            <span>Reports</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/payroll/payslip.html')}}">Payslip</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/payroll/employee-salary.html')}}">Employee Salary</a>
                            </li>
                        </ul>
                    </li>


                     <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="settings"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/payroll/payslip.html')}}">Payslip</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/payroll/employee-salary.html')}}">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    
                    
                   
                   
                   
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>