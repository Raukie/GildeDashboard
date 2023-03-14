<?php
include_once("header.php");
?>
<div class="container col-xxl-8 px-4 py-5">
	<div class="row align-items-md-stretch ">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="title display-5 text-center">Temperatuur</h1>
		</div>
	</div>
	<table class="table table-striped table-hover table-dark">
		<thead>
			<tr>
				<th scope="col">Temp °C</th>
                <th scope="col">Vochtigheid</th>
				<th scope="col">Gemeten tijd</th>
				<th scope="col">Alarm afgegaan</th>
			</tr>
		</thead>
		<tbody>
            <tr>
                <th>20 °C</th>
                <th>45%</th>
                <th>10:00</th>
                <th>nee</th>
            </tr>
            <tr>
                <th>19 °C</th>
                <th>50%</th>
                <th>11:00</th>
                <th>nee</th>
            </tr>
            <tr>
                <th>25 °C</th>
                <th>60%</th>
                <th>12:00</th>
                <th>ja</th>
            </tr>
        </tbody>
    </table>