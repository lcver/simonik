    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Simonik App</span>
      </a>

      <!-- Sidebar -->
      @if(Auth::user()->role == "Super Admin")
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Super Admin</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Data Master
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">5</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('dataSekolah.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Sekolah</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('administratorSekolah.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Administrator Sekolah</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Dinas Pendidikan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Operator</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kepala Sekolah</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('superAdmin/dataPengawas') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                          Data Pengawas
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Important</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Warning</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
      </div>

      @elseif(Auth::user()->role == "Guru")
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Guru</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">HALAMAN UTAMA</li>
            <li class="nav-item">
              <a href="{{ url('guru/home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">MENGAJAR</li>
            <li class="nav-item">
              <a href="{{ url('guru/mulaiMengajar') }}" class="nav-link">
                <i class="nav-icon fas fa-star"></i>
                <p>
                  Mulai Mengajar
                </p>
              </a>
            </li>
            <li class="nav-header">DATA</li>
            <li class="nav-item">
              <a href="{{ url('guru/jadwalMengajar') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar-week"></i>
                <p>
                  Jadwal Mengajar
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kehadiranSiswa.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Kehadiran Siswa
                </p>
              </a>
            </li>
            <li class="nav-header">FILE</li>
            <li class="nav-item">
              <a href="{{ route('dataDokumen.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>
                  Dokumen
                </p>
              </a>
            </li>
            <li class="nav-header">INFORMASI PENGGUNA</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Guru</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      

      <!-- <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('admin/AdministratorSekolah') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Guru
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/dataGuru') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Guru</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/dataSiswa') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>List Siswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('verifikasiRombel.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Verifikasi Rombel</p>
            </a>
          </li>
          </li> -->



      @elseif(Auth::user()->role == "Admin")
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Tata Usaha (Admin)</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Warga Sekolah
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/admin/dataGuru') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Guru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/dataSiswa') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/tahunAkademik') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tahun Akademik</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/dataMapel') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Mapel</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/verifikasiRombel') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Verifikasi Rombel</p>
                  </a>
                </li>
            </li>
          </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Grafik Kinerja Guru
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dokumentasiGuru.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dokumentasi Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kehadiranGuru.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kehadiran Guru</p>
                </a>
              </li>
            </ul>
          </li>

          </ul>
        </nav> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/guru/tahunAkademik') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tahun Akademik</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/guru/dataMapel') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Mapel</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/guru/dataDokumen') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Dokumen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/guru/kehadiranSiswa') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kehadiran Siswa</p>
            </a>
          </li>

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      </div>

      @elseif(Auth::user()->role == "Admin")
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Tata Usaha(user sekolah)</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('admin/AdministratorSekolah') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Data Guru
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/dataGuru') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Guru</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/dataSiswa') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('verifikasiRombel.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Verifikasi Rombel</p>
              </a>
            </li>




            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Important</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Warning</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informational</p>
              </a>
            </li>
          </ul>
        </nav>

      </div>


      <li class="nav-header">LABELS</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p class="text">Important</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-warning"></i>
          <p>Warning</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Informational</p>
        </a>
      </li>
      </ul>
      </nav>
      <!-- pengawas -->
      @elseif(Auth::user()->role == "Pengawas")
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Pengawas</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Persentase Dokumen
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Sekolah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Guru</p>
                  </a>
                </li>
              </ul>
            </li>


            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Important</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Warning</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informational</p>
              </a>
            </li>
          </ul>
        </nav>

      </div>
      @endif
      <!-- /.sidebar -->
    </aside>