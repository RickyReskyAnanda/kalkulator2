<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Add Rule</h4>
</div>
<form class="form-horizontal form-bordered form-label-stripped" role="form" id="data-create">
    {{csrf_field()}}
    <div class="modal-body form">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Rule</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="rule" required placeholder="Add Rule"></textarea>
                    <span class="help-inline"> Inline help. </span>
                </div>
            </div>
            <div class="alert alert-warning">
                <strong>Warning !</strong> Please select rules before edit. 
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <button type="submit" class="btn green">Save changes</button>
    </div>
</form>

<script type="text/javascript">
    $('#data-create').on('submit',(function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
    
        $.ajax({
            type:'POST',
            url: "{{url('vendor/r/add')}}/rules/{{Request::segment(5)}}",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                $('#rulespage').html(response.page);
                $('#large').modal( 'hide' );
                // console.log(response);
            },
            error: function(err){
                console.log(data);
            }
        });
    }));
</script>
