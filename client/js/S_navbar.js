document.write("<div class='nav'><br /><div class='menuhead2'>Student Navigation</div><br /><a href=home.php class='button'><img src='images/icons/Home.png'>&nbsp;&nbsp;Home</a><br /><a href=help.php class='button'><img src='images/icons/Help.png'>&nbsp;&nbsp;Help Center</a><br /><a href=index.php class='button'><img src='images/icons/Logout.png'>&nbsp;&nbsp;Logout</a><div id='d_heading'><a href=# class='menuhead'>Add Data</a></div><div id='d_links'><a href=add_data_value.php class='button'><img src='images/icons/Add_Data_Value.png'>&nbsp;&nbsp;Add a Single Value</a><br /><a href=add_multiple_values.php class='button'><img src='images/icons/Add_Multiple_Values.png'>&nbsp;&nbsp;Add Multiple Values</a><br /><a href=import_data_file.php class='button'><img src='images/icons/Import_Data_File.png'>&nbsp;&nbsp;Import Data File</a></div><div id='vm_heading'><a href=# class='menuhead'>View/Modify Data</a></div><div id='vm_links'><a href=view_main.php class='button'><img src='images/icons/SearchData.png'>&nbsp;&nbsp;Search Data</a></div><p>&nbsp;</p></div><script>$('#dbm_links').css('display','none');$('#u_links').css('display','none');$('#d_links').css('display','none');$('#vm_links').css('display','none');$('#dbm_heading').click(function(){$('#dbm_links').slideToggle('slow');});$('#u_heading').click(function(){$('#u_links').slideToggle('slow');});$('#d_heading').click(function(){$('#d_links').slideToggle('slow');});$('#vm_heading').click(function(){$('#vm_links').slideToggle('slow');});</script>");