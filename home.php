<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Withdrawal Request
            <small>Listing</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><?php echo getController(TRUE); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Plan</th>
                                    <th>Request From</th>
                                    <th>Request Amount</th>
                                    
                                    <th>Date</th>
                                    <th>Mode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result): ?>
                                    <?php
                                    foreach ($result as $each):
                                        ?>
                                        <tr>
                                            <td><?php echo $each->username; ?></td>
                                            <td><?php echo $each->p_name; ?></td>
                                            <td><?php 
                                            if($each->get_amount_from_id==1){
                                                echo 'Ads';
                                            }elseif($each->get_amount_from_id==2){
                                                echo 'Binary';
                                            }elseif($each->get_amount_from_id==3){
                                                echo 'Sponsor';
                                            }
                                            ?></td>
                                            <td><?php echo $each->withdrawalrequest_amount; ?></td>
                                            <td><?php echo date("m-d-Y", strtotime($each->to_date)); ?></td>
                                            <td>


                                                <?php
//                                                echo ($each->withdrawalrequest_status == 1) ? ('<a href="javascript:void(0)" id="paymentactivate_' . $each->withdrawalrequest_id . '" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up">Paid</i></a>') : ('<a href="javascript:void(0)" id="paymentactivate_' . $each->withdrawalrequest_id . '" class="btn btn-xs btn-danger"><i class="fa fa-thumbs-down">Un Paid</i></a>');
                                                if ($each->withdrawalrequest_status == 1) {
                                                    echo '<a href="#"  class="btn btn-xs btn-danger"><i class="fa fa-thumbs-down">Pending</i></a>';
                                                } elseif ($each->withdrawalrequest_status == 2) {
                                                    echo '<a href="#"  class="btn btn-xs btn-success"><i class="fa fa-thumbs-up">Transfered</i></a>';
                                                } elseif ($each->withdrawalrequest_status == 3) {
                                                    echo '<a href="#" class="btn btn-xs btn-warning"><i class="fa fa-spinner">Processing</i></a>';
                                                }
                                                ?>

                                            </td>

                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-cogs"> </i> 
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="<?php echo site_url('admin/withdrawalrequest/transaction_Pending'), '?id=' . $each->withdrawalrequest_id; ?>" class="" ><i class="fa fa-thumbs-down"></i> Pending </a></li>
                                                        <li><a href="<?php echo site_url('admin/withdrawalrequest/updatewithdrawalrequest_status_process'), '?id=' . $each->withdrawalrequest_id; ?>" class="" ><i class="fa fa-spinner"></i> Processing </a></li>
                                                        <li><a href="<?php echo site_url('admin/withdrawalrequest/updatewithdrawalrequest_status_transfer'), '?id=' . $each->withdrawalrequest_id; ?>" class="" ><i class="fa fa-thumbs-up"></i> Transferred </a></li>
                                                        <li><a href="<?php echo site_url('admin/withdrawalrequest/transaction_Pending'), '?id=' . $each->withdrawalrequest_id; ?>" class="" ><i class="fa fa-close"></i> Cancel </a></li>

                                                    </ul> 
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>User</th>
                                    <th>Plan</th>
                                    <th>Request From</th>
                                    <th>Request Amount</th>
                                    <th>Date</th>
                                    <th>Mode</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
