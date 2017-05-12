<?php
	require '../vendor/autoload.php';

	$testFile = 'bank.gpc';
	$gpcParser = new \Shopeca\Parser\Gpc\Parser;

	$values = $gpcParser->process(file_get_contents($testFile));

	foreach ($values as $value) {
		if ($value->getType() == "074") {
			echo "From account: ".$value->getAccount()." (".$value->getAccountName().")\n";
		} else {
			echo "Target account: ".$value->getTargetAccount()." (".$value->getAccountingType()." ".$value->getAmount().",- -> ".$value->getTargetName().")\n";
		}
	}
