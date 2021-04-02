<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/line-awesome.min.css" />
    <link rel="stylesheet" href="/css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/js/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="/js/datatables.min.css" />
    <link rel="stylesheet" href="/js/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/js/buttons.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <!-- top navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow-xs fixed-top"
    >
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvas-sidebar"
        >
          <span
            class="navbar-toggler-icon"
            data-bs-target="#offcanvas-sidebar"
          ></span>
        </button>
        <a class="navbar-brand me-lg-5" href="/">
          <div class="brand-title">Examtayyari</div>
          <div class="brand-subtitle">Exam Tayyari Online Platform</div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex ms-lg-4 col-md-5">
            <div class="input-group bg-blue-gray rounded-pill overflow-hidden">
              <input
                type="text"
                class="form-control border-0 bg-transparent"
                placeholder="All Categories Search"
              />
              <button
                class="btn bg-violet text-white px-4 fs-5"
                type="button"
                id="button-addon2"
              >
                <i class="las la-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="mesages"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="top-nav-link-icon"
                  ><i class="las la-envelope"></i
                ></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="notifications"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="top-nav-link-icon">
                  <i class="las la-bell"></i
                ></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link top-nav-link h-100 dropdown-toggle"
                id="notifications"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                href="#"
              >
                <img
                  src="/images/top-nav-pic.jpg"
                  height="36px"
                  width="36px"
                  class="top-nav-profile-pic"
                  alt=""
                />
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
              >
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start bg-white text-white border-0 mt-navbar-adjust"
      tabindex="-1"
      id="offcanvas-sidebar"
    >
      <div class="offcanvas-body p-0" id="sidebar-links-body">
        <div class="d-flex px-3 align-items-center">
          <img src="/images/top-nav-pic.jpg" width="60px" class="me-2" />
          <div class="w-100">
            <div class="text-violet fw-bold">Admin</div>
            <div class="small text-violet d-flex align-items-center">
              <div class="status-dot online"></div>
              Online
            </div>
          </div>
        </div>
        <div class="text-uppercase text-violet p-3 small border-bottom">
          Main Navigation
        </div>

        @include('admin.layouts.sidebar')
      </div>
    </div>
    <!-- offcanvas -->
    <main>
      @yield('content')
    </main>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/perfect-scrollbar.min.js"></script>
    <script src="/js/dataTables.bootstrap5.min.js"></script>
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/buttons.bootstrap5.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="/js/buttons.colVis.min.js"></script>

    <script src="/js/script.js"></script>
  </body>
</html>
