{{-- DPIA --}}
@extends('templates.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DPAI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Privacy Control/DPIA</li>
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
            <h3 class="card-title">Add DPIA</h3>

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
                  <label>Risk No</label>
                  <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Service</label>
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
                <label>PII Category</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Purpose of Processing</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Owner</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>PII Controller</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>PII Processor</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Sub-processor(s)</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Access</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Shared</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Format</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Retention</label>
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
                <label>Sensitive Data</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>PIA Required</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Privacy Risk - Describe the Source of Risk</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Risk to Data Subject </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Existing Controls Available </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Likelihood of Harm </label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>

              <div class="col-md-6">
                <div class="form-group">
                <label>Severity of Harm</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Overall Risk</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Options To Reduce or Eliminate Risk</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Effect on Risk</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Residual Risk</label>
                <input type="text" class="form-control"  >
                </div>
                <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Measure approved by DPO</label>
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
