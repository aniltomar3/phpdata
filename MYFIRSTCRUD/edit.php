<?php 
require("Connection.php");  
$id= $_POST['cid']; 
$query ="SELECT * FROM `products` where id=$id ";
$result = mysqli_query($con,$query);
$data= mysqli_fetch_array($result,MYSQLI_ASSOC);

 ?>

                            <div class="input-group mb-3">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required>
                                 </div>
                                 <div class="input-group mb-3">
                                  <span class="input-group-text">Price</span>
                                  <input type="number" class="form-control" name="price" min="1" value="<?php echo $data['price']; ?>" required>
                                </div>
                                <div class="input-group">
                                  <span class="input-group-text">Description</span>
                                  <textarea class="form-control" name="desc" required><?php echo $data['description']; ?></textarea>
                                </div>
                                <div class="input-group mb-3">
                                  <label class="input-group-text">Image</label>
                                  <img src="<?php echo FETCH_SRC.$data['image']; ?>" />
                                  <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" >
                                  <input type="hidden" name="editpid" value="<?php echo $data['id']; ?>" />
                                </div>