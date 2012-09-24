<?php

	echo '<script type="text/javascript">var base_url = "' . site_url('/') . '";</script>';
	echo '<script type="text/javascript">var script_root = "' . base_url() . '";</script>';

	Assets::js_group(
		'default',
		array(
			'foundation/modernizr.foundation.js',
			'foundation/jquery.reveal.js',
			'foundation/jquery.placeholder.min.js',
			'foundation/jquery.customforms.js',
			'foundation/jquery.tooltips.js',
			'app.js'
		)
	);