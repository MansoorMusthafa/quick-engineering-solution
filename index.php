<?php 
$page = 'index';
include 'header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h3 class="main_heading">QESPL Weather Monitoring Application</h3>
            </div>
            <div class="col-md-6 text-right">
                <h3 class="main_heading">
                    <div class="date-time-card">
                        <div id="digital-clock"></div>
                    </div>
                </h3>
            </div>
        </div>
    </div>
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php 
            $parameters = array(
                "Temperature",
                "Humidity",
                "Rain",
                "Road Temperature",
                "Visibility",
                "Wind Direction",
                "Wind Speed"
            );

            $params = array(
                "temp",
                "humid",
                "rain",
                "road_temp",
                "visibility",
                "wind_dir",
                "wind_speed"
            );

            // Icons for each parameter
            $icons = array(
                "./dist/img/temprature.png",
                "./dist/img/humidity.png",
                "./dist/img/rain.png",
                "./dist/img/heat.png",
                "./dist/img/shared-vision.png",
                "./dist/img/navigation.png",
                "./dist/img/wind.png"
            );

            // Units for each parameter
            $units = array(
                "&#8451;", // Temperature (degree Celsius)
                "%", // Humidity
                "mm", // Rain
                "&#8451;", // Road Temperature (degree Celsius)
                "m", // Visibility
                "", // Wind Direction (no unit)
                "kt" // Wind Speed (knots)
            );

            // Fetch data for each parameter and display its card
            for ($i = 0; $i < count($parameters); $i++) {
                // Construct the URL with the parameter
                $url = "http://localhost/gowatr-phpdevelopment/quickeng/fetch.php?param=" . $params[$i];
                
                // Fetch data from the URL
                $data = file_get_contents($url);

                // Get the unit for the current parameter or set it to an empty string if not defined
                $unit = isset($units[$i]) ? $units[$i] : '';
                
                // Output the parameter card with fetched data, appropriate icon, and unit
                echo '<div class="col-lg-3 col-xs-6">';
                echo '<div class="card">';
                echo '<div>';
                echo '<a href="#"><i class="fa fa-circle text-success"></i> Online</a>';
                echo '</div>';
                echo '<div class="card_heading">';
                echo '<img class="temprature_img" src="' . $icons[$i] . '" alt="" />';
                echo '<h4 class="temperature">' . $parameters[$i] . '</h4>';
                echo '</div>';
                echo '<div class="btm-cont-card">';
                echo '<h1 class="degree">' . $data . '<span style="font-size: 30px">' . $unit . '</span></h1>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <!-- /.row -->
    </section>
    
</div>

<?php
include 'footer.php';
?>
