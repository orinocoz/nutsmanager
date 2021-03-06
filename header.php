<?php
/*
    Copyright (C) 2015 Remy van Elst
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU Affero General Public License for more details.
    You should have received a copy of the GNU Affero General Public License
    along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
error_reporting(E_ALL & ~E_NOTICE);
$jsonfile = "power.json";
$file = file_get_contents($jsonfile) or die("Cant open JSON file. Does it exist?.");
$json_a = json_decode($file, true) or die("Cant decode JSON file. Is it a valid JSON file?");

?>

<!DOCTYPE html>
<html><head>
<title><?php echo $productname; ?></title>
<meta charset="UTF-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<a id="top-of-page"></a>
  <div id='page-content-wrapper'>
  <div class='container-fluid'>
    <div class='row'>
      <div class="col-md-10 col-md-offset-1">
        <div class='page-header'>
          <h1><?php echo $productname; ?></h1>
        </div>
      </div>
    </div>
    <div class='row'>
        <div class='col-md-8 col-md-offset-1'>