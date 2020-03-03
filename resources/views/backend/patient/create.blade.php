@extends('backend')

@section('content')
<div class="container">
<form class="col-lg-11" method="post" action="{{route('patient.store')}}" enctype="multipart/form-data">
    <div class="modal fade" id="apstMoleculeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-body">                          
                    <div class="form-group">
                        <label class="control-label col-xs-3">Name</label>
                        <div class="controls col-xs-9">
                            <input type="text"  placeholder="Enter Name">
                            &nbsp;<span class="glyphicon glyphicon-info-sign" data-toggle="popover" data-placement="right" title="Help info"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Place</label>
                        <div class="controls col-xs-9">
                            <input type="text"  placeholder="Enter Place">
                            &nbsp;<span class="glyphicon glyphicon-info-sign" data-toggle="popover" data-placement="right" title="Help info"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Cost</label>
                        <div class="controls col-xs-9 input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text"  placeholder="0.00">
                            &nbsp;<span class="glyphicon glyphicon-info-sign" data-toggle="popover" data-placement="right" title="Help info" ></span>
                        </div>
                    </div>                      
                </div>  modal-body

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form> 
</div>

<?php echo "HELLO"; ?>
@endsection