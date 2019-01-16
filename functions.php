<?php
//get user ip
$userIP = $_SERVER['REMOTE_ADDR'];

//get query if null set to Nurse
$q = $_GET['q'];
if (!$q)
{$q = 'nurse';}
$q = strtolower($q); //do this because of a weird bug (in the xml parser?). When capital 'H' is the first letter in the 2nd search world. Lowercase h works just fine. Weird.
//get distance if null set to 10mi
$mi= $_GET['mi'];
if (!$mi)
{$mi = 5;}

//get location if null set to Denver and mi to 80
$l = $_GET['l'];
if (!$l)
{$l = 'Metro';$mi=80 ;}
$l = strtolower($l); //do this because of a weird bug (in the xml parser?). When capital 'H' is the first letter in the 2nd search word. Lowercase h works just fine. Weird.

//get the current page number. If null then assign 1
$currentpage = $_GET['page'];
if (!$currentpage)
{$currentpage = 1;} 

//Set $paging to all metro area so the paging will pass the right param.
$pagingl=$l;


function xmlmagic($q,$currentpage,$l,$mi,$userIP)
{
//get the results in xml
//old jobamatic url $request_url = "http://api.simplyhired.com/a/jobs-api/xml-v2/q-".$q."/ws-10/pn-".$currentpage."/l-".$l." CO/mi-".$mi."?pshid=5300&ssty=2&cflg=r&jbd=denvernurses.jobamatic.com&clip=".$userIP; 
//original before api change-->$request_url = "http://api.simplyhired.com/a/jobs-api/xml-v2/q-".$q."/ws-10/pn-".$currentpage."/l-".$l." CO/mi-".$mi."?pshid=78893&ssty=2&cflg=r&auth=bce85134bb8ee8b88458e502227d79a9b486744c.78893&clip=".$userIP; 

$request_url = "http://api.simplyhired.com/partner/api/xml/3/q-".$q."/ws-10/pn-".$currentpage."/l-".$l." CO/mi-".$mi."?pshid=78893&ssty=2&cflg=r&auth=bce85134bb8ee8b88458e502227d79a9b486744c.78893&clip=".$userIP;

//xml magic
$ch = curl_init(); 
$timeout = 5; 
curl_setopt($ch, CURLOPT_URL, $request_url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
$data = curl_exec($ch); curl_close($ch);
$xml = new SimpleXMLElement($data);

return $xml;
}

function joblist($xml)
{
foreach ($xml->rs->r as $item) 
	{
		$arr = $item->src->attributes();
		if (strlen(strstr($item->cn,"Navy"))  ==0)
			{
				if (strlen(strstr($item->cn,"Air Force"))==0)
				{
					$joblist = $joblist.'<br /><a href="'.$arr["url"].'" onMouseDown="xml_sclk(this);" target="_blank" ><strong>'.$item->jt.'</strong></a><br />'.'<i>'.$item->cn.'</i>'.'<p>'.$item->e.'<br /><a href="'.$arr["url"].'" onMouseDown="xml_sclk(this);" target="_blank" >Click here for the job description</a></p>';
				}
  
			}
	}
return $joblist;
}

function prevpage($current,$q,$paginl)
{
	if ($current != 1)
	{
		$current--;
		$paging =  "<a href='jobsearchresults.php?q=".$q."&l=".$pagingl."&page=".$current."'><button class='btn btn-primary' type='button'>Previous</button></a>";
		$current++;
	}
	return $paging;
}
	
function nextpage($current,$total,$q,$paginl)
{
	if ($current == 1 )
	{  
		if ($total > 10)	//if there is more then one page
		{
			$current++;
			$paging =  "<a href='jobsearchresults.php?q=".$q."&l=".$pagingl."&page=".$current."'><button class='btn btn-primary' type='button'>Next</button></a>";
			$current--;
		}
	} 
	else
	{
		if ($current*10 < $total)
		{
			$current++;
			$paging =  "<a href='jobsearchresults.php?q=".$q."&l=".$pagingl."&page=".$current."'><button class='btn btn-primary' type='button'>Next</button></a>";
			$current--;
		}
	}
	return $paging;
}


?>
