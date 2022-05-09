@extends('admin.adminmain')
 @section('title',"Contact")
 @section('stylesheets')

 	  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 @endsection

 @section('content')
<!-- {{dump($contacts)}} -->
      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Contact List</h1>
          <p class="mb-4"> 
          	<!-- <a target="_blank" href="https://datatables.net">official DataTables documentation</a>. -->
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Below People Tried to Contact You</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>From</th>
                      <th>Email</th>
                     
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Message Date</th>
                      <!-- <th>Salary</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>From</th>
                      <th>Email</th>
                     
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Message Date</th>
                      <!-- <th>Salary</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($contacts as $contact)
                  	 <tr>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      
                      <td>{{$contact->subject}}</td>
                      <td>{{$contact->message}}</td>
                      <td>{{$contact->created_at}}</td>
                    </tr>
                  	@endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>


 @endsection

 @section('scripts')

   <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

 @endsection
 