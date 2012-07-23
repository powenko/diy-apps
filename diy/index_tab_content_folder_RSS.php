
       <?php include_once "index_head.php"; ?>
 <!-- 新聞RSS 內容設定 -->
    
     
      
      <!-- ........................................................................................................................   -->
      <hr> 
       Appearance:
      
      <div class="panel_Page_appearance   box ui-widget-content"   style="width:95%; height:60px" >
                              <div  style=" float:left; margin:2px; height:50px; width:70px " >
                                
                                    <div align="center"><img src="images/layout_list.png"><br>
                                     
                                    </div>
                                    
                              </div>
                              <button id="change_layer"> 
                                Change page layout </button><br>   
      </div>
                        
      <!-- .......................................................................................................................   -->
      <div > <p>
      Setting:<span class="ui-icon ui-icon-info"></span>                                      
      </div> 
      
       Add a playlist from:
       							  <div class="ui-state-default  ui-corner-all" style="  height:70px; width:70px " >
                                        
                                        <div align="center"><img src="images/app_<?php echo $_GET["kind"]; ?>.png"><br>
                                               <?php echo $_GET["name"]; ?>
                                        </div>
                                  </div> 
                                  
      
      <!-- .......................................................................................................................  -->
      <hr>
          
      <div >                                
      <p>
            
      <div id="debug" style="float:right;"></div>
            
            
<table id="table-1" cellspacing="0" cellpadding="1">


<ul id="RSS_sortable">
<?php for($i=1;$i<=5;$i++){ ?>

 <!-- RSS -->
 
  <li class="ui-state-default ui-corner-all  drag" id="<?php echo $i; ?>" style="padding:5px;   ">
  

   
<div id="draggable_icon"
   style=" background-image:url(images/tag.png); background-repeat:no-repeat; background-position:left;">



<div align="left" style="margin-left:20px;  ">







                  <img src="images/app_<?php echo $_GET["kind"]; ?>.png"  width="30" height="28">
                  <?php echo $_GET["name"]." | "; ?>
    
                                        
                                        
                email:   
                <input name="email to us: " type="text" value="email to us" size="20" > email address:   
                <input name="email_address" type="text" value="support@looptek.com" size="20"> 
                
         
                <span class="ui-icon ui-icon-trash" style="float:right" >Delete </span> 
          
  

</div>





</div>






    
  </li>
    
<?php } ?>
	
</ul>






<p>   

<!-- .......................................................................................................................................................  -->
<!-- .......................................................................................................................................................  -->


<script type="text/javascript">
$( "#RSS_sortable" ).sortable({
			revert: true,
            axis:'y',
			update:function(event, ui){
			var t1 = $(this).sortable('toArray').toString();
			
			
			//    pos = $(ui.item).attr("id");
			//	alert(pos);
             //   alert($(ui.item).text());
			  //  t1=$('ul.li:nth-child(0)').attr("id");
				alert(t1);
			 
			   
            }
		});
		$( "#draggable" ).draggable({
			connectToSortable: "#RSS_sortable",
			helper: "clone",
			revert: "invalid"
		});
		$( "ul, li" ).disableSelection();
		
		
		
		// var text = $("input[name='add1']").val();
    var $li = ' <li class="ui-state-default ui-corner-all  drag" id="<?php echo $i; ?>" style="padding:5px;   "> 123</li>';  // $(".ui-state-default").text(text);
    $("#RSS_sortable").append($li);
</script>


