<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        /* Atur overflow agar tidak bisa di-scroll horizontal */
        html,
        body {

            background-color: #f8f9fa;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            position: fixed;
            width: 250px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .sidebar .nav-link {
            color: #ddd;
            transition: background-color 0.2s, color 0.2s;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar .nav-link .fs-4 {
            margin-right: 8px;
        }

        .dropdown-toggle {
            cursor: pointer;
        }

        .dropdown-menu {
            background-color: #495057;
        }

        .dropdown-menu .dropdown-item {
            color: #ddd;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #6c757d;
            color: #fff;
        }

        /* Konten disesuaikan agar tidak melebihi layar */
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        /* Responsif: sidebar otomatis tersembunyi di layar kecil */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                transform: translateX(-250px);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .content {
                margin-left: 0;
            }

            .navbar-toggler {
                display: block;
            }
        }

        /* Tambahkan padding di layar kecil */
        @media (max-width: 576px) {
            .content {
                padding: 15px;
            }
        }
    </style>
    <title>Admin Menu</title>
</head>

<body>
    <!-- Navbar untuk layar kecil -->
    <nav class="navbar navbar-dark bg-dark d-md-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand mb-0 h1">Admin Panel</span>
        </div>
    </nav>

    <div class="row flex-nowrap">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-xl-2 sidebar collapse d-md-block" id="sidebarMenu">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/admin" class="d-flex align-items-center pb-3 text-white text-decoration-none">
                    <span class="fs-5 d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <li class="nav-item">
                        <a href="/admin/showEvent" class="nav-link align-middle px-0">
                            <i class="ri-calendar-event-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Event</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/berita" class="nav-link align-middle px-0">
                            <i class="ri-newspaper-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/mahasiswa" class="nav-link align-middle px-0">
                            <i class="ri-user-3-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Mahasiswa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/alumni" class="nav-link align-middle px-0">
                            <i class="ri-user-3-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Alumni</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/dosen" class="nav-link align-middle px-0">
                            <i class="ri-user-star-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Dosen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/kompetisi" class="nav-link align-middle px-0">
                            <i class="ri-trophy-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Kompetisi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/kurikulum" class="nav-link align-middle px-0">
                            <i class="ri-book-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Kurikulum</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/visiMisi" class="nav-link align-middle px-0">
                            <i class="ri-information-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Visi Misi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/organisasi" class="nav-link align-middle px-0">
                            <i class="ri-organization-chart fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Organisasi</span>
                        </a>
                    </li>

                    <li class="nav-item menus">
                        <a href="/admin/kontak" class="nav-link align-middle px-0">
                            <i class="ri-contacts-line fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Kontak</span>
                        </a>
                    </li>
                </ul>
                <div class="dropdown mt-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-account-circle-fill"></i>
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content col py-3">
            @yield('section')
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    @yield('scripts')

    <script>
        // Toggle sidebar visibility on small screens
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>

</html>
