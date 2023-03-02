{{-- Extend the name of the layout/ more like including --}}
@extends('layouts.admin')

{{-- We have to wrap out content into the section contect --}}
{{-- NOTE: -> The 'content' param is/must be the param 
    filled in the @yield option in the app.blade.php file 
--}}
@section('content')

    {{-- Inline Nav/header --}}
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>Welcome back,</h2>
                        <p class="mb-md-0">Student Registartion Dashboard</p>
                    </div>
                    <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                        <p class="text-primary mb-0 hover-cursor">Analytics</p>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                        <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-clock-outline text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                        <a href="{{ '/registration'}}">
                            <i class="mdi mdi-plus text-muted"></i>
                        </a>
                    </button>
                    <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Summary --}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body dashboard-tabs p-0">

                {{-- Start of tabnav --}}
                <ul class="nav nav-tabs px-4" role="tablist">

                    <li class="nav-item">
                    <a class="nav-link active" id="S1-tab" data-bs-toggle="tab" href="#S1" role="tab" aria-controls="S1" aria-selected="true">Senior One(S1)</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                    </li>
                </ul>

                {{-- End of tabnav links --}}


                {{-- Start of tabcontent --}}
                <div class="tab-content py-0 px-0">
                    {{-- S1 --}}
                    <div class="tab-pane fade show active" id="S1" role="tabpanel" aria-labelledby="S1-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                            {{-- Clearence --}}
                            <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center 
                                justify-content-center p-3 item">
                                <i class="mdi mdi-account-group icon-lg me-3 text-success"></i>

                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-dark"><h4>Clearence</h4></small>

                                    <div class="d-flex flex-column justify-content-around">
                                        <small class="mb-1 text-muted">Cleared: 
                                            <span class="text-dark">
                                                200
                                            </span>
                                        </small>

                                        <small class="mb-1 text-muted">Not Cleared: 
                                            <span>
                                                90
                                            </span>
                                        </small>
                                    </div>

                                </div>
                            </div>

                            <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center 
                                justify-content-center p-3 item">
                                <i class="mdi mdi-currency-usd icon-lg me-3 text-danger"></i>

                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-dark"><h4>Payment</h4></small>

                                    <div class="d-flex flex-column justify-content-around ">
                                        <small class="mb-1 text-muted">Full: 
                                            <span class=" ms-4 text-success ">200</span>
                                        </small>
                                    

                                        <small class="mb-1 text-muted">Half: 
                                            <span class="ms-4 text-danger">90</span>
                                        </small>
                                    </div>

                                </div>
                            </div>

                            <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center 
                                justify-content-center p-3 item">
                                <i class="mdi mdi-human-male-female icon-lg me-3 text-muted"></i>

                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-dark"><h4>Gender</h4></small>

                                    <div class="d-flex flex-column justify-content-around ">
                                        <small class="mb-1 text-muted">Male: 
                                            <span class=" ms-4 text-primary ">200</span>
                                        </small>
                                    

                                        <small class="mb-1 text-muted">Female: 
                                            <span class="ms-4 text-primary">250</span>
                                        </small>
                                    </div>

                                </div>
                            </div>

                            <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center 
                                justify-content-center p-3 item">
                                <i class="mdi mdi-account-group icon-lg me-3 text-warning"></i>

                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-dark"><h4>Total</h4></small>

                                    <div class="d-flex flex-column justify-content-around ">
                                        <small class="mb-1 text-muted">450 </small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- S2 --}}
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="me-2 mb-0">2233783</h5>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="me-2 mb-0">9833550</h5>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="me-2 mb-0">$577545</h5>
                        </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                        </div>
                        </div>
                    </div>
                    </div>

                    {{-- S3 --}}
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="me-2 mb-0">$577545</h5>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="me-2 mb-0">9833550</h5>
                        </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="me-2 mb-0">2233783</h5>
                        </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                        <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
          </div>

        </div>
    </div>

    {{-- Table --}}
    {{-- LIST OF REGISTERED STUDENTS --}}

    <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Recently registered students</p>
              <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status report</th>
                        <th>Office</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Gross amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Jeremy Ortega</td>
                        <td>Levelled up</td>
                        <td>Catalinaborough</td>
                        <td>$790</td>
                        <td>06 Jan 2018</td>
                        <td>$2274253</td>
                    </tr>
                    <tr>
                        <td>Alvin Fisher</td>
                        <td>Ui design completed</td>
                        <td>East Mayra</td>
                        <td>$23230</td>
                        <td>18 Jul 2018</td>
                        <td>$83127</td>
                    </tr>
                    <tr>
                        <td>Emily Cunningham</td>
                        <td>support</td>
                        <td>Makennaton</td>
                        <td>$939</td>
                        <td>16 Jul 2018</td>
                        <td>$29177</td>
                    </tr>
                    <tr>
                        <td>Minnie Farmer</td>
                        <td>support</td>
                        <td>Agustinaborough</td>
                        <td>$30</td>
                        <td>30 Apr 2018</td>
                        <td>$44617</td>
                    </tr>
                    <tr>
                        <td>Betty Hunt</td>
                        <td>Ui design not completed</td>
                        <td>Lake Sandrafort</td>
                        <td>$571</td>
                        <td>25 Jun 2018</td>
                        <td>$78952</td>
                    </tr>
                    <tr>
                        <td>Myrtie Lambert</td>
                        <td>Ui design completed</td>
                        <td>Cassinbury</td>
                        <td>$36</td>
                        <td>05 Nov 2018</td>
                        <td>$36422</td>
                    </tr>
                    <tr>
                        <td>Jacob Kennedy</td>
                        <td>New project</td>
                        <td>Cletaborough</td>
                        <td>$314</td>
                        <td>12 Jul 2018</td>
                        <td>$34167</td>
                    </tr>
                    <tr>
                        <td>Ernest Wade</td>
                        <td>Levelled up</td>
                        <td>West Fidelmouth</td>
                        <td>$484</td>
                        <td>08 Sep 2018</td>
                        <td>$50862</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="row mt-4 mb-2">
        <h6 style="text-align: center">
            &copy;copyright 2023. All rights reserved<a href="#" class="text-success"> KHS</a>
        </h6>
    </div>

 
@endsection
