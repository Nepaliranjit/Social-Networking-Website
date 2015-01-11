
<?php
function get_smiley_array()
{
$smileys = array(

//	smiley			image name						width	height	alt
	':)'			=>	array('grin.gif',			'19',	'19',	'grin'),
	':-)'			=>	array('grin.gif',			'19',	'19',	'laugh'),
	':00'			=>	array('lol.gif',			'19',	'19',	'LOL'),
	':cheese:'		=>	array('cheese.gif',			'19',	'19',	'cheese'),
	':)'			=>	array('smile.gif',			'19',	'19',	'smile'),
	';-)'			=>	array('wink.gif',			'19',	'19',	'wink'),
	';)'			=>	array('wink.gif',			'19',	'19',	'wink'),
	':smirk:'		=>	array('smirk.gif',			'19',	'19',	'smirk'),
	':roll:'		=>	array('rolleyes.gif',		'19',	'19',	'rolleyes'),
	':-S'			=>	array('confused.gif',		'19',	'19',	'confused'),
	':wow:'			=>	array('surprise.gif',		'19',	'19',	'surprised'),
	':bug:'			=>	array('bigsurprise.gif',	'19',	'19',	'big surprise'),
	':-P'			=>	array('tongue_laugh.gif',	'19',	'19',	'tongue laugh'),
	'%-P'			=>	array('tongue_rolleye.gif',	'19',	'19',	'tongue rolleye'),
	';-P'			=>	array('tongue_wink.gif',	'19',	'19',	'tongue wink'),
	':P'			=>	array('rasberry.gif',		'19',	'19',	'rasberry'),
	':blank:'		=>	array('blank.gif',			'19',	'19',	'blank stare'),
	':long:'		=>	array('longface.gif',		'19',	'19',	'long face'),
	':ohh:'			=>	array('ohh.gif',			'19',	'19',	'ohh'),
	':grrr:'		=>	array('grrr.gif',			'19',	'19',	'grrr'),
	':gulp:'		=>	array('gulp.gif',			'19',	'19',	'gulp'),
	'8-/'			=>	array('ohoh.gif',			'19',	'19',	'oh oh'),
	':down:'		=>	array('downer.gif',			'19',	'19',	'downer'),
	':red:'			=>	array('embarrassed.gif',	'19',	'19',	'red face'),
	':sick:'		=>	array('sick.gif',			'19',	'19',	'sick'),
	':shut:'		=>	array('shuteye.gif',		'19',	'19',	'shut eye'),
	':-/'			=>	array('hmm.gif',			'19',	'19',	'hmmm'),
	'>:('			=>	array('mad.gif',			'19',	'19',	'mad'),
	':mad:'			=>	array('mad.gif',			'19',	'19',	'mad'),
	'>:-('			=>	array('angry.gif',			'19',	'19',	'angry'),
	':angry:'		=>	array('angry.gif',			'19',	'19',	'angry'),
	':zip:'			=>	array('zip.gif',			'19',	'19',	'zipper'),
	':kiss:'		=>	array('kiss.gif',			'19',	'19',	'kiss'),
	':ahhh:'		=>	array('shock.gif',			'19',	'19',	'shock'),
	':jls:'	=>	array('jealous.gif',	'49',	'39',	'cool smile'),
	':what:'	=>	array('64_27.png',	'39',	'29',	'cool smirk'),
	':free:'	=>	array('101589160.jpg',		'49',	'29',	'cool grin'),
	':d:'		=>	array('Bananeyessss.gif',		'39',	'29',	'cool hmm'),
	':coolmad:'		=>	array('shade_mad.gif',		'19',	'19',	'cool mad'),
	':h:'	=>	array('emoticon-object-086.gif',	'29',	'39',	'cool cheese'),
	':spr:'		=>	array('springsmile.gif',		'89',	'49',	'vampire'),
	':snake:'		=>	array('snake.gif',			'39',	'29',	'snake'),
	':b:'		=>	array('jealous.gif ',		'59',	'59',	'excaim'),
		':j:'		=>	array('jealous.gif ',		'59',	'59',	'excaim'),
			':e'		=>	array('emoticon-object-086.gif ',		'29',	'29',	'excaim'),

	':s:'		=>	array('64_22.png ',		'29',	'29',	'excaim'),
	

	'bad'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'fuck'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'cock'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'dick'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'chor'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'naughty'		=>	array('question.gif',		'29',	'29',	'excaim'),
	'pussy'		=>	array('question.gif',		'29',	'29',	'excaim'),


	':question:'	=>	array('question.gif',		'19',	'19',	'question') // no comma after last item

		);
	return $smileys;
}
	function parse_smileys($str = '', $image_url = 'assets/smileys', $smileys = NULL)
	{
		if ($image_url == '')
		{
			return $str;
		}

		if ( ! is_array($smileys))
		{
			if (FALSE === ($smileys = get_smiley_array()))
			{
				return $str;
			}
		}

		// Add a trailing slash to the file path if needed
		$image_url = preg_replace("/(.+?)\/*$/", "\\1/",  $image_url);

		foreach ($smileys as $key => $val)
		{
			$str = str_replace($key, "<img src=\"".$image_url.$smileys[$key][0]."\" width=\"".$smileys[$key][1]."\" height=\"".$smileys[$key][2]."\" alt=\"".$smileys[$key][3]."\" style=\"border:0;\" />", $str);
		}

		return $str;
	}
?>