<?php $this->view('header'); ?>
<?php $this->view('sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer</h3>

              <div class="input-group-btn">
                                   <a href="<?php echo site_url('customer/new');?>" class="btn btn-success"> <i class="fa fa-plus"></i> New</a>
                               </div>

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
                  <th>Id</th>
                  <th>name</th>
                  <th>address</th>
                  <th>hp</th>
                  <th>email</th>
                  <th>acc.bank</th>
                  <th>Action</th>
                </tr>
               <?php foreach($customers as $customer) {
                                                     echo "<tr>";
                                                     echo "<td>".$customer->id."</td>";
                                                     echo "<td>".$customer->name."</td>";
                                                     echo "<td>".$customer->address."</td>";
                                                     echo "<td>".$customer->hp."</td>";
                                                     echo "<td>".$customer->email."</td>";
                                                     echo "<td>".$customer->acc_bank."</td>";
                                                     echo "<td><a class='label label-primary' href = '".base_url()."customer/edit/"
                                                                       .$customer->id."'>Edit</a> ";
                                                                    echo "<a class='label label-danger' href = '".base_url()."customer/delete/"
                                                                       .$customer->id."'>Delete</a></td>";

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
