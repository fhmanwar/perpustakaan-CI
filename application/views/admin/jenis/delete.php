<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?php echo $jenis->id_jenis ?>" title="Delete Jenis">
  <i class="fa fa-trash-o"></i>
</button>
<div class="modal fade" id="Delete<?php echo $jenis->id_jenis ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Data Jenis</h4>
            </div>
            <div class="modal-body">
        			<p class="alert alert-warning">Are you sure want to delete this data?</p>
            </div>
            <div class="modal-footer">
              <a href="<?php echo base_url('admin/jenis/delete/'.$jenis->id_jenis) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Yes. Delete this Data</a>
              <a href="<?php echo base_url('admin/jenis/edit/'.$jenis->id_jenis) ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit this Data</a>
              <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
            </div>
        </div>
    </div>
</div>
