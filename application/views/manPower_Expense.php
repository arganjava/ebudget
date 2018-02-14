<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Qyt</th>
                  <th>expense_id</th>
                  <th>Id</th>
                </tr>
         <?php foreach(manPower_expenses as manPower_expense) {
                                               echo "<tr>";
                                               echo "<td>".manPower_expense->Id."</td>";
                                               echo "<td>".manPower_expense->Qyt."</td>";
                                               echo "<td>".manPower_expense->expense_id."</td>";
                                               echo "<tr>";
                                            }

         ?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</div>
<?php $this->view('footer'); ?>
