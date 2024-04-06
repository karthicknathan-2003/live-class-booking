 <!-- alert messeges for success and error and required fields -->
 <?php
    if (isset($_SESSION['success'])) {
    ?>
     <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="alert">
         <strong><?php echo $_SESSION['success'] ?></strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>
 <?php
        unset($_SESSION['success']);
    } 
    
    else if (isset($_SESSION['error'])) { ?>
     <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
         <strong><?php echo $_SESSION['error'] ?></strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>
 <?php
        unset($_SESSION['error']);
    } 
    
    else if (isset($_SESSION['required'])) { ?>
     <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
         <strong><?php echo $_SESSION['required'] ?></strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>
 <?php
        unset($_SESSION['required']);
    } ?>