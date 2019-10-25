<!DOCTYPE html>
<html>
<head>
  @include('layouts.head.head')
  @include('layouts.javascripts.js')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.content.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.content.aside')

  <!-- Content Wrapper. Contains page content -->
  @include('layouts.content.wrapper')
  <!-- /.content-wrapper -->
  
  @include('layouts.content.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<div class="modal fade" id="deleteCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form id="conf_delete" method="POST" action="">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@if (session()->has('success'))
    <div class="alert-box">
      <div class="alert alert-info alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text"><strong>Selamat Datang {{ Auth::user()->name }}!</strong> Di Reminder</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
    </div>
    <script>
        $('.alert-box').css('transform', 'translateX(0)');
        setTimeout(function(){
            $('.alert-box').css('transform', 'translateX(1000px)');
        }, 4000);
        setTimeout(function(){
            $('.alert-box').hide();
        }, 5000);
    </script>
@endif
<!-- ./wrapper -->

@include('layouts.javascripts.jsAdd')
</body>
</html>
