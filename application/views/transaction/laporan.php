<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laporan</title>
    <link rel="stylesheet" href="<?php echo base_url('include/assets/css/laporan.css') ?>" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo base_url('assets/images/logos/logo.png') ?>">
      </div>
      <h1>LAPORAN</h1>
    </header>
    <main>
      <?php
     $this->db->join('user', 'orders.id_user = user.id_user','left');
     $this->db->where('month(date)', date('m'));
    $orders=$this->db->get('orders')->result_array()
    ?>
      <table>
        <thead>
          <tr>
            <th class="service">INVOICE ID</th>
            <th class="desc">CUSTOMER</th>
            <th class="desc">STATUS</th>
            <th class="desc">TANGGAL</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($orders as $o):?>
          <tr>
            <td class="service"><?= $o['id_order']?></td>
            <td class="desc"><?= $o['fullname']?></td>
            <td class="desc"><?= $o['status']?></td>
            <td class="desc"><?= $o['date']?></td>
            <?php endforeach?>
          </tr>
        </tbody>
      </table>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
  <script type="text/javascript">
        window.print();
    </script>
</html>