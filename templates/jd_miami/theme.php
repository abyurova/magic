<?php 
	if(!empty($gantry->document->params['positiontop']->topimage)){
		 $path = json_decode($gantry->document->params['positiontop']->topimage);
		 $topbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$topbg=(isset($gantry->document->params['positiontop']->topcolor)) ? $gantry->document->params['positiontop']->topcolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionheader']->headerimage)){
		 $path = json_decode($gantry->document->params['positionheader']->headerimage);
		 $headerbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$headerbg=(isset($gantry->document->params['positionheader']->headercolor)) ? $gantry->document->params['positionheader']->headercolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionslider']->sliderimage)){
		 $path = json_decode($gantry->document->params['positionslider']->sliderimage);
		 $sliderbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$sliderbg=(isset($gantry->document->params['positionslider']->slidercolor)) ? $gantry->document->params['positionslider']->slidercolor : 'transparent';
	}

	if(!empty($gantry->document->params['positiondrawer']->drawerimage)){
		 $path = json_decode($gantry->document->params['positiondrawer']->drawerimage);
		 $drawerbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$drawerbg=(isset($gantry->document->params['positiondrawer']->drawercolor)) ? $gantry->document->params['positiondrawer']->drawercolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionshowcase']->showcaseimage)){
		 $path = json_decode($gantry->document->params['positionshowcase']->showcaseimage);
		 $showcasebg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$showcasebg=(isset($gantry->document->params['positionshowcase']->showcasecolor)) ? $gantry->document->params['positionshowcase']->showcasecolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionfeature']->featureimage)){
		 $path = json_decode($gantry->document->params['positionfeature']->featureimage);
		 $featurebg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$featurebg=(isset($gantry->document->params['positionfeature']->featurecolor)) ? $gantry->document->params['positionfeature']->featurecolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionutility']->utilityimage)){
		 $path = json_decode($gantry->document->params['positionutility']->utilityimage);
		 $utilitybg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$utilitybg=(isset($gantry->document->params['positionutility']->utilitycolor)) ? $gantry->document->params['positionutility']->utilitycolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionbreadcrumb']->breadcrumbimage)){
		 $path = json_decode($gantry->document->params['positionbreadcrumb']->breadcrumbimage);
		 $breadcrumbbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$breadcrumbbg=(isset($gantry->document->params['positionbreadcrumb']->breadcrumbcolor)) ? $gantry->document->params['positionbreadcrumb']->breadcrumbcolor : 'transparent';
	}

	if(!empty($gantry->document->params['positionposition-1']->position1image)){
		 $path = json_decode($gantry->document->params['positionposition-1']->position1image);
		 $position1bg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$position1bg=(isset($gantry->document->params['positionposition-1']->position1color)) ? $gantry->document->params['positionposition-1']->position1color : 'transparent';
	}

	if(!empty($gantry->document->params['positionmaintop']->maintopimage)){
		 $path = json_decode($gantry->document->params['positionmaintop']->maintopimage);
		 $maintopbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$maintopbg=(isset($gantry->document->params['positionmaintop']->maintopcolor)) ? $gantry->document->params['positionmaintop']->maintopcolor : 'transparent';
	}

	if(!empty($gantry->document->params['position-2position']->position2image)){
		 $path = json_decode($gantry->document->params['position-2position']->position2image);
		 $position2bg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$position2bg=(isset($gantry->document->params['position-2position']->position2color)) ? $gantry->document->params['position-2position']->position2color : 'transparent';
	}

	if(!empty($gantry->document->params['fullwidthposition']->fullwidthimage)){
		 $path = json_decode($gantry->document->params['fullwidthposition']->fullwidthimage);
		 $fullwidthbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$fullwidthbg=(isset($gantry->document->params['fullwidthposition']->fullwidthcolor)) ? $gantry->document->params['fullwidthposition']->fullwidthcolor : 'transparent';
	}

	if(!empty($gantry->document->params['mainbottomposition']->mainbottomimage)){
		 $path = json_decode($gantry->document->params['mainbottomposition']->mainbottomimage);
		 $mainbottombg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$mainbottombg=(isset($gantry->document->params['mainbottomposition']->mainbottomcolor)) ? $gantry->document->params['mainbottomposition']->mainbottomcolor : 'transparent';
	}

	if(!empty($gantry->document->params['videosliderposition']->videosliderimage)){
		 $path = json_decode($gantry->document->params['videosliderposition']->videosliderimage);
		 $videosliderbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$videosliderbg=(isset($gantry->document->params['videosliderposition']->videoslidercolor)) ? $gantry->document->params['videosliderposition']->videoslidercolor : 'transparent';
	}

	if(!empty($gantry->document->params['extensionposition']->extensionimage)){
		 $path = json_decode($gantry->document->params['extensionposition']->extensionimage);
		 $extensionbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$extensionbg=(isset($gantry->document->params['extensionposition']->extensioncolor)) ? $gantry->document->params['extensionposition']->extensioncolor : 'transparent';
	}

	if(!empty($gantry->document->params['position-3position']->position3image)){
		 $path = json_decode($gantry->document->params['position-3position']->position3image);
		 $position3bg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$position3bg=(isset($gantry->document->params['position-3position']->position3color)) ? $gantry->document->params['position-3position']->position3color : 'transparent';
	}

	if(!empty($gantry->document->params['position-4position']->position4image)){
		 $path = json_decode($gantry->document->params['position-4position']->position4image);
		 $position4bg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$position4bg=(isset($gantry->document->params['position-4position']->position4color)) ? $gantry->document->params['position-4position']->position4color : 'transparent';
	}

	if(!empty($gantry->document->params['bottomposition']->bottomimage)){
		 $path = json_decode($gantry->document->params['bottomposition']->bottomimage);
		 $bottombg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$bottombg=(isset($gantry->document->params['bottomposition']->bottomcolor)) ? $gantry->document->params['bottomposition']->bottomcolor : 'transparent';
	}

	if(!empty($gantry->document->params['footerposition']->footerimage)){
		 $path = json_decode($gantry->document->params['footerposition']->footerimage);
		 $footerbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$footerbg=(isset($gantry->document->params['footerposition']->footercolor)) ? $gantry->document->params['footerposition']->footercolor : 'transparent';
	}

	if(!empty($gantry->document->params['copyrightposition']->copyrightimage)){
		 $path = json_decode($gantry->document->params['copyrightposition']->copyrightimage);
		 $copyrightbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$copyrightbg=(isset($gantry->document->params['copyrightposition']->copyrightcolor)) ? $gantry->document->params['copyrightposition']->copyrightcolor : 'transparent';
	}

	if(!empty($gantry->document->params['debugposition']->debugimage)){
		 $path = json_decode($gantry->document->params['debugposition']->debugimage);
		 $debugbg= (isset( $path )) ? 'url('.$path->path.')': "";		
		 }else{
		$debugbg=(isset($gantry->document->params['debugposition']->debugcolor)) ? $gantry->document->params['debugposition']->debugcolor : 'transparent';
	}

?>