<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ucwords($q); ?> | Denver Nursing Jobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Find Nursing jobs in Denver, Colorado at DenverNurses.com">
    <meta name="author" content="">
	<link rel="icon"  type="image/ico"  href="/images/nurse.ico" />
 
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 800px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 20px 0;
		padding: 20px 10px;
        text-align: center;
		color:#fff;
		background-color:#3CB371;
		/*background-image:url('images/denver_nurses.jpg');
		background-repeat:no-repeat;
		background-position:right; */
		
      }
      .jumbotron h1 {
        font-size: 40px;
        line-height: 1;
      }
     
      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container-narrow">

     <?php include("header.php"); ?>

     

     <div class="jumbotron">
	   
        <h1 class="hidden-phone">Search Nursing Jobs in Denver</h1>
 

<form id="job_search" class="form-inline"  action="jobsearchresults.php" method="GET" >

<input class="input" type="text" name="q"  value="<?php echo $q ?>" placeholder="Nurse" />
      <div class="visible-phone"></br></div>
<select name="l">
	<option <?php if($l=='Metro' ){ echo "selected=\"selected\" " ;} ?> value ="Metro">All Denver Metro Area</option>
	<optgroup label='Most Searched Cities'>
	<option <?php if($l == 'Arvada' ){ echo "selected=\"selected\" "; } ?> value ="Arvada">Arvada</option>
	<option <?php if($l == 'Aurora'){ echo "selected=\"selected\" ";} ?> value ="Aurora">Aurora</option>
	<option <?php if($l == 'Centennial' ){ echo "selected=\"selected\" ";} ?> value ="Centennial">Centennial</option>
	<option <?php if($l == 'Denver' ){ echo "selected=\"selected\" " ;} ?> value ="Denver">Denver</option>
	<option <?php if($l == 'Lakewood' ){ echo "selected=\"selected\" " ;} ?> value ="Lakewood">Lakewood</option>
	<option <?php if($l == 'Thornton' ){ echo "selected=\"selected\" " ;} ?> value ="Thornton">Thornton</option>
	<option <?php if($l == 'Westminster' ){ echo "selected=\"selected\" " ;} ?> value ="Westminster">Westminster</option>
	</ optgroup> 
	<optgroup label='All Cities'>
	<option <?php if($l == 'Arvada' ){ echo "selected=\"selected\" "; } ?> value ="Arvada">Arvada</option>
	<option <?php if($l == 'Aurora'){ echo "selected=\"selected\" ";} ?> value ="Aurora">Aurora</option>
	<option <?php if($l == 'Arvada' ){ echo "selected=\"selected\" " ;} ?> value ="Arvada">Arvada </option>
	<option <?php if($l == 'Brighton'  ){ echo "selected=\"selected\" " ;} ?> value ="Brighton">Brighton</option>
	<option <?php if($l == 'Broomfield'  ){ echo "selected=\"selected\" " ;} ?> value ="Broomfield">Broomfield</option>
	<option <?php if($l == 'Castle Rock'  ){ echo "selected=\"selected\" " ;} ?> value ="Castle Rock">Castle Rock</option>
	<option <?php if($l == 'Centennial' ){ echo "selected=\"selected\" ";} ?> value ="Centennial">Centennial</option>
	<option <?php if($l == 'Columbine'  ){ echo "selected=\"selected\" " ;} ?> value ="Columbine">Columbine</option>
	<option <?php if($l == 'Commerce City'  ){ echo "selected=\"selected\" " ;} ?> value ="Commerce City">Commerce City</option>
	<option <?php if($l == 'Denver'  ){ echo "selected=\"selected\" " ;} ?> value ="Denver">Denver</option>
	<option <?php if($l == 'Englewood'  ){ echo "selected=\"selected\" " ;} ?> value ="Englewood">Englewood</option>
	<option <?php if($l == 'Federal heights'  ){ echo "selected=\"selected\" " ;} ?> value ="Federal Heights">Federal Heights</option>
	<option <?php if($l == 'Golden'  ){ echo "selected=\"selected\" " ;} ?> value ="Golden">Golden</option>
	<option <?php if($l == 'Greenwood Village'  ){ echo "selected=\"selected\" " ;} ?> value ="Greenwood Village">Greenwood Village</option>
	<option <?php if($l == 'Highlands Ranch'  ){ echo "selected=\"selected\" " ;} ?> value ="Highlands Ranch">Highlands Ranch</option>
	<option <?php if($l == 'Ken Caryl'  ){ echo "selected=\"selected\" " ;} ?> value ="Ken Caryl">Ken Caryl</option>
	<option <?php if($l == 'Lakewood'  ){ echo "selected=\"selected\" " ;} ?> value ="Lakewood">Lakewood</option>
	<option <?php if($l == 'Littleton'  ){ echo "selected=\"selected\" " ;} ?> value ="Littleton">Littleton</option>
	<option <?php if($l == 'Northglenn'  ){ echo "selected=\"selected\" " ;} ?> value ="Northglenn">Northglenn</option>
	<option <?php if($l == 'Parker'  ){ echo "selected=\"selected\" " ;} ?> value ="Parker">Parker</option>
	<option <?php if($l == 'Sherrelwood'  ){ echo "selected=\"selected\" " ;} ?> value ="Sherrelwood">Sherrelwood</option>
	<option <?php if($l == 'Thornton'  ){ echo "selected=\"selected\" " ;} ?> value ="Thornton">Thornton</option>
	<option <?php if($l == 'Welby'  ){ echo "selected=\"selected\" " ;} ?> value ="Welby">Welby</option>
	<option <?php if($l == 'Wheat Ridge'  ){ echo "selected=\"selected\" " ;} ?> value ="Wheat Ridge">Wheat Ridge</option>
	<option <?php if($l == 'Westminster'  ){ echo "selected=\"selected\" " ;} ?> value ="Westminster">Westminster</option>
	</ optgroup>
