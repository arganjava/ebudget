<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Project Create Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('material/save');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Project Name</label>

                  <div class="col-sm-4">
                    <input required name="name" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>

                   <label for="inputEmail3" class="col-sm-2 control-label">Project Id</label>

                  <div class="col-sm-4">
                    <input required name="name" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Customer</label>

                  <div class="col-sm-4">
                    <input name="buying_price" class="form-control"  placeholder="Buying Price" type="number">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Term</label>

                  <div class="col-sm-4">
                    <input name="unit" class="form-control"  placeholder="Unit" type="text">
                  </div>

                   <label  class="col-sm-2 control-label">Date</label>

                  <div class="col-sm-4">
                    <input name="unit" class="form-control"  placeholder="Unit" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Est Duration</label>

                  <div class="col-sm-4">
                    <input name="type" class="form-control"  placeholder="Type" type="text">
                  </div>
                  <label  class="col-sm-2 control-label">Pic</label>

                  <div class="col-sm-4">
                    <input name="unit" class="form-control"  placeholder="Unit" type="text">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">List of Materials</label>
                </div>
                Welcome <?php echo $this->session->userdata('materials')[0]->id ?> 
                Welcome <?php echo $this->session->userdata('manpowers')[0]->id ?> 
              </div>
              <div class="box-body table-responsive no-padding ">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Qty</th>
                  <th>Est. Price</th>
                  <th>Est Cost</th>
                  <th></th>
                  <tr id="rowInputMaterial">
                  <form class="form-horizontal" id="formMaterial" action="<?php echo site_url('project/addRowMaterial');?>" method="post" >
                  <td></td>
                  <td>
                  <select id="selectNameMaterial" class="form-control select2 select2-hidden-accessible">
                  <option>select name</option>
                  <?php  
                  $materials = $this->session->userdata('materials');
                  foreach( $materials as $material) {
                    echo "<option value=".$material->id.">".$material->name."</option>";
                  }
                  ?>
                  </select>
                  </td>
                  <td>
                    <input id="qtyMaterial" class="form-control"  placeholder="qty" type="text">
                  </td>
                  <td><button type="button" id="saveRowMaterial" class="btn btn-success pull-left">Save</button> 
                  <span> <button id="cancelRowMaterial" type="button" class="btn btn-danger pull-left">Cancel</button> </span>
                  </td>
                  </form>
                  </tr>
              </tbody>
              </table>
              <div class="box-footer">
                <button type="button" id="addRowMaterial" class="btn btn-info pull-left">Add Row</button>
              </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">List of Manpower</label>
                </div>
              </div>
              <div class="box-body table-responsive no-padding ">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Qty</th>
                  <th>Est. Price</th>
                  <th>Est Cost</th>
                  <th></th>
                  <tr id="rowInputManpower">
                  <td></td>
                  <td>
                  <select id="selectNameManpower" class="form-control select2 select2-hidden-accessible">
                  <option>select name</option>
                  <?php  
                  $manpowers = $this->session->userdata('manpowers');
                  foreach( $manpowers as $manpower) {
                    echo "<option value=".$manpower->id.">".$manpower->name."</option>";
                  }
                  ?>
                  </select>
                  </td>
                  <td>
                    <input id="qtyManpower" class="form-control"  placeholder="Unit" type="text">
                  </td>
                  <td><button type="button" class="btn btn-success pull-left">Save</button>
                   <span> <button type="button" id="cancelRowManpower" class="btn btn-danger pull-left">Cancel</button> </span>
                  </td>
                  </tr>
              </tbody>
              </table>
              <div class="box-footer">
                <button type="button" id="addRowManpower" class="btn btn-info pull-left">Add Row</button>
              </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('material');?>" class="btn btn-danger"> Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>


<?php $this->view('footer'); ?>
<script>

    $(document).ready(function(){
      $('#rowInputMaterial').hide();
      $('#rowInputManpower').hide();
      var qtyMaterial = $('#qtyMaterial');
      var selectNameMaterial = $( "#selectNameMaterial option:selected");
      var qtyManpower = $('#qtyManpower');
      var selectNameManpower = $( "#selectNameManpower option:selected");

      $("#addRowMaterial").click(function(params) {
        $('#rowInputMaterial').show();
        $('#addRowMaterial').hide();
      })
      
       $("#addRowManpower").click(function(params) {
        $('#rowInputManpower').show();
        $('#addRowManpower').hide();
      })

      $("#cancelRowManpower").click(function(params) {
        $('#rowInputManpower').hide();
        $('#addRowManpower').show();
      })

      $("#cancelRowMaterial").click(function(params) {
        $('#rowInputMaterial').hide();
        $('#addRowMaterial').show();
      })

      $("#saveRowMaterial").click(function(params) {
        $('#addRowMaterial').show();
      })

    });
</script>