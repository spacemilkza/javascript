<article>
  <header>
    <h5>MY PAYMENTS</h5>
    <p>
      Keep your account <span class='badge badge-success'>published</span>
      so your <u>stores</u>, <u>branches</u> and <u>catalogs</u> can be
      visible your customers and they can place <u>orders</u>.
    </p>
    <?php

      $accStatus = ($nextPayment > now()) ? True: False;

      $published = ( $accStatus ) ? ['success', '', 'checkmark'] : ['danger', 'not ', 'alert'];
    ?>
    <p>
      ACCOUNT STATUS:
      <span class='badge badge-<?php echo $published[0]; ?>'>
        <?php echo $published[1]?>published
      </span>
      <small class='text-danger'>
        <?php

          $err_report = ($accStatus) ? ' until ': ' since ';
          $dateString = '%Y %M %d';

          if($nextPayment != 0) echo $err_report.mdate($dateString, $nextPayment);
        ?>
      </small>
    </p>
  </header><br>
  <nav>
    <ul class='nav nav-tabs' id='myTab' role='tablist'>
      <li class='nav-item'>
        <a class='nav-link text-dark active' id='paymentMethodsTab' href='#paymentMethods'
          data-toggle='tab' role='tab' aria-controls='paymentMethods' aria-selected='false'>
          <ion-icon name="wallet" class="align-middle"></ion-icon>
          <small id='smallOne'>PAYMENT METHODS</small>
        </a>
      </li>
      <li class='nav-item'>
        <a class='nav-link text-dark' id='storeDetailsTab' href='#storeDetails'
          data-toggle='tab' role='tab' aria-controls='storeDetails' aria-selected='false'>
          <ion-icon name="information-circle" class="align-middle"></ion-icon>
          <small id='smallOne'>PAYMENT DETAILS</small>
        </a>
      </li>
    </ul>
  </nav><br><br>
  <section class='tab-content' id='myTabContent'>
    <section class='tab-pane show active fade' id='paymentMethods'
      role='tabpanel' aria-labelledby='paymentMethodsTab'>
      <div class='alert alert-info alert-dismissible fade show border-info bg-info text-white' role='alert'>
        <h5 class='text-uppercase'>
          <ion-icon name='information-circle' size='small' class='align-middle'></ion-icon>
          how it works
        </h5>
        <p>
          <?php

            echo "Use the banking details below to pay for your account.
            Once it reflects on our side, your account will be activated immediately.
            For more info, you can contact us on
            <ion-icon name='call' size='small' class='align-middle'></ion-icon>
            <span>065 871 2480</span> or
            <ion-icon name='mail' size='small' class='align-middle'></ion-icon>
            ".safe_mailto('payments@spacemilk.co.za', 'payments@spacemilk.co.za', ['class' => 'text-white']);
          ?>

        </p>
        <button type='button' class='close' data-dismiss='alert' aria-label='close'>
          <ion-icon name='close-circle' class='align-middle'></ion-icon>
        </button>
      </div><br>

      <section class='card border-dark'>
        <header class='card-header bg-dark text-white'>
          <ion-icon name="heart" class="align-middle"></ion-icon>
          OUR BANKING DETAILS
        </header>
        <table class='table'>

            <tfoot>
              <tr>
                <th>Business Account Holder:</th><td>Spacemilk (PTY) Ltd</td>
              </tr>
              <tr>
                <th>Bank:</th><td>Standard Bank</td>
              </tr>
              <tr><th>Account Number:</th><td>1015 2628 272</td></tr>
              <tr>
                <th>Reference: </th>
                <td class='text-danger'>
                  <?php echo $this->session->userdata('user')['username']; ?>
                </td>
              </tr>
              <tr>
                <th>Outstanding Balance:</th>
                <td>
                  R<?php
                    $lastAmountPaid =
                      ($this->session->userdata('user')['published'][1] > now()) ? $lastAmountPaid: 0;
                    $outstandingBalance = $totalAmount - $lastAmountPaid;
                    echo ($outstandingBalance > 0) ? $outstandingBalance : 0 ;
                   ?>
                </td>
              </tr>
            </tfoot>
          </table>
      </section>
    </section>
    <section class='tab-pane fade' id='storeDetails'
      role='tabpanel' aria-labelledby='storeDetailsTab'>
      <section>

        <?php

        if(count($stores) > 0){

          foreach($stores as $store){

            echo "<section class='card border-dark'>
            <header class='card-header bg-dark text-white'>
              <span class='text-uppercase'>
              <ion-icon name='storefront' class='align-middle'></ion-icon>
              <a href='".site_url($store['username'])."' class='text-white'>
                ".$store['name']."
              </a>
              </span>
              <span class='float-right'>
                <ion-icon name='wallet' class='align-middle'></ion-icon>
                Total: R".$store['amount']."
              </span>
            </header>
            <table class='table'>
                <tbody>
                  <tr>
                    <td>
                      <a href='".site_url($store['username'])."' class='text-dark'>
                        <img src='".base_url('assets/img/stores/'.$store['logo'])."'
                          class='rounded-circle' style='width: 70px'>
                      </a>
                    </td>
                    <td>
                      <ul class='list-unstyled small'>
                        <li>Basic Advertising: <strong>R".$store['basicAd']."</strong></li>
                        <li>Homepage Advertising: <strong>R".$store['promoteOnHomepage']."</strong></li>
                        <li>Search Results Advertising: <strong>R".$store['promoteOnSearchResults']."</strong></li>
                      </ul>
                    </td>
                    <td><p><strong>R".$store['storeTotalAmount']."</strong></p></td>
                  </tr>
                  <tr>
                    <th colspan='3'>
                    <ion-icon name='bag-handle' class='align-middle'></ion-icon>
                    Store Catalog Items (".count($store['catalog']).")
                    </th>
                  </tr>
                  ";

                  foreach( $store['catalog'] as $item ){

                  echo "
                  <tr>
                    <td>
                      <h6 class='text-uppercase'>
                        <a href='".site_url($item['id'])."' class='text-dark'>
                          ".$item['name']."
                        </a>
                      </h6>
                    </td>
                    <td>
                      <ul class='list-unstyled small'>
                        <li>Basic Advertising: <strong>R".$item['basicAd']."</strong></li>
                        <li>Homepage Advertising: <strong>R".$item['promoteOnHomepage']."</strong></li>
                        <li>Search Results Advertising: <strong>R".$store['promoteOnSearchResults']."</strong></li>
                      </ul>
                    </td>
                    <td><strong>R".$item['amount']."</strong></td>
                  </tr>
                  ";
                  }

                  echo "
                  <tr><th colspan='3'>
                    <ion-icon name='location' class='align-middle'></ion-icon>
                    Store Branches (".count($store['branches']).")
                  </th></tr>
                  ";


                  foreach($store['branches'] as $branch){

                    echo "
                    <tr>
                      <td colspan='2'>
                        <h6 class='text-uppercase'>
                          <a href='".site_url($branch['id'])."' class='text-dark'>
                            ".$branch['address']."
                          </a>
                        </h6>
                      </td>
                      <td><strong>R".$branch['basicAd']."</strong></td>
                    </tr>
                    ";
                  }

                  echo "
                </tbody>
              </table>
          </section>

            ";
          }
        }
        else {

          echo "
            <section>
              <div class='jumbotron text-center bg-white'>
                <div class='row'>
                  <div class='col'>
                    <img class='img-fluid'
                    src='".base_url('assets/img/undraw_business_shop_qw5t.png')."'>
                  </div>
                </div>
                <h5 class='display-4'>NO STORES CREATED</h5>
                <p class='lead'>All the payments of your stores will be listed here</p>
              </div>
            </section>
            ";
        }

        ?>
      </section>
    </section>
  </section>
</article>