</select>
        <div class="visible-phone"></br></div>
<button type="submit" class="btn btn-warning" >Search Jobs</button>
    </form>
      
      </div>
	  
	  
	  
<div class="row-fluid">
<div class="span12">
        
         
      <?php

//if metro area selected then set search to Denver and 80 miles. 
if($l=='metro' )
{$l = 'denver'; $mi = 80;}

//call xml magic
$xml = xmlmagic($q,$currentpage,$l,$mi,$userIP);

//number of total results
$totalresults = $xml->rq->tv;
if(!$totalresults)
{
	$totalresults = 0;
}
//paging
$nextpage = nextpage($currentpage,$totalresults,$q,$paginl);
$prevpage = prevpage($currentpage,$q,$paginl); 
?>
 <div class="alert alert-success"><strong>We have <?php echo $totalresults; ?> <?php echo ucwords($q); ?> jobs available in <?php if ($l == 'metro'){echo 'the Denver Metro Area. ';} else {echo ucwords($l);} ?></strong></div>






	
<?php 

// if xml is not empty then show the jobs
if($totalresults != 0)
	{
		echo joblist($xml);
	} 
	
?>
<p>&nbsp;</p>



        
		</div>

		</div>

      <div class="row-fluid">
	 
	  <div class="span1"><?php echo $prevpage; ?></div>
	   <div class="span2 offset4"><?php if($totalresults != 0){echo 'page '.$currentpage;} ?></div>
	    <div class="span1 offset4"><?php echo $nextpage; ?></div>
	  
	 
	
	  </div>
     
	 

	  <div class="row-fluid">
<div class="span12">  <p>&nbsp;</p>
          <h5>Find Nursing Jobs by Location</h5>
          <p><small>
		  <a href="jobsearchresults.php?q=Nurse&l=Metro">All Denver Metro Area</a><br />
		  <a href="jobsearchresults.php?q=Nurse&l=Aurora">Aurora</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Arvada">Arvada</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Brighton">Brighton</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Broomfield">Broomfield</a>&nbsp;-&nbsp; 
		  <a href="jobsearchresults.php?q=Nurse&l=Castle Rock">Castle Rock</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Centennial">Centennial</a>&nbsp;-&nbsp; 
		  <a href="jobsearchresults.php?q=Nurse&l=Columbine">Columbine</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Commerce City">Commerce City</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Denver">Denver</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Englewood">Englewood</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Federal Heights">Federal Heights</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Golden">Golden</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Greenwood Village">Greenwood Village</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Highlands Ranch">Highlands Ranch</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Ken Caryl">Ken Caryl</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Lakewood">Lakewood</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Littleton">Littleton</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Northglenn">Northglenn</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Parker">Parker</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Sherrelwood">Sherrelwood</a>&nbsp;-&nbsp; 
		  <a href="jobsearchresults.php?q=Nurse&l=Thornton">Thornton</a>&nbsp;-&nbsp; 
		  <a href="jobsearchresults.php?q=Nurse&l=Welby">Welby</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Wheat Ridge">Wheat Ridge</a>&nbsp;-&nbsp;
		  <a href="jobsearchresults.php?q=Nurse&l=Westminster">Westminster</a>
		  </small></p>
        <hr>
		</div>

		</div>
		
		<div class="row-fluid">
		<div class="span12">

	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- resultsPage responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9449064929559884"
     data-ad-slot="2731791056"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

		</div>
		</div>
		
     <div class="footer">
        <div style="text-align: left; float:left; width:300px;"><p>&copy; DenverNurses.com 2013</p></div>
		<div style="text-align: right; width:300px; float:right;"><span style="font-size:10px; position:relative; top:-5px; font-family:Arial,sans-serif;color: rgb(51, 51, 51);"><a style="color:#333;text-decoration:none" href="http://employers.simplyhired.com/e/25542/2014-03-05/65bqd/76738579" rel="nofollow">Jobs</a> by</span> <a STYLE="text-decoration:none" href="http://employers.simplyhired.com/e/25542/2014-03-05/65bqd/76738579"><img src="http://www.jobamatic.com/c/jbb/images/simplyhired.png" alt="Simply Hired"></a></div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-1.8.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
<?php include("tracking.php"); ?>
  </body>
</html>
