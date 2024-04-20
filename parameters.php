<?php 
$page = 'parameter';
include 'header.php';

?>

  <style>
    .border {
      border: 1px solid white !important;
    }
    .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      width: 90%;
      margin-left: auto;
      margin-right: auto;
      max-width: 600px;
      user-select: none;
    }

    .checkbox-group-legend {
      font-size: 1.5rem;
      font-weight: 700;
      color: #9c9c9c;
      text-align: center;
      line-height: 1.125;
      margin-bottom: 1.25rem;
    }

    .checkbox-input {
      clip: rect(0 0 0 0);
      clip-path: inset(100%);
      height: 1px;
      overflow: hidden;
      position: absolute;
      white-space: nowrap;
      width: 1px;

      &:checked + .checkbox-tile {
        border-color: #e0ff00;
        box-shadow: 0 5px 10px rgba(#000, 0.1);
        color: #e0ff00;

        &:before {
          transform: scale(1);
          opacity: 1;
          background-color: #e0ff00;
          border-color: #e0ff00;
        }

        .checkbox-icon,
        .checkbox-label {
          color: #e0ff00;
        }
      }
    }

    .checkbox-tile {
      display: flex;
      /* flex-direction: column; */
      align-items: center;
      justify-content: center;
      padding: 5px;
      border-radius: 0.5rem;
      border: 2px solid #ffffff;
      background: #302b27ba;
      width: 270px;
      height: 70px;
      box-shadow: rgb(239 255 120) 0rem 0rem 6px 0px;
      transition: 0.15s ease;
      cursor: pointer;
      position: relative;

      &:before {
        content: "";
        position: absolute;
        display: block;
        width: 3.25rem;
        height: 3.25rem;
        border: 2px solid #b5bfd9;
        background-color: transparent;
        border-radius: 4px;
        right: 0.45rem;
        background-image: url("dist/img/check_mark.png");
        background-size: 19px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
      }

      &:hover {
        border-color: #e0ff00;

        &:before {
          transform: scale(1);
          opacity: 1;
        }
      }
    }

    .checkbox-icon {
      transition: 0.375s ease;
      color: white;
      svg {
        width: 3rem;
        height: 3rem;
      }
    }

    .checkbox-label {
      color: white;
      transition: 0.375s ease;
      text-align: center;
      font-size: 20px;
      padding-right: 27px;
    }
    .checkbox + .checkbox,
    .radio + .radio {
      margin-top: 9px !important;
    }

    /* buttons start */

    /* CSS */
  </style>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <h3 class="main_heading">QESPL Weather Monitoring Application</h3>

        <!-- Main content -->
        <section class="content">
          <div class="col-sm-12">
            <div class="row">
              <div
                class="col-sm-9"
                style="
                  background-color: #37322c80;
                  border-radius: 27px 27px 0px 27px;
                  padding-left: 20px;
                  padding-right: 10px;
                "
              >
                <fieldset class="checkbox-group">
                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                            class="temprature_img"
                            src="./dist/img/temprature.png"
                            alt=""
                          />
                        </span>
                        <span class="checkbox-label">Temperature</span>
                      </span>
                    </label>
                  </div>

                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                            class="temprature_img"
                            src="./dist/img/wind.png"
                            alt=""
                          />
                        </span>
                        &nbsp;&nbsp;
                        <span class="checkbox-label">Wind Speed</span>
                      </span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="checkbox-group">
                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                            class="temprature_img"
                            src="./dist/img/humidity.png"
                            alt=""
                          />
                        </span>
                        <span class="checkbox-label">Humidity</span>
                      </span>
                    </label>
                  </div>

                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                          class="temprature_img"
                          src="./dist/img/rain.png"
                          alt=""
                        />
                        </span>
                        &nbsp;&nbsp;
                        <span class="checkbox-label">Rain</span>
                      </span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="checkbox-group">
                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                          class="temprature_img"
                          src="./dist/img/heat.png"
                          alt=""
                        />
                        </span>
                        <span class="checkbox-label">Road Temperature</span>
                      </span>
                    </label>
                  </div>

                  <div class="checkbox">
                    <label class="checkbox-wrapper">
                      <input type="checkbox" class="checkbox-input" />
                      <span class="checkbox-tile">
                        <span class="checkbox-icon">
                          <img
                          class="temprature_img"
                          src="./dist/img/shared-vision.png"
                          alt=""
                        />
                        </span>
                        &nbsp;&nbsp;
                        <span class="checkbox-label">Visibility</span>
                      </span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="checkbox-group">
                  <div class="checkbox">
                    <button class="log-btn" style="width: auto">Save</button>

                    <button class="log-btn" style="width: auto">Cancel</button>
                  </div>
                </fieldset>
              </div>

              <div
                class="col-sm-3"
                style="
                  background-color: #37322c80;
                  border-radius: 27px 27px 10px 10px;
                  padding-left: 20px;
                  padding-right: 20px;
                  border-left: 1px solid white;
                "
              >
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
                    <svg
                      style="margin-bottom: -3px"
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /.content-wrapper -->
      <?php

      include 'footer.php';
      ?>