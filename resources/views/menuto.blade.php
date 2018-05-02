<div class="row">
    <div class="card grey lighten-4">
        <div>
            <ul class="tabs">
                <li class="tab col s3"><a href="#test1">Chatt Terminal Operasi</a></li>
            </ul>
        </div>
        <div class="card-content scroll" style="height:240px; overflow: auto;">
            @forelse($datato as $datato)
            <table>
                <tr>
                    <td>
                    <div class="card">
                        <div class="card-content">
                            <div class="chip">
                                <img src="{{URL::asset('image')}}/{{$datato->foto}}" alt="Contact Person">
                                {{$datato->nama}} | <span class="blue-text">{{$datato->date}}</span>
                            </div>
                        </div>
                        <div class="card-action">
                            <span>{{$datato->chatt}}</span>
                        </div>
                    </div>
                    </td>
                </tr>
            </table>
            @empty
            <center><span class="grey-text text-darken-2">Tidak ada aktivitas chatt</span></center>
            @endforelse
        </div>
        <div class="card-action">
            <form method="post" action="chatt_to">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col s12 m8 l9">
                    <input placeholder="Masukan chatt" type="text" name="chatt">
                </div>
                <div class="col s12 m4 l3">
                    <button class="btn-floating btn-small waves-effect waves-light green" onclick="Materialize.toast('Chatt tersimpan', 4000)" type="submit" name="action">
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>