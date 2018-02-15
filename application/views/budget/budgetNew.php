<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Budget Create Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('budget/save');?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Budget id</label>

                  <div class="col-sm-10">
                    <input required name="budget_id" class="form-control" id="inputEmail3" placeholder="Budget id" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputBudget_Name3" class="col-sm-2 control-label">Budget name</label>

                  <div class="col-sm-10">
                    <input name="budget_name" class="form-control" id="inputPassword3" placeholder="Budget name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Invoice Number</label>

                  <div class="col-sm-10">
                    <input name="invoice_number" class="form-control" id="inputPassword3" placeholder="Invoice Number" type="number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Payment</label>

                  <div class="col-sm-10">
                    <input name="payment" class="form-control" id="inputPassword3" placeholder="Payment" type="text">
                  </div>
                </div>


                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Project Id</label>

                    <div class="col-sm-10">
                      <input name="project id" class="form-control" id="inputPassword3" placeholder="Project Id" type="number">
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="inputPayment_Date3" class="col-sm-2 control-label">Payment Date</label>

                      <div class="col-sm-10">
                        <input name="payment date" class="form-control" id="inputPassword3" placeholder="Payment Date" type="date">
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Funding</label>

                        <div class="col-sm-10">
                          <input name="funding" class="form-control" id="inputPassword3" placeholder="Funding" type="text">
                        </div>
                    </div>


                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Note</label>

                        <div class="col-sm-10">
                          <textarea name="note" class="form-control" id="inputPassword3" placeholder="Note" type="text"></textarea>
                        </div>
                          </div>


                          <!-- /.box-body -->
                            <div class="box-footer">
                              <a href="<?php echo site_url('material');?>" class="btn btn-danger"> Cancel</a>
                              <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                            <!-- /.box-footer -->
                </div>
                </div>
              </div>
              </div>
              </div>
              </form>
            </div>
</div>
<?php $this->view('footer'); ?>
