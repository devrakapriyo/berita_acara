<div class="row">
	<div class="card">
		<div>
	      <ul class="tabs">
	      @if(Auth::user()->jab == "Customer Relation")
	        <li class="tab col s3"><a href="#test1">Chatt Customer Service</a></li>
	      @elseif(Auth::user()->jab == "Terminal Operation")
	        <li class="tab col s3"><a href="#test2">Chatt Terminal Operasi</a></li>
	      @elseif(Auth::user()->jab == "Data dan Informasi")
	        <li class="tab col s3"><a href="#test3">Chatt Sistem Informasi</a></li>
	      @elseif(Auth::user()->jab == "Finance")
	        <li class="tab col s3"><a href="#test4">Chatt Finance</a></li>
	      </ul>
	      @elseif(Auth::user()->jab == "Admin")
	      	<li class="tab col s3"><a href="#test1">CS</a></li>
			<li class="tab col s3"><a href="#test2">TO</a></li>
			<li class="tab col s3"><a href="#test3">SI</a></li>
			<li class="tab col s3"><a href="#test4">FI</a></li>
	      @endif
	    </div>
	    @if(Auth::user()->jab == "Customer Relation")
	    <div class="card-content scroll" style="height:100px; overflow: auto;">
	    	@forelse($datacs as $datacs)
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
	    @elseif(Auth::user()->jab == "Terminal Operation")
	    <div class="card-content scroll" style="height:150px; overflow: auto;">
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
	    @elseif(Auth::user()->jab == "Data dan Informasi")
	    <div class="card-content scroll" style="height:100px; overflow: auto;">
	    	@forelse($datasi as $datasi)
	    	<table>
	    		<tr>
	    			<td>
	    				<div class="chip">
						    <img src="{{URL::asset('image')}}/{{$datasi->foto}}" alt="Contact Person">
						    {{$datasi->chatt}}
						</div>
	    			</td>
	    		</tr>
	    	</table>
			@empty
			<center><span class="grey-text text-darken-2">Tidak ada aktivitas chatt</span></center>
			@endforelse
	    </div>
	    @elseif(Auth::user()->jab == "Finance")
	    <div class="card-content scroll" style="height:100px; overflow: auto;">
	    	@forelse($datafi as $datafi)
	    	<table>
	    		<tr>
	    			<td>
	    				<div class="chip">
						    <img src="{{URL::asset('image')}}/{{$datafi->foto}}" alt="Contact Person">
						    {{$datafi->chatt}}
						</div>
	    			</td>
	    		</tr>
	    	</table>
			@empty
			<center><span class="grey-text text-darken-2">Tidak ada aktivitas chatt</span></center>
			@endforelse
	    </div>
	    @elseif(Auth::user()->jab == "Admin")

	    @endif
	    <div class="card-action">
	    @if(Auth::user()->jab == "Customer Relation")
	    	<form method="post" action="chatt_cs">
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
	    @elseif(Auth::user()->jab == "Terminal Operation")
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
	    @elseif(Auth::user()->jab == "Data dan Informasi")
	    	<form method="post" action="chatt_si">
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
	    @elseif(Auth::user()->jab == "Finance")
	    	<form method="post" action="chatt_fi">
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
	    @elseif(Auth::user()->jab == "Admin")

	    @endif
	    </div>
	</div>
</div>