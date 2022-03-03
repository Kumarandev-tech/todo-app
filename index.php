<div class="d-flex justify-content-center align-items-center">
        <div class="spinner-border" role="status" id="loader">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
<div>
       <div class="form">
           <form method="post" id="to_do_form">
               <input type="search" id="todos-search" placeholder="Search">
               <div class="todoDiv">
                   <input type="checkbox" id="check" name="textStyle" value="line-through">
                   <div class="input-group">
                       <input type="text" class="form-control " id="todos_list" name="getvalue" placeholder="What is your Task?">
                       <button class="btn btn-info" name='save' type="button" id="Add">
                           Add Item
                       </button>
                       <i class="bi bi-archive" id="remove" name="rm" data-id="<?php echo $row['task_list_id']; ?>"></i>
                       <div class="result"id="result"></div>
                   </div>
               </div>
           </form>
       </div>
       <ul>
       </ul>
   </div>
   
  