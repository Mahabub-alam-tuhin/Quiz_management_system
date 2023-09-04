<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @if (Auth::user()->user_role_id == '3')
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('adminAsset') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">

            <li class="nav-item menu-open">
                <a href="{{ route('dashboard') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    {{-- Add role --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                 Role Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.add_role.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Role</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.add_role.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Roles</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                      {{-- Add user --}}
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                 User Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.add_user.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.add_user.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                            {{-- Quiz manu --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Quiz Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.quiz.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Quiz</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.quiz.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Quiz</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- question manu --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Question Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.question.add_question') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Question</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.question.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Question</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                  

                    {{-- user --}}
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              All User 
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.user.view') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> Show Users</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                   {{-- answer submit --}}
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            All Answer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.submission.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Answers</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- All submitted user  --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            All quiz submitted user
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.quizSubmittedUser.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All quiz submitted user </p>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </nav>
        @else
            <a href="#" class="brand-link">
                <img src="{{ asset('adminAsset') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Quiz
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.quiz.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.quiz.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>view</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Question
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.question.add_question') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.exam.question.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>view</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    
                </ul>
            </nav>
    @endif
    </div>

</aside>
