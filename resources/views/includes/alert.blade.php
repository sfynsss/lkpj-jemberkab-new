@if ($message = Session::get('success'))
<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>keg_2</div>
@elseif ($message = Session::get('warning'))
<div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>keg_2</div>
@elseif ($message = Session::get('danger'))
<div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>keg_2</div>
@endif