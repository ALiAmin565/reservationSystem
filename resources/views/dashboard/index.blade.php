@extends('dashboard.nav')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
          <li class="breadcrumb-item"><a href="/dashboard-admin">الرئيسيية</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    {{-- <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </nav>
      </div><!-- End Page Title --> --}}

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Datatables</h5>
                {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}
                <button type="button" class="btn btn-primary">Add</button>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Age</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Brandon Jacob</td>
                      <td>Designer</td>
                      <td>28</td>
                      <td>2016-05-25</td>
                      <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bridie Kessler</td>
                      <td>Developer</td>
                      <td>35</td>
                      <td>2014-12-05</td>
                      <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ashleigh Langosh</td>
                      <td>Finance</td>
                      <td>45</td>
                      <td>2011-08-12</td>
                      <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Angus Grady</td>
                      <td>HR</td>
                      <td>34</td>
                      <td>2012-06-11</td>
                      <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Raheem Lehner</td>
                      <td>Dynamic Division Officer</td>
                      <td>47</td>
                      <td>2011-04-19</td>
                      <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

  </main>
  <!-- End #main -->
@endsection
