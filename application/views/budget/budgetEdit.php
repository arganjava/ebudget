<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Budget Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('budget/update');?>" method="post" >
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Budget Id</label>
                  <input required name="id" value="<?php echo $budget->id?>" class="form-control" id="inputEmail3" placeholder="Name" type="hidden">
                  <div class="col-sm-10">
                    <input required name="name" value="<?php echo $budget->budget_id?>" class="form-control" id="inputEmail3" placeholder="Budget Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Budget Name</label>
                  <input required name="id" value="<?php echo $budget->budget_name?>" class="form-control" id="inputEmail3" placeholder="Name" type="hidden">
                  <div class="col-sm-10">
                    <input required name="name" value="<?php echo $budget->budget_name?>" class="form-control" id="inputEmail3" placeholder="Budget Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Invoice Number</label>

                  <div class="col-sm-10">
                    <textarea name="address" class="form-control"><?php echo $budget->invoice_number?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Payment</label>

                  <div class="col-sm-10">
                    <textarea name="address" class="form-control"><?php echo $budget->payment?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Funding</label>

                  <div class="col-sm-10">
                    <textarea name="funding" class="form-control"><?php echo $budget->funding?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Note</label>

                  <div class="col-sm-10">
                    <input name="note" class="form-control" id="inputPassword3" placeholder="Unit" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Project Id</label>

                  <div class="col-sm-10">
                    <input name="project_id" class="form-control" id="inputPassword3" placeholder="project_id" type="number">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Payment Date</label>

                  <div class="col-sm-10">
                    <input name="payment_date" class="form-control" id="inputPassword3" placeholder="payment_date" type="date">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('budget');?>" class="btn btn-danger"> Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
<?php $this->view('footer'); ?>
