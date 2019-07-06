<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Ummat</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/import.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/material-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/summernote.css')}}">

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.js
"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>


<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="row m-0 pt-4 pb-3">
                <div class="col p-0">
                    <span class="font-18 text-bold mr-3">Admin</span>
                    <button type="button" id="sidebarCollapse" class="btn btn-app navbar-btn m-0" style="background: #009976 !important; color: white;">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                </div>
                <div class="col p-0 pt-2 text-right">
                    <a href="{{url('admin/logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h3>Masjid Ummat</h3>
            </div>
            <ul class="list-unstyled components">
                <li id="dashboard" class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{url('/admin/')}}"><i class="material-icons">assessment</i> Dashboard</a></li>
                <li id="user" class="{{ request()->is('admin/user') ? 'active' : '' }}"><a href="{{url('/admin/user')}}"><i class="material-icons">assignment_ind</i> Data Pengurus</a></li>
                <li id="wisata" class="{{ request()->is('admin/masjid') ? 'active' : '' }}"><a href="{{url('/admin/masjid')}}"><i class="material-icons">domain</i> Profile Masjid</a></li>
                <li id="akomodasi" class="{{ request()->is('admin/akomodasi') ? 'active' : '' }}"><a href="{{url('/admin/forum')}}"><i class="material-icons">chat</i> Forum Pengurus</a></li>
                <li id="slider" class="{{ request()->is('admin/slider') ? 'active' : '' }}"><a href="{{url('/admin/slider')}}"><i class="material-icons">info</i> Slider</a></li>
                <li class="{{ request()->is('admin/hasil-pengujian') ? 'active' : '' }}">
                        <a style="background: white; color: #00a680 !important;" href="#kajianSubmenu" data-toggle="collapse" aria-expanded="false"><i class="material-icons">school</i> Kajian</a>
                        <ul class="collapse list-unstyled" id="kajianSubmenu">
                            <li><a href="{{url('/admin/jadwalkajian')}}" style="background-color: #00a680;"><i class="material-icons">event</i> Jadwal</a></li>
                            <li><a href="{{url('/admin/perencanaan_kajian')}}" style="background-color: #00a680;"><i class="material-icons">meeting_room</i> Perencanaan</a></li>
                            <li><a href="{{url('/admin/request_kajian')}}" style="background-color: #00a680;"><i class="material-icons">list_alt</i> Request</a></li>

                        </ul>
                </li>
                <li class="{{ request()->is('admin/hasil-pengujian') ? 'active' : '' }}">
                        <a style="background: white; color: #00a680 !important;" href="#pelatihanSubmenu" data-toggle="collapse" aria-expanded="false"><i class="material-icons">record_voice_over</i> Pelatihan</a>
                        <ul class="collapse list-unstyled" id="pelatihanSubmenu">
                            <li><a href="{{url('/admin/jadwalpelatihan')}}" style="background-color: #00a680;"><i class="material-icons">event</i>Jadwal</a></li>
                            <li><a href="{{url('/admin/perencanaan/pelatihan')}}" style="background-color: #00a680;"><i class="material-icons">meeting_room</i> Perencanaan</a></li>
                            <li><a href="{{url('/admin/request/pelatihan')}}" style="background-color: #00a680;"><i class="material-icons">list_alt</i> Request</a></li>
                             <li><a href="{{url('/admin/daftar/peserta/pelatihan')}}" style="background-color: #00a680;"><i class="material-icons">contacts</i> Daftar Peserta</a></li>
                        </ul>
                </li>
                <li class="{{ request()->is('admin/hasil-pengujian') ? 'active' : '' }}">
                        <a style="background: white; color: #00a680 !important;" href="#donasiSubmenu" data-toggle="collapse" aria-expanded="false"><i class="material-icons">monetization_on</i> Donasi</a>
                        <ul class="collapse list-unstyled" id="donasiSubmenu">
                            <li><a href="{{url('/admin/galangdana')}}" style="background-color: #00a680;"><i class="material-icons">chrome_reader_mode</i> List galang dana</a></li>
                            <li><a href="{{url('/admin/pendonasi')}}" style="background-color: #00a680;"><i class="material-icons">person</i> Pendonasi</a></li>
                            <li><a href="{{url('/admin/penyerahan/donasi')}}" style="background-color: #00a680;"><i class="material-icons">account_balance_wallet</i> Penyerahan</a></li>
                            <li><a href="{{url('/admin/kategori')}}" style="background-color: #00a680;"><i class="material-icons">account_balance_wallet</i> Kategori</a></li>
                        </ul>
                </li>
                 <li class="{{ request()->is('admin/hasil-pengujian') ? 'active' : '' }}">
                        <a style="background: white; color: #00a680 !important;" href="#zakatSubmenu" data-toggle="collapse" aria-expanded="false"><i class="material-icons">payment</i> Zakat</a>
                        <ul class="collapse list-unstyled" id="zakatSubmenu">
                            <li id="ulasan" class="{{ request()->is('admin/ulasan') ? 'active' : '' }}" ><a href="{{url('/admin/zakat')}}" style="background-color: #00a680;"><i class="material-icons">supervisor_account</i> Zakat</a></li>
                            <li><a href="{{url('/admin/penyerahan/zakat')}}" style="background-color: #00a680;"><i class="material-icons">account_balance_wallet</i> Penyerahan</a></li>
                        </ul>
                </li>
            </ul>
        </nav>

        <div id="content">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript">
        $('#table_id').DataTable();
        $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
    </script>
</body>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</html>