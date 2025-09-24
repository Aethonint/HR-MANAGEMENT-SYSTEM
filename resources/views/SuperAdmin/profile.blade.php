@extends('SuperAdmin.app')
@section('content')


        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Profile</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                           
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">John Smith</div>
                                    <div class="name-center">Software Engineer</div>
                                </div>
                               <img 
    src="{{ $user->profile && $user->profile->profile_picture 
        ? asset('storage/' . $user->profile->profile_picture) 
        : asset('assets/images/user/usrbig3.jpg') }}" 
    class="user-img rounded-full w-20 h-20" 
    alt="Profile Picture">

                                <p>
                                    456, Estern evenue, Courtage area,
                                    <br />New York
                                </p>
                                <div>
                                    <span class="phone">
                                        <i class="material-icons">phone</i>264-625-2583</span>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>564</h5>
                                        <small>Following</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>18k</h5>
                                        <small>Followers</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>565</h5>
                                        <small>Post</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item m-l-10">
                                <a class="nav-link active" data-bs-toggle="tab" href="#about">About</a>
                            </li>
                            <li class="nav-item m-l-10">
                                <a class="nav-link" data-bs-toggle="tab" href="#skills">Skills</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane body active" id="about">
                                <p class="text-default">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley of type and scrambled it to make a type specimen book. It has
                                    survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially
                                    unchanged.</p>
                                <small class="text-muted">Email address: </small>
                                <p>john@gmail.com</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>+91 1234567890</p>
                                <hr>
                            </div>
                            <div class="tab-pane body" id="skills">
                                <ul class="list-unstyled">
                                    <li>
                                        <div>Photoshop</div>
                                        <div class="progress skill-progress m-t-20">
                                            <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Wordpress</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-orange width-per-38" role="progressbar"
                                                aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>HTML 5</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-cyan width-per-39" role="progressbar"
                                                aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Angular</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-purple width-per-70" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="profile-tab-box">
                            <div class="p-l-20">
                                <ul class="nav ">
                                    <li class="nav-item tab-all">
                                        <a class="nav-link active show" href="#project" data-bs-toggle="tab">About
                                            Me</a>
                                    </li>
                                    <li class="nav-item tab-all p-l-20">
                                        <a class="nav-link" href="#usersettings" data-bs-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>About</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">Emily Smith</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class="text-muted">(123) 456 7890</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">johndeo@example.com</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Location</strong>
                                                    <br>
                                                    <p class="text-muted">India</p>
                                                </div>
                                            </div>
                                            <p class="m-t-30">Completed my graduation in Arts from the well known and
                                                renowned institution
                                                of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                                affiliated
                                                to M.S. University. I ranker in University exams from the same
                                                university
                                                from 1996-01.</p>
                                            <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                                                Gujarat
                                                from 2003-2015 </p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when
                                                an unknown printer took a galley of type and scrambled it to make a
                                                type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap
                                                into electronic typesetting, remaining essentially unchanged.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Education</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                                                <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                                                <li>P.H.D., Shaurashtra University, Rajkot</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Experience</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>One year experience as Jr. Professor from April-2009 to march-2010
                                                    at B.
                                                    J. Arts College, Ahmedabad.</li>
                                                <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                                    Collage
                                                    from April - 2008 to April - 2011.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Conferences, Cources &amp; Workshop Attended</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                           <div class="card">
    <div class="header">
        <h2>
            <strong>Security</strong> Settings
        </h2>
    </div>

    <div class="body">
        <!-- Password Update Form -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('put')

           

            <!-- Current Password -->
            <div class="form-group">
                <input 
                    type="password" 
                    name="current_password" 
                    class="form-control" 
                    placeholder="Current Password" 
                    autocomplete="current-password">
                @error('current_password', 'updatePassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- New Password -->
            <div class="form-group">
                <input 
                    type="password" 
                    name="password" 
                    class="form-control" 
                    placeholder="New Password" 
                    autocomplete="new-password">
                @error('password', 'updatePassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <input 
                    type="password" 
                    name="password_confirmation" 
                    class="form-control" 
                    placeholder="Confirm Password" 
                    autocomplete="new-password">
                @error('password_confirmation', 'updatePassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Save Button -->
            <button class="btn btn-info btn-round">Save Changes</button>

            <!-- Success Message -->
            @if (session('status') === 'password-updated')
                <p 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="mt-2 text-success small"
                >
                    {{ __('Password updated successfully.') }}
                </p>
            @endif
        </form>
    </div>
</div>

                            <div class="card">
    <div class="header">
        <h2><strong>Account</strong> Settings</h2>
    </div>
    <div class="body">
        <form method="POST" action="{{ route('superAdmin.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="row clearfix">
                <!-- First Name -->
                <div class="col-lg-6 col-md-12">
                    <label for="first_name">First Name </label>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name"
                               value="{{ old('first_name', $user->first_name) }}" required>
                        @error('first_name')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Last Name -->
                <div class="col-lg-6 col-md-12">
                      <label for="last_name">Last Name </label>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                               value="{{ old('last_name', $user->last_name) }}" required>
                        @error('last_name')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="col-lg-6 col-md-12">
                      <label for="email">Email </label>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail"
                               value="{{ old('email', $user->email) }}" required>
                        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Employee Number -->
                <div class="col-lg-6 col-md-12">
                      <label for="Employee No">Employee No </label>
                    <div class="form-group">
                        <input type="text" name="employee_no" class="form-control" placeholder="Employee Number"
                               value="{{ old('employee_no', optional($user->profile)->employee_no) }}">
                        @error('employee_no')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-lg-6 col-md-12">
                      <label for="phone">Phone </label>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                               value="{{ old('phone', optional($user->profile)->phone) }}">
                        @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Date of Birth -->
                <div class="col-lg-6 col-md-12">
                      <label for="dob">Date of birth </label>
                    <div class="form-group">
                        <input type="date" name="dob" class="form-control"
                               value="{{ old('dob', optional($user->profile)->dob) }}">
                        @error('dob')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Country -->
                <div class="col-lg-6 col-md-12">
                      <label for="country">Country </label>
                    <div class="form-group">
                        <input type="text" name="country" class="form-control" placeholder="Country"
                               value="{{ old('country', optional($user->profile)->country) }}">
                        @error('country')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-12">
                      <label for="address">Address </label>
                    <div class="form-group">
                        <textarea rows="3" name="address" class="form-control no-resize"
                                  placeholder="Address">{{ old('address', optional($user->profile)->address) }}</textarea>
                        @error('address')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

              

                <!-- Employment Type -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <select name="employment_type" class="form-control">
                            <option value="employee" {{ old('employment_type', optional($user->profile)->employment_type) == 'employee' ? 'selected' : '' }}>Employee</option>
                            <option value="self-employed" {{ old('employment_type', optional($user->profile)->employment_type) == 'self-employed' ? 'selected' : '' }}>Self-Employed</option>
                        </select>
                        @error('employment_type')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Emergency Contact Name -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <input type="text" name="emergency_contact_name" class="form-control" placeholder="Emergency Contact Name"
                               value="{{ old('emergency_contact_name', optional($user->profile)->emergency_contact_name) }}">
                        @error('emergency_contact_name')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Emergency Contact Relation -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <input type="text" name="emergency_contact_relation" class="form-control" placeholder="Emergency Contact Relation"
                               value="{{ old('emergency_contact_relation', optional($user->profile)->emergency_contact_relation) }}">
                        @error('emergency_contact_relation')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Emergency Contact Phone -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <input type="text" name="emergency_contact_phone" class="form-control" placeholder="Emergency Contact Phone"
                               value="{{ old('emergency_contact_phone', optional($user->profile)->emergency_contact_phone) }}">
                        @error('emergency_contact_phone')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Document Status Percentage -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <input type="number" step="0.01" name="document_status_percentage" class="form-control" placeholder="Document Status (%)"
                               value="{{ old('document_status_percentage', optional($user->profile)->document_status_percentage) }}">
                        @error('document_status_percentage')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Profile Picture -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" name="profile_picture" class="form-control">
                        @if(optional($user->profile)->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile->profile_picture) }}" alt="Profile Picture" class="mt-2" width="80">
                        @endif
                        @error('profile_picture')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>

                <!-- Save Button -->
                <div class="col-md-12">
                    <button class="btn btn-primary btn-round">Save Changes</button>
                </div>
            </div>
        </form>
  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection