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
            <h1>Records of Processing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Privacy Control/ROP</li>
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
            <h3 class="card-title">Add Records of Processing</h3>

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
                  <label>Activity</label>
                  <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Privacy Asset</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Purpose of processing/Processing on behalf of the controller</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Categories of processing performed on behalf of the controller</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Categories of Data Subjects</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Categories of Personal Data</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Special Category of Personal Data</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Legal basis for processing Special category of Personal Data</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Controller</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Processor</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Categories of recipients (transfer to other controllers and receipients)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Transfer to non-EU / EEA countries (state countries) and legal basis for transfer</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Routines for storage or deletion (if possible to state)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>General description of security measures</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Is there a joint controller for the processing?</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>If a joint controller, name the Zacco company</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Legal basis</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Define system used for the processing</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Is external service providers/sub-processor used? (Data Processor/Sub-Processor)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Name of the Processor/Sub-Processor </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Data Transfer Date</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>

              <div class="col-md-6">
                <div class="form-group">
                <label>Data Transfer Country / Region</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Is a Data Processing Agreement/Sub-Processor Data Processing Agreement (DPA and or EU model clauses) established? </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Has a risk assessment been conducted?</label>
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
