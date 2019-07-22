<?php if ($alldatablog){ 

    ?>


    
    
    <div class="breadcrumb-area mb-50">
      
    </div>
    
   
    
    <div class="blog-page-container mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2">
					
		        <div class="sidebar-area">

                        <!--=======  single sidebar  =======-->
                        
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Search</h3>
                            <!--=======  search box  =======-->
                          <form class="sidebar-search-box" action="<?php echo site_url('blog') ?>" method="get">

                                <input type="text" placeholder="Search" name="blogsearch" >
                                <button type="submit"><i class="fa fa-search"></i></button>

                          </form>
                            
                            <!--=======  End of search box  =======-->
                        </div>
                        
                     
                        
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <!--=======  block container  =======-->
                            
                                 <div class="block-container">
                                  <?php
                                      if($hinglishbylimt) {

                                    foreach ($hinglishbylimt as $each) {
                                   ?>
                                <!--=======  single block  =======-->
                                
                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>">
                                            
                                            <img style="width:100%;height:60px;" src="<?php echo base_url('public/images/blog/' . $each->blog_image); ?>" alt="">
                                            <!--<img src="<?php echo base_url() ?>/assets/images/blog-image/blog01-700x665.jpg" class="img-fluid" alt="">-->
                                        </a>
                                    </div>
                                    <div class="content">
                                                               
                                                               <?php if($each->status == 0) { ?>

                                                                            <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleHindi; ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                              

                                                                             <?php } else if($each->status == 1) { ?>

                      

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                                

                                                                                 <?php } else if($each->status == 2) {?>

                            

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                                

                                                                                <?php }else{ ?>
                                
                                
                                                                                  <a href="">Blog</a>
                                                                                <p>Description</p>
                                                                                <?php } ?>

                                    </div>
                                </div>
                                <?php  
                                    }
                                  }
                                ?>
                                <!--=======  End of single block  =======-->

                                
                            </div>
                        </div>
                        
                        <!--=======  End of single sidebar  =======-->

                        <!--=======  single sidebar  =======-->
                        
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Recent Comments</h3>
                            <!--=======  block container  =======-->
                            
                            <div class="block-container">

                                <!--=======  single block  =======-->
                                 <?php
                                      if($allcomment) {

                                    foreach ($allcomment as $each) {
                                   ?>
                               
                                <div class="single-block comment-block d-flex">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo base_url() ?>/assets/images/admin_1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><span><?php echo $each->commenter_name ;  ?></span>  <a href="#"><?php echo $each->comment ; ?></a></p>
                                    </div>
                                </div>
                                
                               <?php  
                                    }
                                  }
                                ?>
                                <!--=======  End of single block  =======-->



                            </div>
                            
                            <!--=======  End of block container  =======-->
                        </div>
                        
                        <!--=======  End of single sidebar  =======-->

                        <!--=======  single sidebar  =======-->
                        
<!--                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">CATEGORIES</h3>
                            <ul class="product-categories">
                                <li><a class="active" href="#">Beans</a></li>
                                <li><a href="#">Bread</a></li>
                                 <?php
//                                      if($category) {

//                                    foreach ($category as $each) {
                                   ?>
                                
                                <li><a  href="#"><?php // echo $each->categoryName; ?></a></li>
                                     
                           <?php // } } ?>
                                
                                
                            </ul>
                        </div>-->
                        
                        <!--=======  End of single sidebar  =======-->


                        <!--=======  single sidebar  =======-->
                        
                        <div class="sidebar">
                            <h3 class="sidebar-title">Tags</h3>
                            <!--=======  tag container  =======-->
                            
                            <ul class="tag-container">
                                
                                 <?php
                                 if($tag_result) {

                                    foreach ($tag_result as $each) {
                                ?>

                                 <li><a  href="<?php echo site_url("blog",'tagID=' .$each->id) ?>"><?php echo $each->tag; ?></a></li>
                                        <?php
                                    }
                            
                                 }
                            ?>
                                

                            </ul>
                            
                            <!--=======  End of tag container  =======-->
                     </div>
                        
                        <!--=======  End of single sidebar  =======-->
              </div>
                    
                    <!--=======  End of sidebar area  =======-->
        </div>
                
                
                
    <div class="col-lg-9 order-1 mb-sm-35 mb-xs-35">
                    <!--=======  blog post container  =======-->
                    
         <div class="blog-single-post-container mb-50">
                     <?php if ($alldatablog){ 
                                                     
//                            foreach ($blogdata as $each){
                        ?>
                 <h3 class="post-title"><?php if ($alldatablog->status == 0) { ?>
                            <a class="blog_heading" href="#"><?php echo $alldatablog->blogTitleHindi; ?></a>

                        <?php } ?>
                        <?php if ($alldatablog->status == 1) { ?>

                            <a class="blog_heading" href="#"><?php echo $alldatablog->blogTitleEnglish; ?></a>

                        <?php } ?>
                        <?php if ($alldatablog->status == 2) { ?>

                            <a class="blog_heading" href="#"><?php echo $alldatablog->blogTitleEnglish; ?><br><?php echo $alldatablog->blogTitleHindi; ?></a>

                        <?php } ?></h3>
                        
                       
                        <div class="post-meta">
                            <p><span><i class="fa fa-user-circle"></i> Posted By: </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> Posted On: <a href="#"><?php echo date('d-M-Y', strtotime($alldatablog->createdDate)); ?></a></span></p>
                        </div>
                        
                        <div class="single-blog-post-media mb-xs-20">
                            <div class="image">
                                <!--<img src="<?php echo base_url() ?>/assets/images/single-post-image/blog01.jpg" class="img-fluid" alt="">-->
                                <img src="<?php echo base_url('public/images/blog/' . $alldatablog->blog_image); ?>"alt=""height="535" width="750">
                            </div>

                        </div>
                        
                  
                        
                        <div class="post-content mb-40">
                            <p><?php if ($alldatablog->status == 2) { ?>
                            <p><?php echo $alldatablog->blogEnglish; ?><br><br><?php echo $alldatablog->blogHindi; ?></p>

                        <?php } ?>
                        <?php if ($alldatablog->status == 1) { ?>
                            <p><?php echo $alldatablog->blogEnglish; ?></p>

                        <?php } ?>
                        <?php if ($alldatablog->status == 0) { ?>
                            <p><?php echo $alldatablog->blogHindi; ?></p>

                        <?php } ?></p>

<!--                            <blockquote>
                                <p>ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! VitaeLorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor.</p>
                            </blockquote>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, u Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum!</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum! repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum!</p>-->
                        </div>
                        
                     
                        <!--=======  Tags area  =======-->
                        
                        <div class="tag-area mb-40">
                            <span>Tags: </span>
                            <ul>
                                  <?php
                            $tag = json_decode($alldatablog->tags);
//                                       print_r($tag);die; 
                            if ($tag) {
                                $data = '';
                                foreach ($tag as $tag_data) {
//                                                print_r($tag_data);die;
                                    if ($tag_data->key_tagid == null) {
                                        echo "-";
                                    } else {
                                        $data = $this->food->getTagById($tag_data->key_tagid);
//                                                    echo $data->tag . ",<br>";
                                        ?>

                                <li> <a href="#"><?php echo $data->tag; ?></a></li>,
                                        <?php
                                    }
                                }
                            } else {
                                echo '-';
                            }
                            ?>
                                
<!--                                <li><a href="#">Image</a>,</li>-->
                                
                            </ul>
                        </div>
                        <?php }
                     
                             ?>
                        <!--=======  End of Tags area  =======-->


                        <!--=======  Share post area  =======-->
                        
                        <div class="social-share-buttons mb-40">
                                <h3>share this product</h3>
                                <ul>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        
                        <!--=====  End of Share post area  ======-->

                        <!--=======  related post  =======-->
                        
                        <div class="related-post-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="related-post-title mb-30">RELATED POSTS</h3>
                                </div>
                            </div>
                            <div class="row">
                                
                                <?php
                                      if($hinglishbylimt) {

                                    foreach ($hinglishbylimt as $each) {
                                   ?>
                                
                                <div class="col-lg-4 col-md-4 mb-xs-20">
                                    <!--=======  single related post  =======-->
                                    
                                    <div class="single-related-post">
                                        <div class="image">
                                            <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>">
                                                <img style="width:240px;height:160px;" src="<?php echo base_url('public/images/blog/' . $each->blog_image); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h3 class="related-post-title"> 
                                                 <?php if($each->status == 0) { ?>

                                                                            <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleHindi; ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                              

                                                                             <?php } else if($each->status == 1) { ?>

                      

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                                

                                                                                 <?php } else if($each->status == 2) {?>

                            

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a><br><span><?php echo date('d-M-Y', strtotime($each->createdDate)); ?></span>
                                

                                                                                <?php }else{ ?>
                                
                                
                                                                                  <a href="">Blog</a>
                                                                                <p>Description</p>
                                                                                <?php } ?></a> 
<!--                                                <span>April 24, 2018</span>-->
                                            </h3>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single related post  =======-->
                                </div>
                                
                                <?php
                                    }
                                  }
                                ?>
                                

                            </div>
                        </div>
                        
             </div>
                    
                    <!--=======  End of blog post container  =======-->

                    <!--=============================================
                    =            Comment section         =
                    =============================================-->
                    
                    <div class="comment-section">
                        <h3 class="comment-counter"> COMMENTS</h3>

                        <!--=======  comment container  =======-->
                        
                        <div class="comment-container mb-40">
                            <!--=======  single comment  =======-->
                             <?php
                                      if($allcomment) {

                                    foreach ($allcomment as $each) {
                                   ?>
                            <div class="single-comment">
                                <!--<span class="reply-btn"><a href="#">Reply</a></span>-->

                                <div class="image">
                                    <img src="<?php echo base_url() ?>/assets/images/admin_1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="user"><?php echo $each->commenter_name ;  ?> <span class="comment-time"><?php echo date('d-M-Y h:i a', strtotime($each->createdDate)); ?></span></h3>
                                    <p class="comment-text"><?php echo $each->comment ; ?>.</p>
                                </div>

                            </div>
                            <?php 
                                    }
                                 }
                            
                            ?>
                            <!--=======  End of single comment  =======-->
                            
                          
                        </div>
                        
                        <!--=======  End of comment container  =======-->

                        <!--=======  comment form container  =======-->
                        
                        <div class="comment-form-container">
                            <h3 class="comment-form-title">LEAVE A REPLY</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <!--=======  comment form  =======-->
                            
                            <div class="comment-form">
                               <form action="<?php echo site_url("blogdetail",'id='.$alldatablog->blogId) ?>" method="post" >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Comment</label>
                                                <textarea name="commentMessage" id="commentMessage"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" name="commenterName">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="commenterEmail">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="commenterWebsite">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="post-comment-btn" name="submit">post comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                     </div>

                 </div>
            </div>
        </div>
    </div>
<?php  } ?> 
    <!--=====  End of Blog Page Container  ======-->

    
