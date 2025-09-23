 <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class="image">
                                <img src="{{asset('admin/assets/images/user/user-99.jpg')}}" class="user-img-style" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Emily Smith </div>
                            <div class="profile-usertitle-job ">{{Auth::user()->first_name ??Guest}} </div>
                        </div>
                    </li>
                    <li class="header">-- Main</li>
                    <li class="active">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="{{asset('admin/index.html')}}">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/dashboard/dashboard2.html')}}">Dashboard 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
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
                            <i data-feather="book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/accounts/income.html')}}">Income</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/accounts/expense.html')}}">Expenses</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/accounts/invoice.html')}}">Invoices</a>
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
                            <i data-feather="command"></i>
                            <span>Job</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/job/add-job.html')}}">Add Job</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/job/requirement-list.html')}}">Requirements</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/job/applicant-list.html')}}">Applicant List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="package"></i>
                            <span>Consultancy</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/consultancy/all-consultancy.html')}}">All Consultancy</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/consultancy/add-consultancy.html')}}">Add Consultancy</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/consultancy/edit-consultancy.html')}}">Edit Consultancy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="feather"></i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/widgets/chart-widget.html')}}">Chart Widget</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/widgets/data-widget.html')}}">Data Widget</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="copy"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/ui/alerts.html')}}">Alerts</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/badges.html')}}">Badges</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/modal.html')}}">Modal</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/buttons.html')}}">Buttons</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/collapse.html')}}">Collapse</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/dialogs.html')}}">Dialogs</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/cards.html')}}">Cards</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/labels.html')}}">Labels</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/list-group.html')}}">List Group</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/notifications.html')}}">Notifications</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/preloaders.html')}}">Preloaders</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/progressbars.html')}}">Progress Bars</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/range-sliders.html')}}">Range Sliders</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/tabs.html')}}">Tabs</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/typography.html')}}">Typography</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/ui/helper-classes.html')}}">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="triangle"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/icons/material-icons.html')}}">Material Icons</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/icons/font-awesome.html')}}">Font Awesome</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/icons/simple-line-icons.html')}}">Simple Line Icons</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/icons/themify.html')}}">Themify Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="layout"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/forms/basic-form-elements.html')}}">Basic Form</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/forms/advanced-form-elements.html')}}">Advanced Form</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/forms/form-examples.html')}}">Form Examples</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/forms/form-validation.html')}}">Form Validation</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/forms/form-wizard.html')}}">Form Wizard</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/forms/editors.html')}}">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="grid"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/tables/normal-tables.html')}}">Normal Tables</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/tables/advance-tables.html')}}">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/tables/export-table.html')}}">Export Table</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/tables/child-row-table.html')}}">Child Row Table</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/tables/group-table.html')}}">Grouping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- Apps</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="mail"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/email/inbox.html')}}">Inbox</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/email/compose.html')}}">Compose</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/email/view-mail.html')}}">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('admin/pages/apps/chat.html')}}">
                            <i data-feather="message-circle"></i>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/pages/apps/calendar.html')}}">
                            <i data-feather="calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/pages/apps/task.html')}}">
                            <i data-feather="check-circle"></i>
                            <span>Task Bar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/pages/apps/portfolio.html')}}">
                            <i data-feather="wind"></i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="server"></i>
                            <span>Others</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/apps/dragdrop.html')}}">Drag &amp; Drop</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/apps/contact_list.html')}}">Contact List</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/apps/contact_grid.html')}}">Contact Grid</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/apps/support.html')}}">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/charts/amchart.html')}}">amChart</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/echart.html')}}">Echart</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/apexcharts.html')}}">ApexCharts</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/morris.html')}}">Morris</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/chartjs.html')}}">ChartJS</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/sparkline.html')}}">Sparkline</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/charts/jquery-knob.html')}}">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="map"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/maps/google.html')}}">Google Map</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/maps/jqvmap.html')}}">Vector Map</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/maps/datamap.html')}}">Data Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- Extra</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="sliders"></i>
                            <span>Timeline</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/timeline/horizontal-timeline.html')}}">Horizontal</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/timeline/vertical-timeline.html')}}">Vertical</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="image"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/medias/image-gallery.html')}}">Image Gallery</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/medias/carousel.html')}}">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user-check"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/examples/login-register.html')}}">Login &amp; Register</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/sign-in.html')}}">Sign In</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/sign-up.html')}}">Sign Up</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/forgot-password.html')}}">Forgot Password</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/locked.html')}}">Locked</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/404.html')}}">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/500.html')}}">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="anchor"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('admin/pages/examples/profile.html')}}">Profile</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/pricing.html')}}">Pricing</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/faqs.html')}}">Faqs</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/pages/examples/blank.html')}}">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="chevrons-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#" onClick="return false;">
                                                    <span>Level - 4</span>
                                                </a>
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