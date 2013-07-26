<?php $this->load->view($this->config->item('admin_theme_header'); ?>
<body>
    <div class="container" >

            <!-- CONTENT --> 
            <div class="content">

                <!-- HEADER BLOCK --> 
                <div class="header">
                    <?php $this->load->view($this->config->item('admin_theme_top_nav'); ?>
                </div>
                <!-- END HEADER BLOCK -->

                <!-- MAIN CONTENT BLOCK --> 
                <div class="container">
                    
                    
                    <div class="span3">
                        <?php $this->load->view($this->config->item('admin_theme_top_nav'); ?>
                    </div>
                    
                    
                    <div class="main_content">
                        <?php $this->load->view($content); ?>
                    </div>

                </div>    
                <!-- END MAIN CONTENT BLOCK --> 

                <!-- FOOTER BLOCK --> 
                <div class="footer">
                    <?php $this->load->view($this->config->item('admin_theme_footer'); ?>
                </div>
                <!-- END FOOTER BLOCK -->    

            </div>
            <!-- END CONTENT -->
    </div><!-- END container-fluid -->
</body>
</html>