<nav class="navbar navbar-rose">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#pablo">MiMi's</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
			<a href="#pablo">Home</a>
		</li>
        <li>
			<a href="{{url('member')}}">Member</a>
		</li>
		 <li class="active">
			<a href="{{url('barang')}}">Barang</a>
		</li>
        <li>
			<a href="{{url('transaksi')}}">Transaksi</a>
		</li>
      </ul>
      <form class="navbar-form navbar-right" role="search" action="{{url('search')}}" method="get">
        <div class="form-group form-white">
          <input type="text" class="form-control" placeholder="Search" name="query">
        </div>
        <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i>S</i></button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--        end rose navbar -->