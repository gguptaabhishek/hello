   <div class="col-lg-3 order-2 order-lg-1">
					<!--=======  sidebar area  =======-->
					
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
                        
                        <!--=======  End of single sidebar  =======-->

                        <!--=======  single sidebar  =======-->
                        
                        <div class="sidebar mb-35">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <!--=======  block container  =======-->
                            
                            <div class="block-container">

                                <!--=======  single block  =======-->
                                 <?php
                                      if($hinglishbylimt) {

                                    foreach ($hinglishbylimt as $each) {
                                   ?>
                                
                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>">
                                            <!--<img src="<?php echo base_url() ?>/assets/images/blog-image/blog01-700x665.jpg" class="img-fluid" alt="">-->
                                             <img style="width:100%;height:60px;" src="<?php echo base_url('public/images/blog/' . $each->blog_image); ?>" alt="">
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
                                    <?php }
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