<div class="row">
    <div class="col-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
      @elseif ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
      @elseif ($message = Session::get('danger'))
      <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
      @elseif ($message = Session::get('error'))
      <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
      @endif
    </div>
</div>