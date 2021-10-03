<?php
$title = 'Restricted';
$class = 'simple-wrapper simple-wrapper-content';
require_once('inc/header.php');
?>
<div class="warning-content warning-content-restricted track-error" data-track-error="restricted">
	<div>
		<img src="/assets/img/restricted.png">
		<p>Your ability to use <?php print(SITE_NAME); ?> has been restricted due to violation(s) of the <?php print(SITE_NAME); ?> rules.</p>
		<p>Ban <?=$row['length'] === -1 ? 'length: <strong>Permanent' : 'expiration date: <strong>' . date('m/d/Y g:i A', $expires)?></strong></p>
	</div>
</div>
<?php
showMiniFooter();
?>
