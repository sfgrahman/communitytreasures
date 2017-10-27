<?php $this->load->view('adminTemplates/common/header',$viewData);?>



<!--Main Content-->
  <div class="content-wrapper">
  	<div class="content-inner">
    	<div class="page-title">
            <h2>View List of <?php echo ucwords($selectedUserType);?> Blog Post</h2>
            <h3 align="right">
<!--                 <a href="<?php echo base_url();?>cp/getXls/1">Get Report</a>-->
            </h3>
        </div>
            
        <!--Success-->
        <?php if($report == 1){ ?>
        <div class="admin-msg success-msg">
            <i class="fa fa-check"></i> 
                <span><?php echo $msg;?></span>
            <a href="#" class="msg-close" title="Close"><i class="fa fa-times-circle"></i></a>
        </div>
        <?php } ?>
        <!--Success-->
        
        <!--Error-->
        <?php if($report == 2){ ?>
        <div class="admin-msg error-msg">
            <i class="fa fa-times"></i> 
                <span><?php echo $msg;?></span>
            <a href="#" class="msg-close" title="Close"><i class="fa fa-times-circle"></i></a>
        </div>
        <?php } ?>
        <!--Error-->
        
        
        <!--Warning-->
        <!--<div class="admin-msg warning-msg">
            <i class="fa fa-warning"></i>  
                <span>Aenean interdum interdum ligula, vitae auctor nisl bibendum eu.</span>
            <a href="#" class="msg-close" title="Close"><i class="fa fa-times-circle"></i></a>
        </div>-->
        <!--Error-->
        
        
        <div class="table-content">
            <!--<div>
                <form name="userSearch" action="" method="post">
                    <select name="typeUser" style="width:150px;height: 30px;margin: 0 0 2px 0;">
                        <?php foreach($userTypeList as $k=>$v):?>
                        <option value="<?php echo $k;?>" <?php if($k == $selectedUserType):?>selected="selected"<?php endif;?>>
                                <?php echo $v;?></option>
                        <?php endforeach;?>
                    </select>
                    <input type="submit" class="submit-bnt" name="search" value="Search">
                </form>
            </div>-->
       	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
       	    <tr>
                <th width="10%" align="left" scope="col">#</th>
                <th width="20%" align="left" scope="col">Profile Image</th>
                <th width="20%" align="left" scope="col">Auther Name</th>
                <th width="35%" align="left" scope="col">Title</th>
                <th width="15%" align="left" scope="col">Action</th>
   	        </tr>
            <?php 
			if(count($blogList) > 0){
				$i = 1;
				  foreach($blogList as $key=>$valList){	
				  	$className = "table-gray";
					if ($key % 2 == 0) {
                  		$className = "";
					}
			?>
            <tr>
                <td class="<?php echo $className;?>"><?php echo $i;$i++;?></td>
                <td class="<?php echo $className;?>"><img src="<?php echo base_url();?>useruploads/<?php echo $valList->profile;?>" width="60" height="60" /></td>
                <td class="<?php echo $className;?>"><?php echo $valList->firstName." ".$valList->lastName;?></td>
                <td class="<?php echo $className;?>"><?php echo $valList->post_title;?></td>
                <td class="<?php echo $className;?>"> 
                    <a href="<?php echo base_url();?>cp/viewBlogPost/<?php echo $valList->post_id;?>/<?php echo $page;?>">View </a>|| 
                    <a href="<?php echo base_url();?>cp/updateBlogPost/<?php echo $valList->post_id;?>/<?php echo $page;?>">
                        <?php if($valList->admin_permission == "1"){?>Active<?php }else{?>Inactive<?php }?> 
                    </a>
                </td>
   	        </tr>
            <?php } 
                }else{
            ?>
             <tr>
       	      <th align="left" scope="col" colspan="5" class="table-gray">No Data!</th>
       	      
   	        </tr>
            <?php }?>
       	   
                
   	      </table>
        </div>
        <?php echo $pagination;?> 
  	</div>
  </div>
  <!--Main Content-->
<?php $this->load->view('adminTemplates/common/footer',$viewData);?>  