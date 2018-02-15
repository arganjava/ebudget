<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('project/insert');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">customer id</label>

                  <div class="col-sm-10">
                    <input required name="project_name" class="form-control" id="inputEmail3" placeholder="Project Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Project_name</label>

                  <div class="col-sm-10">
                    <!-- <input name="address" class="form-control" id="inputPassword3" placeholder="Buying Price" type="text"> -->
                    <textarea name="project_name" class="form-control" id="inputPassword3" placeholder="project name" type="text"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Propose value</label>

                  <div class="col-sm-10">
                    <!-- <input name="address" class="form-control" id="inputPassword3" placeholder="Buying Price" type="text"> -->
                    <textarea name="propose_value" class="form-control" id="inputPassword3" placeholder="propose_value" type="text"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Propose_value</label>

                  <div class="col-sm-10">
                    <!-- <input name="address" class="form-control" id="inputPassword3" placeholder="Buying Price" type="text"> -->
                    <textarea name="propose_value" class="form-control" id="inputPassword3" placeholder="propose value" type="text"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Est.profit</label>

                  <div class="col-sm-10">
                    <!-- <input name="address" class="form-control" id="inputPassword3" placeholder="Buying Price" type="text"> -->
                    <textarea name="est_profit" class="form-control" id="inputPassword3" placeholder="Term" type="est. profit"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Est. Duration</label>

                  <div class="col-sm-10">
                    <input name="est_duration" class="form-control" id="inputPassword3" placeholder="Est. Duration" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">term</label>

                  <div class="col-sm-10">
                    <input name="term" class="form-control" id="inputPassword3" placeholder="term" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Customer</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="customer_id">
                      <option>Pilih Customer</option>
                      <?php foreach ($customers as $customer) { ?>
                        <option><?= $customer->id.' - '.$customer->name ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('project');?>" class="btn btn-danger"> Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
<?php $this->view('footer'); ?>
