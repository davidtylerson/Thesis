function printCocktail($name='', $imageURL='', $spirts=array(), $profile=array()) {
	$cocktail = '<div class="cocktail">';
		$cocktail .= '<div class="cocktail-left">';
		$cocktail .= '<img src="' . $imageURL . '"/>';
		$cocktail .= '</div>';
		$cocktail .= '<div class="cocktail-right">';
			$cocktail .= '<div class="cocktail-name">';
			$cocktail .= '<strong>' . $name . '</strong>';
			$cocktail .= '</div>';
			$cocktail .= '<div class="base-spirit">Base Spirit: <strong>';
			foreach($spirits as $spirit) {
				$cocktail .= $spirit . '&nbsp;';

			}

	return $cocktail;

}




$spirits = array('Rye', 'Bourbon');
$profile = array('Spirit Forward', 'Sweet');

printCocktail('Old Fashioned', 'images/highball_glass.png', $spirits, $profile);