<?php

$page_tpl = bo3::load("{c2r-page}.tpl");

include "pages-e/header.php";
include "pages-e/footer.php";

/* last thing */
$tpl = bo3::c2r([
	'header' => $header,
	'footer' => $footer
], $page_tpl);
