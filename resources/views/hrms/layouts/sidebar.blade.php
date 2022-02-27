<?php //echo 'in';exit;?>

<style type="text/css">
    .sidebar-userpic-name,.\.profile-usertitle-job {
    margin-right: 10px;
}
</style>

<div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                             <center>
                               
                                @if(Session::has('Gender'))
                                @if( Session::get('Gender')  == 'Female')
                                <img src="{{ URL::asset('assetss/images/Girl.icon.png')}}" class="user-img-style" alt="User Image" />
                               @else
                                <img src="{{ URL::asset('assetss/images/men_icon.png')}}" class="user-img-style" alt="User Image" />
                                @endif
                                @else
                                    <img src="{{ URL::asset('assetss/images/men_icon.png')}}" class="user-img-style" alt="User Image" />
                                @endif
                              </center>
                            </div>
                        </div>
                        <div class="profile-usertitle">
                           <div class="sidebar-userpic-name"><center>{{ Session::get('employee_name')}}</center></div>
                           <div class=".profile-usertitle-job" style="font-size: 10px"><center>{{ Session::get('employee_Role') }}</center>
                            <div class=".profile-usertitle-job" style="font-size: 10px"><center></center></div>
                        </div>
                    </li>
                    <li class="header">Menu</li>
                     
                     @if(Session::get('employee_Role') == 'Employee' )
                    <li class="active">
                        <a href="/welcome"  class="menu-toggle">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                        
                    </li>
                @endif

                     @if(Session::get('employee_Role') == 'Admin'  )
                    <li>
                        <a href="#"  onClick="return false;" class="menu-toggle">
                            <i data-feather="users"></i>
                            <span>Students</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="/employee-manager">All Students</a>
                            </li>
                          
                            <li>
                                <a href="/add-employee">Add Students</a>
                            </li>

                          
                        
                            
                        </ul>
                    </li>
                        @endif
                    @if(Session::get('employee_Role') == 'Admin'  )
                      <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book-open"></i>
                            <span>Questions</span>
                        </a>
                        <ul class="ml-menu">
                             
                            <li>
                                <a href="/Create-question">Create Question</a>
                            </li>
                    

                            
                          
                        </ul>
                    </li>
                     @endif

                     @if(Session::get('employee_Role') == 'Admin'  )
                     <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="clipboard"></i>
                            <span>Exam</span>
                        </a>
                        <ul class="ml-menu">
                            
                            
                           
                            <li>
                                <a href="Create_exam">Create Exam</a>
                            </li>
                           <!--  <li>
                                <a href="/All_Leave_balance">All Employee Leaves Balance</a>
                            </li> -->
                          

                             
                             <li>
                                <a href="View_exam">View Exam</a>
                            </li>
                            
                          
                        </ul>
                    </li>
                       @endif


                        @if(Session::get('employee_Role') == 'Admin'  )
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="headphones"></i>
                            <span>Assign Exam to Employee</span>
                        </a>
                         
                        <ul class="ml-menu">
                            <li>
                                <a href="Assign_exam">Assign Exam</a>
                            </li>
                           
                            <li>
                                <a href="List_Assign_exam">List of Assign Exam To emp</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="copy"></i>
                            <span>Result of employee</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="FinalAllEmpRecords">Final point</a>
                            </li>
                           
                        </ul>
                    </li>
                    
                     @endif
                   

                    <li>
                        <a href="/logout">
                            <i class="material-icons" style="font-size: 17px">power_settings_new</i>
                            <span style="color: red;font-weight: bold">Logout</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-bs-toggle="tab" class="active">SKINS</a>
                </li>
               <!--  <li role="presentation">
                    <a href="#settings" data-bs-toggle="tab">SETTINGS</a>
                </li> -->
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>SIDEBAR COLOR</p>
                            <div class="selectgroup selectgroup-pills sidebar-color mt-3">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1"
                                        class="btn-check selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2"
                                        class="btn-check selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <div class="btn-group theme-color mt-3" role="group"
                                aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" value="1" id="btnradio1"
                                    autocomplete="off" checked>
                                <label class="radio-toggle btn btn-outline-primary" for="btnradio1">Light</label>
                                <input type="radio" class="btn-check" name="btnradio" value="2" id="btnradio2"
                                    autocomplete="off">
                                <label class="radio-toggle btn btn-outline-primary " for="btnradio2">Dark</label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>