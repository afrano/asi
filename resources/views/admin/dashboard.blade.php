@extends('admin.master')

@section('content')

<div class=" col-md-12 col-sm-12  ">
    <p> Application Menu</p>
     
        <div class="row x_content">
            <!--        <a class="btn btn-app">
                        <i class="fa fa-th-large"></i> Menu
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-th-list"></i> Sub Menu
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-map"></i> Peta Website
                    </a>-->
            <a href="/settings" class="btn btn-app">
                <i class="fa fa-globe"></i> Identitas
            </a>

            <a href="/admin/publikasi/berita" class="btn btn-app">
                <i class="fa fa-newspaper-o"></i> Berita
            </a>
            <a href="/slider-web" class="btn btn-app"> 
                <i class="fa fa-sliders"></i> Slider
            </a>
            <a href="/admin/galeri/foto" class="btn btn-app"> 
                <i class="fa fa-image"></i> Galeri
            </a>
            <a onclick="alert('Belum ada notifikasi masuk')" class="btn btn-app">

                <i class="fa fa-bullhorn"></i> Notifications
            </a> 
            <a onclick="alert('Terdapat 5 user pada website, data belum ditampilkan')" class="btn btn-app">
                <i class="fa fa-users"></i> Users
            </a>
<!--            <a class="btn btn-app">
                <i class="fa fa-file-o"></i> Page
            </a>-->

            <a onclick="alert('Belum ada pesan masuk')"  class="btn btn-app">

                <i class="fa fa-envelope"></i> Inbox
            </a>
            <a onclick="alert('Belum ada like')" class="btn btn-app">
                <i class="fa fa-heart-o"></i> Likes
            </a>
        </div>
 
</div>

<div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
        <div class="tile-stats">
            <div class="icon">
            </div>
            <div class="count">1</div>
            <h4>Artikel dipublish</h4> 
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
        <div class="tile-stats">
            <div class="icon">
            </div>
            <div class="count">2</div>

            <h4>Slider</h4> 
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
        <div class="tile-stats">
            <div class="icon">
            </div>
            <div class="count">3</div>

            <h4>Dilihat</h4> 
        </div>
    </div> 
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
        <div class="tile-stats">
            <div class="icon">
            </div>
            <div class="count">2</div>

            <h4> Total Berlanganan</h4> 
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Graph Pengunjung</h2>
            <ul class="nav navbar-right panel_toolbox"> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content2">
            <div id="graph_area" style="width:100%; height:300px;"></div>
        </div>
    </div>
</div> 


@endsection