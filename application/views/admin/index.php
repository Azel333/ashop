      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Dashboard</h1>
              </div>
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                          <div class="card-icon bg-primary">
                              <i class="far fa-user"></i>
                          </div>
                          <div class="card-wrap">
                              <div class="card-header">
                                  <h4>Users</h4>
                              </div>
                              <div class="card-body">
                                  <?=$user_count?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                          <div class="card-icon bg-danger">
                              <i class="fas fa-box"></i>
                          </div>
                          <div class="card-wrap">
                              <div class="card-header">
                                  <h4>Products</h4>
                              </div>
                              <div class="card-body">
                                  <?=$p_count?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                          <div class="card-icon bg-warning">
                              <i class="fas fa-exchange-alt"></i>
                          </div>
                          <div class="card-wrap">
                              <div class="card-header">
                                  <h4>Transaction</h4>
                              </div>
                              <div class="card-body">
                                  <?=$t_count?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                          <div class="card-icon bg-success">
                              <i class="fas fa-circle"></i>
                          </div>
                          <div class="card-wrap">
                              <div class="card-header">
                                  <h4>Payment Process</h4>
                              </div>
                              <div class="card-body">
                                  <?=$pay_count?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4>Invoices</h4>
                              <div class="card-header-action">
                                  <a href="<?= base_url('transaction/cetak')?>" class="btn btn-primary">Cetak Laporan Bulan ini</a>
                                  <a href="<?= base_url('transaction')?>" class="btn btn-danger">View More <i
                                  class="fas fa-chevron-right"></i></a>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <div class="table-responsive table-invoice">
                                  <table class="table table-striped">
                                      <?php $this->db->limit(5);
                                       $this->db->join('user', 'orders.id_user = user.id_user','left');
                                      $orders=$this->db->get('orders')->result_array()
                                      ?>
                                      <tr>
                                          <th>Invoice ID</th>
                                          <th>Customer</th>
                                          <th>Status</th>
                                          <th>Due Date</th>
                                          <th>Action</th>
                                      </tr>

                                      <?php foreach($orders as $o):?>
                                      <tr>
                                          <td><a href="#"><?= $o['id_order']?></a></td>
                                          <td class="font-weight-600"><?= $o['fullname']?></td>
                                          <td>
                                              <div class="badge badge-warning"><?= $o['status']?></div>
                                          </td>
                                          <td><?= $o['date']?></td>
                                          <td>
                                              <a href="<?= base_url('transaction/detail_order/'.$o['id_order'])?>" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                      <?php endforeach?>

                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


          </section>
      </div>