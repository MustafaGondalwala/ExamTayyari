<ul class="p-0 m-0 sidebar-links">
          <li>
            <a href="{{route('admin.home')}}" class="nav-link sidebar-link {{ request()->is('admin/home') ? 'active' : '' }}">
              <span class="icon">
                <i class="las la-paste"></i>
              </span>
              Dashboard
            </a>
          </li>
          <!-- <li>
            <a href="{{ route('admin.users.list') }}" class="nav-link sidebar-link  {{ request()->is('admin/users*') ? 'active' : '' }}">
              <span class="icon">
                <i class="lar la-user-circle"></i>
              </span>
              Users
            </a>
          </li> -->
          <li>
            <a href="{{ route('admin.category.list') }}" class="nav-link sidebar-link {{ request()->is('admin/category*') ? 'active' : '' }}">
              <span class="icon">
                <i class="lar la-copy"></i>
              </span>
              Categories
            </a>
          </li>
          <li>
            <a href="{{ route('admin.exam.list') }}" class="nav-link sidebar-link {{ request()->is('admin/exam*') ? 'active' : '' }}">
              <span class="icon">
                <i class="lar la-handshake"></i>
              </span>
              Exam
            </a>
          </li>
          <li>
            <a href="{{ route('admin.ebook.list') }}" class="nav-link sidebar-link {{ request()->is('admin/ebook*') ? 'active' : '' }}">
              <span class="icon"><i class="lab la-first-order"></i></span>
              Ebook
            </a>
          </li>
          <li>
            <a href="{{route('admin.mock-test.list')}}" class="nav-link sidebar-link  {{ request()->is('admin/mock-test*') ? 'active' : '' }}"">
              <span class="icon">
                <i class="las la-pager"></i>
              </span>
              Mock Test
            </a>
          </li>
          <li>
            <a href="{{route('admin.previous-question-paper.list')}}" class="nav-link sidebar-link">
              <span class="icon">
                <i class="lar la-newspaper"></i>
              </span>
              Previous Question Paper
            </a>
          </li>
          <li>
            <a href="/push_notifications.html" class="nav-link sidebar-link">
              <span class="icon">
                <i class="lar la-paper-plane"></i>
              </span>
              Push Notifications
            </a>
          </li>
          <li>
            <a href="/institutes.html" class="nav-link sidebar-link">
              <span class="icon"> <i class="las la-university"></i> </span>
              Institutes
            </a>
          </li>
        </ul>