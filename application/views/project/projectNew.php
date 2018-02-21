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
            <form class="form-horizontal" action="<?php echo site_url('project/save');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Project Name</label>

                  <div class="col-sm-4">
                    <input required name="project_name" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>

                 <!--   <label for="inputEmail3" class="col-sm-2 control-label">Project Id</label>

                  <div class="col-sm-4">
                    <input required name="name" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div> -->
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Customer</label>
                  <div class="col-sm-4">
                  <select id="selectCustomer" name="customer" class="form-control select2 select2-hidden-accessible">
                  <option required>select name</option>
                  <?php  
                  $customers = $this->session->userdata('customers');
                  foreach( $customers as $customer) {
                    echo "<option value=".$customer->id.">".$customer->name."</option>";
                  }
                  ?>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Term</label>

                  <div class="col-sm-4">
                    <input name="term" class="form-control"  placeholder="Term" type="number">
                  </div>

                  <!--  <label  class="col-sm-2 control-label">Date</label>

                  <div class="col-sm-4">
                    <input name="unit" class="form-control"  placeholder="Unit" type="text">
                  </div> -->
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Est Duration</label>

                  <div class="col-sm-4">
                    <input name="est_duration" class="form-control"  placeholder="Est Duration Days" type="number">
                  </div>
                 <!--  <label  class="col-sm-2 control-label">Pic</label>

                  <div class="col-sm-4">
                    <input name="unit" class="form-control"  placeholder="Unit" type="text">
                  </div> -->
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">List of Materials</label>
                </div>
              </div>
              <div class="box-body table-responsive no-padding ">
              <table class="table table-hover" id="tableMaterial">
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
                  <tr><td colspan="5" style="text-align:center">Subtotal</td><td><p id="subtotalMaterial"></p></td></tr>
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
              <table class="table table-hover" id="tableManpower">
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
                  <td><button type="button" id="saveRowManpower" class="btn btn-success pull-left">Save</button>
                   <span> <button type="button" id="cancelRowManpower" class="btn btn-danger pull-left">Cancel</button> </span>
                  </td>
                  </tr>
                  <tr><td colspan="5" style="text-align:center">Subtotal</td><td><p id="subtotalManpower"></p></td></tr>
              </tbody>
              </table>

              <div class="form-group">
              <label  class="col-sm-2 control-label">Est Budget</label>
                  <div class="col-sm-4">
                  </div>
                  <label  class="col-sm-2 control-label"></label>
                  <div class="col-sm-3">
                    <input name="est_budget" class="form-control"  placeholder="Est Budget" readonly>
                  </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Propose Value</label>
                  <div class="col-sm-4">
                  </div>
                  <label  class="col-sm-2 control-label"></label>
                  <div class="col-sm-3">
                    <input name="propose_value" class="form-control"  placeholder="Propose Value">
                  </div>
                </div>

                 <div class="form-group">
                <label  class="col-sm-2 control-label">Est. Profit</label>
                  <div class="col-sm-4">
                  </div>
                  <label  class="col-sm-2 control-label"></label>
                  <div class="col-sm-3">
                    <input name="est_profit" class="form-control"  placeholder="Est. Profit">
                  </div>
                </div>

                 <div class="form-group">
                <label  class="col-sm-2 control-label">Confirm</label>
                  <div class="col-sm-2">
                  <select id="selectConfirm" name="confirm" class="form-control select2 select2-hidden-accessible">
                  <option value="N">N</option>
                    <option value="Y">Y</option>
                  </select>
                  </div>
                </div>


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
      var materialListTable = [];
      var manpowerListTable = [];
      var countTotalMaterial = 0;
      var countTotalManpower = 0;            
    $(document).ready(function(){
      $('#rowInputMaterial').hide();
      $('#rowInputManpower').hide();
      var qtyMaterial = $('#qtyMaterial');
      var selectNameMaterial = $( "#selectNameMaterial");
      var qtyManpower = $('#qtyManpower');
      var selectNameManpower = $( "#selectNameManpower");
      var subtotalMaterial = $("#subtotalMaterial");
      var subtotalManpower = $("#subtotalManpower");

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
      var indexManpower = 1;
      $("#saveRowManpower").click(function(params) {
        var param = "?id="+selectNameManpower.val()+"&qty="+qtyManpower.val();
        var siteUrl = "<?php echo site_url('project/addrowmanpower_post');?>"
        $.ajax({
        url: siteUrl+param,
        type: 'POST',
        data: JSON.stringify(manpowerListTable),
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
         var jsonData = JSON.parse(response)
          if(jsonData.error){
            alert(jsonData.error);
          }else{
            manpowerListTable.push(jsonData);
            var newrow = "<tr><td>"+indexManpower+"</td><td>"+jsonData.name+"</td><td>"+jsonData.qty+"</td><td>"+jsonData.est_price+"</td><td>"+jsonData.est_cost+"</td><td><input onClick='$(this).parent().parent().remove();removeManpowerRow("+jsonData.id+");$(subtotalManpower).text(countTotalManpower -= "+jsonData.est_cost+");' type='button' value='Delete'></td></tr>";
            $("#tableManpower tbody").find('tr:last').prev().after(newrow);
            $('#addRowManpower').show();
            $('#rowInputManpower').hide();
            countTotalManpower += jsonData.est_cost;
            subtotalManpower.text(countTotalManpower);
            indexManpower++;
          }
        },
        error: function (e) {
            console.error(e)
        }
    });
      })

      var indexMaterial = 1;
      $("#saveRowMaterial").click(function(params) {
        var param = "?id="+selectNameMaterial.val()+"&qty="+qtyMaterial.val();
        var siteUrl = "<?php echo site_url('project/addrowmaterial_post');?>"
        $.ajax({
        url: siteUrl+param,
        type: 'POST',
        data: JSON.stringify(materialListTable),
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
         var jsonData = JSON.parse(response)
          if(jsonData.error){
            alert(jsonData.error);
          }else{
            materialListTable.push(jsonData);
            var newrow = "<tr><td>"+indexMaterial+"</td><td>"+jsonData.name+"</td><td>"+jsonData.qty+"</td><td>"+jsonData.est_price+"</td><td>"+jsonData.est_cost+"</td><td><input class='clickRowMaterial' onClick='$(this).parent().parent().remove();removeMaterialRow("+jsonData.id+");$(subtotalMaterial).text((countTotalMaterial -= "+jsonData.est_cost+"));' type='button' value='Delete'></td></tr>";
            $("#tableMaterial tbody").find('tr:last').prev().after(newrow);
            $('#addRowMaterial').show();
            $('#rowInputMaterial').hide();
            countTotalMaterial += jsonData.est_cost;
            subtotalMaterial.text(countTotalMaterial);
            indexMaterial++;
          }
        },
        error: function (e) {
            console.error(e)
        }
    });
      })      


    });

function removeMaterialRow(id){
  var newMaterials = [];
  for(var i = 0; i < materialListTable.length; i++){
    var material = materialListTable[i];
    if(material.id != id){
      newMaterials.push(material);
    }
  }
  materialListTable = newMaterials;
}

function removeManpowerRow(id){
  var newMaterials = [];
  for(var i = 0; i < manpowerListTable.length; i++){
    var material = manpowerListTable[i];
    if(material.id != id){
      newMaterials.push(material);
    }
  }
  manpowerListTable = newMaterials;
}
</script>