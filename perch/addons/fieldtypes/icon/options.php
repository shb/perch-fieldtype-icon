<?php

if (!defined( 'FA_ICON_SRC' ))
	define( 'FA_ICON_SRC', 'https://raw.githubusercontent.com/FortAwesome/Font-Awesome/master/src/icons.yml' );

$fa_icons = yaml_parse_url( FA_ICON_SRC )['icons'];

$fa_categories = array();

foreach ($fa_icons as $i => $icon)
{
	foreach ($icon['categories'] as $ci => $category)
	{
		$fa_categories[$category][] = $icon;
	}
}

$html = array();
foreach ($fa_categories as $label => $icons)
{
	$html[] = "<optgroup label=\"$label\">";
	foreach ($icons as $i => $icon)
	{
		$html[] = "<option value=\"{$icon['id']}\">{$icon['name']}</option>";
	}
	$html[] = "</optgroup>";
}

file_put_contents( dirname(__FILE__).'/options.inc',
	'<?php return \'' . implode( "\n", $html ) . '\';'
);

return implode( "\n", $html );
