<?php
/*
Plugin Name: Congressional Search Widget
Plugin URI: http://pacifiedcitizen.com/
Description: THOMAS Congressional Search Sidebar Widget
Author: Chris Mahoney
Version: 1.5
Author URI: http://pacifiedcitizen.com/
*/

function congressionalSearchWidget()
{
echo <<<BLOCK
	
    <form id='congressionalSearchWidget' target="_blank" method='get' action='http://thomas.loc.gov/beta/res.jsp'>
	  <input name='queryText' maxlength='50' id='refine' type='text' value="Name, Bill Number..." onFocus="this.value='';"><br>
	  <input name='searchBSS' id='r1' value='true' checked='checked' type='checkbox'>
		&nbsp;
        <label for='r1'>Bills, Resolutions</label>
        <br>
       
      <input name='searchCR' id='r2' value='true' checked='checked' type='checkbox'>
		&nbsp;
        <label for='r2'>Congressional Record</label>
		<br>
        
	  <input name='searchCmte' id='r3' value='true' checked='checked' type='checkbox'>
		&nbsp;
        <label for='r3'>Committee Reports</label>
        <br>
        
	  <input name='searchPN' id='r4' value='true' checked='checked' type='checkbox'>
		&nbsp;
        <label for='r4'>Presidential Nominations</label>
        <br>

      <input name='searchTre' id='r5' value='true' checked='checked' type='checkbox'>
		&nbsp;
        <label for='r5'>Treaties</label>

		
	  <br><br>Select a Congress: <select name='congress' id=''>
		<option value='any' selected='selected'> All Congresses</option>
		<option value='110' selected='selected'>110th&nbsp;&nbsp;(2007-2008)</option>
		<option value='109'>109th&nbsp;&nbsp;(2005-2006)</option>
		<option value='108'>108th&nbsp;&nbsp;(2003-2004)</option>
		<option value='107'>107th&nbsp;&nbsp;(2001-2002)</option>
		<option value='106'>106th&nbsp;&nbsp;(1999-2000)</option>

		<option value='105'>105th&nbsp;&nbsp;(1997-1998)</option>
		<option value='104'>104th&nbsp;&nbsp;(1995-1996)</option>
		<option value='103'>103rd&nbsp;&nbsp;(1993-1994)</option>
		<option value='102'>102nd&nbsp;&nbsp;(1991-1992)</option>
		<option value='101'>101st&nbsp;&nbsp;(1989-1990)</option>
		<option value='100'>100th&nbsp;&nbsp;(1987-1988)</option>

		<option value='99'>99th&nbsp;&nbsp;(1985-1986)</option>
		<option value='98'>98th&nbsp;&nbsp;(1983-1984)</option>
		<option value='97'>97th&nbsp;&nbsp;(1981-1982)</option>
		<option value='96'>96th&nbsp;&nbsp;(1979-1980)</option>
		<option value='95'>95th&nbsp;&nbsp;(1977-1978)</option>
		<option value='94'>94th&nbsp;&nbsp;(1975-1976)</option>

		<option value='93'>93rd&nbsp;&nbsp;(1973-1974)</option>
	  </select>
	  
	  <input class='button' name='Search' id='Search' value='Search Congress' type='submit'>
	</form>
	<a href="http://pacifiedcitizen.com/blog/?page_id=186">Get this plugin!</a>
	
BLOCK;
}

function widget_congressionalSearchWidget($args) {
  extract($args);
	
  echo $before_widget;
  echo $before_title;
  echo "Search Congress";
  echo $after_title;
	congressionalSearchWidget();
  echo $after_widget;
}

function congressionalSearchWidget_init() {
  register_sidebar_widget(__('Congressional Search Widget'), 'widget_congressionalSearchWidget');
}

add_action("plugins_loaded", "congressionalSearchWidget_init");

?>