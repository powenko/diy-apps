<!DOCTYPE html>
<html>
	
    
                <?php include_once "index_head.php"; ?>
                
                		<script type="text/javascript">
			$(function(){
			
			// Tabs
			$('#tabs_content').tabs(); // 内容 风格 资讯

			
			
			$(".panel").hide();     //显示icon 的细部功能


			
			$( "#selectable" ).selectable();
			
			
			    //powen start
				
				
    
				  
				
				$( "#sortable" ).sortable();
				$( "#sortable" ).disableSelection();
		
			
				// 按下+1時
				$(".add_button").click(function(){
				Fun_sortable_add_icon("#sortable",m_sortable_add_icon_no++,"bb");
				
				  });
				  
				  Fun_sortable_add_icon("#Add_more_pages",m_sortable_add_icon_no++,"Add_more_pages_class","list","youtube","YouTube");
				  Fun_sortable_add_icon("#Add_more_pages",m_sortable_add_icon_no++,"Add_more_pages_class","list","rss","RSS");
				  Fun_sortable_add_icon("#Add_more_pages",m_sortable_add_icon_no++,"Add_more_pages_class","list","mail","email");
				  
				  
				  Fun_sortable_add_icon("#sortable",m_sortable_add_icon_no++,"bb","add","youtube","YouTube");
				 // Fun_sortable_add_icon("#sortable",m_sortable_add_icon_no++,"bb","add");
				//  Fun_sortable_add_icon("#sortable",m_sortable_add_icon_no++,"bb","add");
				
				  	$('#scrollbar1').tinyscrollbar();	
					$('#scrollbar2').tinyscrollbar({ axis: 'x'});	
 
		
		
		
		
  
				
				// ICON 移動
				
				

		

			    //powen end

				
				
			});
		
			
		/////////////////////////////
		
		  
	// 加上iCon 的功能
			var m_sortable_add_icon_no=0;
			
			
			
			
			function Fun_sortable_add_icon(t_append,t_id,t_class,i_action,i_kind,i_name){
				
				var draggable_icon_background="";
				var t_html_action="";
				 var draggable_icon_background='background-image:url(images/tag.png); background-repeat:no-repeat; background-position:left;';
				if(i_action=="list"){
				  t_html_action='<span class="ui-icon ui-icon-plusthick" ';
				  draggable_icon_background="";
				}else{
				  t_html_action='<span class="ui-icon ui-icon-closethick" ';
				}
				
				var t_html=   '<li class="draggable '+t_class+'" id="'+t_id+'">  '+
			  '      <!-- youtube  --> '+
			  '         <div id="draggable_icon" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" style="margin:5px;  '+draggable_icon_background+'"  >  '+
			 t_html_action+' style="position:relative;top:5px;left:55px; " ></span>'+
			  '                  <div align="center" style="margin:0px;" ><img src="images/icon_'+i_kind+'.png"> </div> '+
			  '                     '+
			  '                  <div align="center" style="margin:0px;">'+i_name+'.</div> '+
			  '          </div> '+
			  '            <!-- youtube  --> '+
			  '</li>';
						$(t_append).append(t_html);
						
						
						
						
		  
						
						if(i_action=="list"){
						
						      // 點選下面要加上的功能
							  $("#"+t_id).click(function(){
							   // $today = date("H:i:s");
							   
									 	
								Fun_sortable_add_icon("#sortable",m_sortable_add_icon_no,"bb","add",i_kind,i_name);	
									
								  $('#index_tab_content_add_here').load('index_tab_content_folder.php?kind='+i_kind+'&name='+i_name);	
								
								  $(".panel").slideDown();					
								  var t_target="#"+m_sortable_add_icon_no;
									  $(".draggable").css("background-color","");
									  $(t_target).css("background-color","yellow");
									  m_sortable_add_icon_no++;
									  
							 });
						}else{
						
						      //點選上面的icon 時，顯示細部的功能 tab 的資料
							  $("#"+t_id).click(function(){   
									  $(".draggable").css("background-color","");
									  $(this).css("background-color","yellow");	
									  			     
													 
			 
									  $('#index_tab_content_add_here').load('index_tab_content_folder.php?kind='+i_kind+'&name='+i_name);	
				 
								 	  $(".panel").slideDown();	
								// 如果  功能 點選的話	
								
								// 動態加上 RSS //  include "index_tab_content_folder.php"; 
										
										
			   
								
										 
							  });
						}
						
							//		  $('#index_tab_content_add_here').load('index_tab_content_folder.php?kind='+i_kind);	
						 //  $(".panel").slideDown();
						
			}
				
		</script>
        
	<body>
   
 
    <!-- Tabs -->

	

	<div id="tabs_content">

			<ul>

				<li><a href="#tabs_content_1">1) Content</a></li>

				<li><a href="#tabs_content_2">2) Style</a></li>

				<li><a href="#tabs_content_3">3) Info</a></li>

			</ul>

			<div id="tabs_content_1">        
                <?php include_once "index_tab_content.php"; ?>
            </div>

			<div id="tabs_content_2">
                <?php include_once "index_tab_style.php"; ?>
            </div>

			<div id="tabs_content_3">
                <?php include_once "index_tab_info.php"; ?>
            </div>

	</div>




      
      
</body>
</html>


