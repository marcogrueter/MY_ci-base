<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width">

<title><?= $template['title'] ?></title>
<meta name="description" content="">

<?php Assets::cdn(array('jquery'));?>

<?php Assets::css_group(
				'default',
				array(
					'foundation/globals.css',
					'foundation/typography.css',
					'foundation/grid.css',
					'foundation/ui.css',
					'foundation/forms.css',
					'foundation/orbit.css',
					'foundation/reveal.css',
					'foundation/mobile.css',
					'app.css'
				)
			);
?>

<!--[if lt IE 9]>
	<link rel="stylesheet" href="stylesheets/ie.css">
<![endif]-->

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

	