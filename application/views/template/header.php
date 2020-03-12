<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title><?php echo ($title); ?></title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		table.styledTable {
			border: 1px solid #000000;
			min-width: 100%;
		}

		table.styledTable td,
		table.styledTable th {
			min-width: 15%;
			border: 1px solid #AAAAAA;
			margin: 0px;
		}

		table.styledTable tr:nth-child(even) {
			background: #eee;
		}

		table.styledTable thead {
			background: #DDDDDD;
		}

		table.styledTable thead th {
			font-weight: 600;
			text-align: center;
			padding: 0.7em;
		}

		table.styledTable tfoot {
			font-weight: bold;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		form {
			margin-bottom: 1em;
			text-align: center;
		}

		input {
			margin: 1em;
			border-radius: 7px;
		}

		input[type="submit"] {
			color: #222;
			padding: 0.7em;
			border-radius: 10px;
			font-weight: 600;
		}

		input[type="submit"]:hover {
			background: #fff;
			cursor: pointer;
		}

		p.footer {
			text-align: center;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}
	</style>
</head>
