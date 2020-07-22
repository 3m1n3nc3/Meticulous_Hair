<!-- PAGE -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel"> 
            <!-- Single Welcome Slide -->
            <?php
            $this->db->order_by("slides_id", "desc");
            $this->db->where("uploaded_by", "admin");
            $this->db->where("status", "ok");
            $slides=$this->db->get('slides')->result_array();
            $i=1;
            foreach($slides as $row){
            ?>
            <div class="single-welcome-slide bg-img" style="background-image: url(<?php echo $this->crud_model->file_view('slides',$row['slides_id'],'100','','no','src','','','.jpg') ?>);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $row['button_link']; ?></h2>
                                    <p data-animation="fadeInUp" data-delay="400ms"><?php echo $row['button_text']; ?>”</p>
                                    <a href="<?php echo $row['button_link']; ?>" class="btn akame-btn" data-animation="fadeInUp" data-delay="700ms"><?php echo $row['button_text']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <?php
                $i++;
            }
            ?>
        </div>
    </section> 
