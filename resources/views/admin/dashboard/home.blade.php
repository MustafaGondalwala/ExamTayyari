@extends('admin.layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card my-3 border-top-thick border-danger">
              <div class="card-header d-flex bg-white">
                <span class="fs-5"> Latest Users </span>
                <span class="ms-auto">
                  <span class="badge bg-danger">8 users</span>
                  <button class="bg-transparent border-0">
                    <i class="las la-minus"></i>
                  </button>
                  <button class="border-0 bg-transparent">
                    <i class="las la-times"></i>
                  </button>
                </span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="candidate-info my-2">
                      <div class="text-center">
                        <img
                          src="/images/top-nav-pic.jpg"
                          class="candidate-image"
                          alt=""
                        />
                      </div>
                      <div class="candidate-name">John Doe</div>
                      <div
                        class="candidate-date text-secondary text-center small"
                      >
                        <div>January</div>
                        <div>2020</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 mt-3">
            <div class="row">
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card violet">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-user-circle"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">7</div>
                      <div class="info-card-name">Users</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card teal">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-th-large"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">6</div>
                      <div class="info-card-name">Categories</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card green">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-book"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">27</div>
                      <div class="info-card-name">Courses</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card red">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-shopping-basket"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">10</div>
                      <div class="info-card-name">Orders</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card violet">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-sms"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">11</div>
                      <div class="info-card-name">Faq</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card teal">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-file-alt"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">16</div>
                      <div class="info-card-name">Pages</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card green">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-university"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">9</div>
                      <div class="info-card-name">Institutes</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="dashboard-info-card red">
                  <div class="card-top">
                    <div class="info-card-icon">
                      <i class="las la-comments"></i>
                    </div>
                    <div class="info-card-text">
                      <div class="count">15</div>
                      <div class="info-card-name">Testimonials</div>
                    </div>
                  </div>
                  <div class="card-bottom">
                    <a
                      href="#"
                      class="small text-white d-flex justify-content-center py-1 nav-link"
                      >More Info</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection