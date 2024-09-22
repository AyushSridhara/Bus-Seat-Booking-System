
<!-- bostra rap 5 header ekata danna oni -->




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Vtag Card</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div>
                      <form action="vtag/home/plase_odr/win_php.php">
                        <label for="name">Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                        <label for="Number">Number</label>
                        <input type="text" id="Number" name="Number" placeholder="Your number.." required>

                        <label for="Number">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your email.." required>

                        <label for="Type">Type</label>
                        <select id="Type" name="Type" required>
                          <option value="Private Card">Private Card</option>
                        <!--  <option value="Premium Card">Private Card</option>
                          <option value="Company Card">Company Card</option>-->
                        </select>
                        <input type="submit" class="ocolor" value="Submit">
                      </form>
                    </div>
      </div>

      <!-- Modal footer 
      <div class="modal-footer">
      
        <button type="button" class="btn btn-danger ocolor" data-bs-dismiss="modal">Order</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
-->
    </div>
  </div>
</div>


<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>