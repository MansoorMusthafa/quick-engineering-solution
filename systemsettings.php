<?php 
$page = 'systemsetting';
include 'header.php';

?>
    

      <div class="content-wrapper">
        <h3 class="main_heading">QESPL Weather Monitoring Application</h3>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-4 col-xs-6">
              <div class="card card_form">
                <h1
                  class="setting"
                  style="text-align: center; color: #e0ff00; cursor: pointer"
                >
                  Trouble Shoot
                </h1>
              </div>
            </div>

            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="card card_form">
                <h1
                  class="setting"
                  style="text-align: center; color: #e0ff00; cursor: pointer"
                >
                  Restart System
                </h1>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="card card_form">
                <h1
                  class="setting"
                  style="text-align: center; color: #e0ff00; cursor: pointer"
                >
                  Clear Data
                </h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="text-align: center">
              <div class="card card_form" style="height: 380px">
                <img class="loader" src="./dist/img/spinner.png" />

                <h1>We are Checking the system please wait...</h1>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php

   include 'footer.php';
   ?>