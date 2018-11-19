@extends('admin.layouts.master')
@section('content')


<div class="main-content bg-fixed-bottom" style="background-image: url({{asset ('org/assets')}}/img/illustrations/sticky.svg);">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Our Platform
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            Platform Feed
                        </h1>

                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-xl-8">

                                <!-- Image -->
                                <img src="{{asset ('org/assets')}}/img/illustrations/happiness.svg" alt="..." class="img-fluid mt--5 mb-4" style="max-width: 272px;">

                                <!-- Title -->
                                <h2>
                                    We released 2008 new versions of our theme to make the world a better place.
                                </h2>

                                <!-- Content -->
                                <p class="text-muted">
                                    This is a true story and totally not made up. This is going to be better in the long run but for now this is the way it is.
                                </p>

                                <!-- Button -->
                                <a href="#!" class="btn btn-primary">
                                    Try it for free
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

                <!-- Top Earners -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Top Earners
                        </h4>

                    </div>
                    <div class="table-responsive mb-0">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    Member
                                </th>
                                <th>
                                    Schedule
                                </th>
                                <th>
                                    Hours Billed
                                </th>
                                <th>
                                    Completion
                                </th>
                                <th>
                                    Effective Rate
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>

                                    <!-- Avatar -->
                                    <div class="avatar avatar-xs d-inline-block mr-2">
                                        <img src="{{asset ('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Title -->
                                    <span>Dianna Smiley</span>

                                </td>
                                <td>
                                    <span class="text-success">●</span> On Schedule
                                </td>
                                <td>
                                    271
                                </td>
                                <td>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <span class="mr-2">55%</span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </td>
                                <td>
                                    $55.25%
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <!-- Avatar -->
                                    <div class="avatar avatar-xs d-inline-block mr-2">
                                        <img src="{{asset ('org/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Title -->
                                    <span>Ab Hadley</span>

                                </td>
                                <td>
                                    <span class="text-warning">●</span> Delayed
                                </td>
                                <td>
                                    44
                                </td>
                                <td>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <span class="mr-2">25%</span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </td>
                                <td>
                                    $122.52%
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <!-- Avatar -->
                                    <div class="avatar avatar-xs d-inline-block mr-2">
                                        <img src="{{asset ('org/assets')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Title -->
                                    <span>Adolfo Hess</span>

                                </td>
                                <td>
                                    <span class="text-success">●</span> On Schedule
                                </td>
                                <td>
                                    271
                                </td>
                                <td>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <span class="mr-2">55%</span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </td>
                                <td>
                                    $55.25%
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <!-- Avatar -->
                                    <div class="avatar avatar-xs d-inline-block mr-2">
                                        <img src="{{asset ('org/assets')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Title -->
                                    <span>Daniela Dewitt</span>

                                </td>
                                <td>
                                    <span class="text-warning">●</span> Delayed
                                </td>
                                <td>
                                    44
                                </td>
                                <td>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <span class="mr-2">25%</span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </td>
                                <td>
                                    $122.52%
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <!-- Avatar -->
                                    <div class="avatar avatar-xs d-inline-block mr-2">
                                        <img src="{{asset ('org/assets')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Title -->
                                    <span>Miyah Myles</span>

                                </td>
                                <td>
                                    <span class="text-success">●</span> On Schedule
                                </td>
                                <td>
                                    271
                                </td>
                                <td>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <span class="mr-2">55%</span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </td>
                                <td>
                                    $55.25%
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection