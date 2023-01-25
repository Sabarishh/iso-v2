{{-- Asset Manager --}}
@extends('templates.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Asset Manager</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Asset Manager</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Asset</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Asset Category</label>
                  <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset ID</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Type</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Serial Number</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Service Name</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>System</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>IP Address</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Name</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Source of Information</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>How Is The Information/ Document Created/Generated</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Information Description/Meta Data</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Brief of Functional Role</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Access Location</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Location (Logical)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Location (Physical)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Does It Contain PII (Personally Identifiable Information)?</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Custodian</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Owner</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Confidentiality </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Integrity </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Availability </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>

              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Value</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Asset Classification</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>


            </div><!-- /.row -->
          </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
