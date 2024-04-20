<?php
$page = 'setprofile';
include 'header.php';

?>
<style>
  .card_center {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .form-control {
    display: block;
    width: 100%;
    padding: 10px;
    font-weight: 400;
    line-height: 1.4rem;
    color: white;
    background-color: transparent;
    background-clip: padding-box;
    border: 2px solid #e0ff00;
    appearance: none;
    border-radius: 0.5rem;
  }

  .form-control:disabled,
  .form-control[readonly] {
    background-color: #fdf6e5 !important;
    opacity: 1;
    color: #fdf6e5;
  }

  .form-control:focus {
    box-shadow: none;
    border-color: lightblue;
  }

  .profile-button {
    background-color: #e0ff00;
    box-shadow: none;
    color: black;
  }

  .profile-button:hover {
    box-shadow: 0px 1px 13px #c4c5ff;
    color: #337ab7;
  }

  .btn:disabled,
  .btn.disabled,
  fieldset:disabled .btn {
    color: #fdf6e5 !important;
  }

  .additional {
    color: #344767 !important;
    font-weight: 600;
  }

  input[type="file"] {
    width: 200px;
    padding: 5px;
    background: #ffffff3d;
    color: #e0ff00;
    box-shadow: 1px;
    border-radius: 10px;
    border: 1px solid #e0ff00;
    text-shadow: 1px 1px black;
  }

  input[type="file"]::file-selector-button {
    border: none;
    background: none;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <h3 class="main_heading">QESPL Weather Monitoring Application</h3>

  <!-- Main content -->

  <!-- Main content -->
  <section class="content">
    <div class="col-sm-12">
      <div class="col-sm-9" style="">
        <div class="card card_form">
          <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="col-md-4 border-right">
                <div class="card_center col-md-12 d-flex flex-column align-items-center text-center py-5 mt-1" style="margin-top: 25px; margin-bottom: 10px">
                  <img src="./dist/img/p_1.jpg" style="
                            width: 110px;
                            border-radius: 50%;
                            border: 2px solid #e0ff00;
                          " />

                  <div class="col" style="margin-top: 20px">
                    <input type="file" name="my_image" id="file" />
                  </div>

                  <div class="col" style="margin-top: 20px">
                    <button class="save_cancel">Save</button>
                    <button class="cancel_btn">Cancel</button>
                  </div>
                </div>
              </div>
              <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                  <div class="row mt-6" style="margin-top: 20px">
                    <div class="col-md-6">
                      <label class="labels">UserName</label><input type="text" class="form-control" placeholder=" Name" />
                    </div>
                    <div class="col-md-6">
                      <label class="labels">Mobile Number</label><input type="number" class="form-control" placeholder="Mobile" />
                    </div>
                    <div class="col-md-12" style="padding-top: 10px">
                      <label class="labels">Address</label><textarea type="text" class="form-control" placeholder="Address" style="resize: none"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12" style="padding-top: 20px">
                    <div class="p-3 py-5">
                      <div class="row">
                        <div class="col-md-6">
                          <button class="update_btn col-md-12" type="submit">
                            Update
                          </button>
                        </div>
                        <div class="col-md-6">
                          <button class="cancel_btn2 col-md-12" type="reset">
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-sm-3" style="
                background-color: #37322c80;
                border-radius: 27px 27px 10px 10px;
                padding-left: 20px;
                padding-right: 20px;
                border-left: 1px solid white;
              ">
        <div class="row" style="padding: 4px">
          <div class="col">
            <div class="noticard">
              <div class="dt-tm-card">
                <div class="dt-tm">14/04/24 - 10:20:00</div>
              </div>

              <div class="btm-cont-card">
                <p class="sel-1">1. Temperature Selected</p>
                <p class="sel-1">2. Wind Speed Unselected</p>
                <p class="sel-1">Updated by user ABC</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="noticard">
              <div class="dt-tm-card">
                <div class="dt-tm">14/04/24 - 10:20:00</div>
              </div>

              <div class="btm-cont-card">
                <p class="sel-1">1. Temperature Selected</p>
                <p class="sel-1">2. Wind Speed Unselected</p>
                <p class="sel-1">Updated by user ABC</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="noticard">
              <div class="dt-tm-card">
                <div class="dt-tm">14/04/24 - 10:20:00</div>
              </div>

              <div class="btm-cont-card">
                <p class="sel-1">1. Temperature Selected</p>
                <p class="sel-1">2. Wind Speed Unselected</p>
                <p class="sel-1">Updated by user ABC</p>
              </div>
            </div>
          </div>

          <button class="log-btn" style="margin-bottom: 10px;">
            Complete data log
            <svg style="margin-bottom: -3px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Flowmeter sections starts===================================================== -->

  <!-- Flowmeter sections end===================================================== -->
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php

include 'footer.php';
?>