
    <div class="breadcrumb-area mb-50">
       
    </div>
    
    
    <div class="blog-page-container mb-50">
        <div class="container">
            <div class="row">
                <?php  $this->load->view('blog_leftbar'); ?>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  blog post container  =======-->
                    
                    <div class="blog-post-container">

                        <div class="row">
                            <?php if ($hinglish){ ?>
                                 
                                  <?php foreach ($hinglish as $each){ ?>
                            <div class="col-md-6">
                            <!--=======  single blog post  =======-->
                        
                            <div class="single-blog-post mb-35">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-blog-post-media mb-20">
                                            <div class="image">
                                                <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><img style="width:100%;height:300px;"  src="<?php echo base_url('public/images/blog/' . $each->blog_image); ?>" class="img-fluid" alt=""></a>
                                                 
                                            </div>
<!--                                            <div class="blog-categories">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>/#">Audio</a></li>
                                                    <li><a href="<?php echo base_url() ?>/#">Travel</a></li>
                                                    <li><a href="<?php echo base_url() ?>/#">company</a></li>
                                                </ul>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-blog-post-content">
                                            
                                                                               <?php if($each->status == 0) { ?>

                                                                              <h3> <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId); ?>"><b><?php echo $each->blogTitleHindi; ?></b></a></h3>
                              

                                                                             <?php } else if($each->status == 1) { ?>

                      

                                                                            <h3> <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId); ?>"><b><?php echo $each->blogTitleEnglish ?></b></a></h3>
                                

                                                                                 <?php } else if($each->status == 2) {?>

                            

                                                                               <h3><a href="<?php echo site_url("blogdetail",'id=' .$each->blogId); ?>"><b><?php echo $each->blogTitleEnglish ?></b></a></h3>
                                

                                                                                <?php }else{ ?>
                                
                                
                                                                                  <a href="">Blog</a>
                                                                                <p>Description</p>
                                                                                <?php } ?>
                                            <!--<h3 class="post-title"> <a href="<?php echo base_url() ?>/blog-post-image-format.html"> Blog image post</a></h3>-->
                                            
                                            
                                            
                                            <div class="post-meta">
                                                <p><span><i class="fa fa-user-circle"></i> Posted By: </span> <a href="<?php echo base_url() ?>/#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> Posted On: <a href="<?php echo base_url() ?>/#"><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></a></span></p>
                                            </div>
            
                                            <p class="post-excerpt">
                                                
                                              <?php if ($each->status == 0) { ?>

                                                   <p style="text-align: left"><?php echo substr($each->blogHindi, 0, 140); ?>..</p>

                                              <?php } else if ($each->status == 1) { ?>

                                                   <p><?php echo substr($each->blogEnglish, 0, 140); ?>..</p>

                                              <?php } else if ($each->status == 2) { ?>

                                                   <p><?php echo substr($each->blogEnglish, 0, 140); ?>..</p>

                                               <?php } else { ?>
                                                   <a href="">Blog</a>
                                                   <p>Description</p>
                                               <?php } ?>
                                                

                                            </p>
                                            <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>" class="blog-readmore-btn">continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--=======  End of single blog post  =======-->
                            </div>
                             <?php }}?>

                        </div>
                    </div>
                    
                    <!--=======  End of blog post container  =======-->

                    <!--=======  Pagination container  =======-->
					
					<div class="pagination-container mb-sm-35 mb-xs-35">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  pagination-content  =======-->
                                    
                                    <div class="pagination-content text-center">
                                        
                                        <ul>

                                          <?php 
                                          if($pages< 8){
                                              ?>
                                               <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch')  ?>"><<</a></li>
                                               <?php
                                                 for($i=1; $i<=$pages; $i++){
                                               ?>

                                               <li><a class="" href="<?php echo site_url("blog"), '?pid=' .$i.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $i ;?></a></li>

                                               <?php }?>
                                               <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">>></a></li>

                                               <?php  

                                              }else{
                                                if($pageno < 3){
                                                   $i=1;
                                                   $j= $i+1;
                                                   $m= $i+2;


                                               ?>

                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><<</a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$i.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">1</a></li> 
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$j.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">2</a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$m.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">3</a></li>
                                              <li>.....</li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pages ;  ?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">>></a></li>

                                            <?php }elseif($pageno>=$pages-1){

                                                $j= $pages-1;
                                                $m= $pages-2;
                                                ?>


                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><<</a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">1</a></li>         
                                              <li>.....</li>  
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$m.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pages-2 ;  ?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$j.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch')?>"><?php echo $pages-1 ;  ?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pages ;  ?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">>></a></li>
                                            <?php }else{ 


                                                   $j= $pageno-1;
                                                   $m= $pageno+1;

                                                ?>

                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><<</a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .'1'.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">1</a></li>   
                                              <li>.....</li>  
                                              <li><a class="" href="<?php echo site_url("blog"), '?pid=' .$j.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pageno-1 ;?></a></li>
                                              <li><a class="active" href="<?php echo site_url("blog"), '?pid=' .$pageno.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pageno ;?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"), '?pid=' .$m.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pageno+1 ;?></a></li>
                                              <li>.....</li>  
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>"><?php echo $pages ;  ?></a></li>
                                              <li><a class="" href="<?php echo site_url("blog"),'?pid=' .$pages.'&tagID=' . $this->input->get('tagID').'&blogsearch=' . $this->input->get('blogsearch') ?>">>></a></li>    

                                            <?php  } } ?>

                                        </ul>
                                    
                                    </div>
                                    
                                    <!--=======  End of pagination-content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--=======  End of Pagination container  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of Blog Page Container  ======-->

    
