
<ul class="collection">
  <li class="collection-item avatar">
      <img src="{{URL::asset('image')}}/{{Auth::User()->foto}}" alt="" class="circle">
      <span class="font-nama blue-grey-text text-darken-3"><a href="{{URL::asset('detailadmin')}}">{{Auth::User()->name}}</a></span>
      <p class="blue-text">Status jabatan {{Auth::user()->jab}} <br>
        <span class="green-text">
          <i class="material-icons right green-text">notifications</i>Online
        </span>
      </p>
    </li>
</ul>
<ul class="collapsible collection with-header" data-collapsible="accordion">
    <li class="collection-header white-text blue-grey darken-3"><h5>Menu<i class="material-icons left light-blue-text text-lighten-4">menu</i></h5></li>
        @if(Auth::user()->jab == 'Admin')
        <a href="{{URL::asset('dashboardadmin')}}" class="collection-item"><i class="material-icons right blue-text">dashboard</i>Dashboard Admin</a>
        <a href="{{URL::asset('admin')}}" class="collection-item"><i class="material-icons right green-text">input</i>Tambah admin</a>
        <a href="{{URL::asset('dataadmin')}}" class="collection-item"><i class="material-icons right light-blue-text text-darken-2">subject</i>Data admin</a>
        <!-- <a href="{{URL::asset('monitoringcs')}}" class="collection-item"><i class="material-icons right">note_add</i>Customer Service</a> -->
        <a href="{{URL::asset('datacs')}}" class="collection-item"><i class="material-icons right yellow-text text-darken-2">assignment</i>Data Customer Service</a>
        <!-- <a href="{{URL::asset('entryto')}}" class="collection-item"><i class="material-icons right">library_books</i>Terminal Opration</a> -->
        <a href="{{URL::asset('datato')}}" class="collection-item"><i class="material-icons right cyan-text">library_add</i>Buat Berita Acara</a>
        <!-- <a href="{{URL::asset('entrysi')}}" class="collection-item"><i class="material-icons right">description</i>Sistem Information</a> -->
        <a href="{{URL::asset('datasi')}}" class="collection-item"><i class="material-icons right orange-text text-darken-3">list</i>Data Sistem Information</a>
        <!-- <a href="{{URL::asset('entryfi')}}" class="collection-item"><i class="material-icons right">assessment</i>Finance</a> -->
        <a href="{{URL::asset('datafi')}}" class="collection-item"><i class="material-icons right purple-text text-darken-4">view_list</i>Data Finance</a>
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('hapusdata')}}" class="collection-item"><i class="material-icons right red-text">delete</i>Hapus data</a>
        <a href="{{URL::asset('truncate')}}" class="collection-item"><i class="material-icons right pink-text">clear</i>Kosongkan data table</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">https</i>Logout</a>
        @elseif(Auth::user()->jab == 'Customer Relation')
        <a href="{{URL::asset('dashboardcs')}}" class="collection-item"><i class="material-icons right blue-text">dashboard</i>Dashboard</a>
        <a href="{{URL::asset('monitoringcs')}}" class="collection-item"><i class="material-icons right yellow-text text-darken-3">note_add</i>Customer Service</a>
        <a href="{{URL::asset('datacs')}}" class="collection-item"><i class="material-icons right yellow-text text-darken-2">assignment</i>Data Customer Service</a>
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">https</i>Logout</a>
        @elseif(Auth::user()->jab == 'Terminal Operation')
        <a href="{{URL::asset('dashboardto')}}" class="collection-item"><i class="material-icons right blue-text">dashboard</i>Dashboard</a>
        <a href="{{URL::asset('entryto')}}" class="collection-item"><i class="material-icons right cyan-text darken-text-2">library_books</i>Terminal Opration</a>
        <a href="{{URL::asset('datato')}}" class="collection-item"><i class="material-icons right cyan-text">library_add</i>Buat Berita Acara</a>
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">https</i>Logout</a>
        @elseif(Auth::user()->jab == 'Data dan Informasi')
        <a href="{{URL::asset('dashboardsi')}}" class="collection-item"><i class="material-icons right blue-text">dashboard</i>Dashboard</a>
        <a href="{{URL::asset('entrysi')}}" class="collection-item"><i class="material-icons right orange-text text-darken-1">description</i>Sistem Information</a>
        <a href="{{URL::asset('datasi')}}" class="collection-item"><i class="material-icons right orange-text text-darken-3">list</i>Data Sistem Information</a>
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">https</i>Logout</a>
        @elseif(Auth::user()->jab == 'Finance')
        <a href="{{URL::asset('dashboardfi')}}" class="collection-item"><i class="material-icons right blue-text">dashboard</i>Dashboard</a>
        <a href="{{URL::asset('entryfi')}}" class="collection-item"><i class="material-icons right purple-text text-darken-1">assessment</i>Finance</a>
        <a href="{{URL::asset('datafi')}}" class="collection-item"><i class="material-icons right purple-text text-darken-4">view_list</i>Data Finance</a>
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">https</i>Logout</a>
        @else(Auth::user()->jab == 'User')
        <a href="{{URL::asset('monitoring')}}" class="collection-item"><i class="material-icons right deep-purple-text text-lighten-3">search</i>Monitoring</a>
        <a href="{{URL::asset('logout')}}" class="collection-item"><i class="material-icons right blue-grey-text text-darken-3">dashttpshboard</i>Logout</a>
        @endif
</ul>

