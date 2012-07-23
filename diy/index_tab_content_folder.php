
       <?php include_once "index_head.php"; ?>
 <!-- 內容設定 -->
         
      <div id="index_tab_content_folder">

          <span class="ui-icon ui-icon-circle-triangle-s" id="hide_folder001" ></span>  <!-- 點一下可以收起來 -->
      
    
          <h2  style="float:left"><?php echo $_GET["kind"]; ?> | Page appearance: </h2>
            
            <span class="ui-icon ui-icon-info" style="float:left"> </span>
            
    
              <span class="ui-icon ui-icon-trash">Delete </span>
              <span class="ui-icon ui-icon-arrowthickstop-1-n"  style="float:right">Close </span>
              <div style="clear:both" /> 
              
          <div class="panel_Page_appearance   box ui-widget-content"   style="width:95%; height:80px" >
                            <div  style=" width:48%; float:left; margin:2px; " >
                                  <div class="ui-state-default  ui-corner-all" style=" width:48%; float:left; margin:2px; height:70px; width:70px " >
                                        
                                        <div align="center"><img src="images/app_<?php echo $_GET["kind"]; ?>.png"><br>
                                               <?php echo $_GET["name"]; ?>
                                        </div>
                                  </div> 
                                    <button id="change_icon">  Change icon </button> <br>
                                    <button id="change_name">  Change name </button>
                            </div>         
          </div>
          
          
          <!-- ........................................................................................................................   -->
       
       
       <div id="index_tab_content_folder_add_here">
       </div>


       
       
     </div>  
       
       
<!--   視窗設定  -->
<!-- .......................................................................................................................................................  -->

      
      <!--改變icon 的圖片 -->
<div id="dialog-confirm" class="class_dialog"  title="Change icon">
    <div id="dialog_tabs">
        <ul>
            <li><a href="#tabs-1">Default Icon</a></li>
            <li><a href="#tabs-2">Custom</a></li>
        </ul>
        <div id="tabs-1">
             <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Default Icon<br>
             <ol id="selectable" style="height:200px">
                <li class="ui-state-default"><img src="images/icon_b_Broadcasts.png"></li>
                <li class="ui-state-default"><img src="images/icon_b_Chat.png"></li>
             </ol>
        </div>
        <div id="tabs-2">
            <form>
            <input value="select upload file.">
            <br>
            </form>
                <button id="button_upload">Upload</button>
                Recommended image size 114x144 pixels
        </div>
    </div>
</div>




<!-- .........................  -->



     
      
 <!-- 視窗 改變app name-->
 
<div id="dialog-confirm_change_name"  class="class_dialog" title="Change icon">
        
         <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Page Name<br>
        <input name="page_name" type="text">
</div>
     
      
      
       
      
 <!-- 視窗 改變app layout-->
 
<div id="dialog-confirm_change_layout"  class="class_dialog" title="Change Page Layout">
        
         <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Change Page Layout<br>
		 <ol id="selectable" style="height:200px">
            <li class="ui-state-default"><img src="images/icon_b_Broadcasts.png"></li>
            <li class="ui-state-default"><img src="images/icon_b_Chat.png"></li>
         </ol>
</div>
     
          




<script type="text/javascript">

               // 點一下可以收起來 
                $("#hide_folder001").click(function(){	   
				     $(".panel").slideUp();						
			    });
			   
			    $( "#dialog_tabs" ).tabs();
			    $(".class_dialog").hide();  
				$("#change_icon").click(function(){
						$( "#dialog:ui-dialog" ).dialog( "destroy" );
					
						$( "#dialog-confirm" ).dialog({
							resizable: true,
							width:800,
							height:400,
							modal: true,
							buttons: {
								"OK": function() {
									$( this ).dialog( "close" );
								},
								Cancel: function() {
									$( this ).dialog( "close" );
								}
							}
						});
		
			   });
               
			   
				$("#change_name").click(function(){
						$( "#dialog:ui-dialog" ).dialog( "destroy" );
					
						$( "#dialog-confirm_change_name" ).dialog({
							resizable: true,
							width:300,
							height:200,
							modal: true,
							buttons: {
								"OK": function() {
									$( this ).dialog( "close" );
								},
								Cancel: function() {
									$( this ).dialog( "close" );
								}
							}
						});
		
			   });
				  
				$("#change_layer").click(function(){
						$( "#dialog:ui-dialog" ).dialog( "destroy" );
					
						$( "#dialog-confirm_change_layout" ).dialog({
							resizable: true,
							width:300,
							height:200,
							modal: true,
							buttons: {
								"OK": function() {
									$( this ).dialog( "close" );
								},
								Cancel: function() {
									$( this ).dialog( "close" );
								}
							}
						});
		
			   });
  
               
			   
			      <?php 
		    $t_url=  '"'."index_tab_content_folder_RSS.php?kind=".$_GET["kind"]."&name=".$_GET["name"].'"';
		//	echo '<script>  alert('.$t_url.'); </script>';
		   // include_once $t_url;  //新聞RSS 內容設定 
			// include_once "index_tab_content_folder_RSS.php?kind=aaa";
           ?>
       $('#index_tab_content_folder_add_here').load(<?php echo $t_url;?>);			 
       
       
			
</script>

       
	  