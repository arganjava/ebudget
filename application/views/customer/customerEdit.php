<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('customer/update');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <input required name="id" value="<?php echo $customer->id?>" class="form-control" id="inputEmail3" placeholder="Name" type="hidden">
                  <div class="col-sm-10">
                    <input required name="name" value="<?php echo $customer->name?>" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea name="address" class="form-control"><?php echo $customer->address?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Hp</label>

                  <div class="col-sm-10">
                    <input name="hp" value="<?php echo $customer->hp?>" class="form-control" id="inputPassword3" placeholder="Unit" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $customer->email?>" name="email" class="form-control" id="inputPassword3" placeholder="Type" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Acc Bank</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $customer->acc_bank?>" name="acc_bank" class="form-control" id="inputPassword3" placeholder="Type" type="text">
                  </div>
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
