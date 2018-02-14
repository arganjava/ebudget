<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Create Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('customer/insert');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input required name="name" class="form-control" id="inputEmail3" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <!-- <input name="address" class="form-control" id="inputPassword3" placeholder="Buying Price" type="text"> -->
                    <textarea name="address" class="form-control" id="inputPassword3" placeholder="Address" type="text"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>

                  <div class="col-sm-10">
                    <input name="hp" class="form-control" id="inputPassword3" placeholder="Phone" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input name="email" class="form-control" id="inputPassword3" placeholder="Email" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Acc Bank</label>

                  <div class="col-sm-10">
                    <input name="acc_bank" class="form-control" id="inputPassword3" placeholder="Acc Bank" type="text">
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
