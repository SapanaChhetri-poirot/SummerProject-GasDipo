<?php 
  include_once 'resource/session.php';
  include_once "resource/database.php"; 

  include_once "resource/utilities.php"; 

?>

<?php
    $page_title = 'Order Form';

    include_once 'partials/headers.php';
?>

<h2> Order Form </h2>

<div class="container">
    <section class="col col-lg-7">
        <?php 

            if(isset($result)) echo $result;
        ?>

        <?php 
            if(!empty($form_errors))
            {
                // echo show_errors($form_errors);
            }
        ?>
    </section>
</div>
<div class="container">
<div class="col-xl-5 col-lg-5 col-md5">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
        </div class="w-50 m-auto">
            <form action="" method="post">
                
                <div class="form-group row">
                    <label for="memberidField4" class="col-sm-10 col-form-label"> MemberId: </label>
                    <input type="text" class="form-control" name="memberid" id="memberid" placeholder="Enter your MemberId"
                
        </div>
<br>
                <div class="form-group row ">
                    <label for="cylinderField4" class="col-sm-10 col-form-label">
                        Cylinder                    </label>
                    <select id="cylinderBrand" name="cylinderbrand">
                        <option value="brand1"> Brand 1</option>
                        <option value="brand2"> Brand 2</option>
                        <option value="brand3"> Brand 3</option>
                        <option value="brand4"> Brand 4</option>
                    </select>
                </div> 

                <div class="form-group row">
                <label for="quantityField4" class="col-sm-10 col-form-label">
                        Quantity of Order: 
                    </label>
                    <select id="quantitycylinder" name="quantityofcylider">
                        <option value="1">  1</option>
                        <option value="2">  2</option>
                        <option value="3">  3</option>
                        <option value="4">  4</option>
                    </select>
                </div>

            
                
                <div class="form-group row">
                    <label for="deliveryoptionField4" class="col-sm-10 col-form-label"> Delivery: </label> <br> 
                    <input type="radio" class="form-check-input" name="deliveryoption" id="deliveryyes" value="yes">
                    <label class="form-check-label" for="deliveryyes">Yes</label>
                    <input type="radio" class="form-control-input" name="deliveryoption" id="deliveryno" value="no">
                    <label class="form-check-label" for="deliveryno">no</label>
                </div>


               
                <div class="form-group row">
                    <label for="paymentoptionField4" class="col-sm-10 col-form-label"> Payment Option: </label> <br>
                    <input type="radio" class="form-control-input" name="paymentoption" id="paymentondelivery" value="ondelivery">
                    <label for="paymentondelivery"> Payment On Delivery</label>
                    <input type="radio" class="form-control-input" name="paymentoption" id="paymentoncredit" value="credit">
                    <label for="paymentoncredit"> Credit </label>

                    
                </div>     

                <hr class="mb-3">

                <div class="form-group">
                    <button id="myBtn"> Preview </button>

                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p> Some text </p>



                        </div>
                    </div>
                </div>
            

             <!--   <script>
                            var modal = document.getElementById("myModal");
                            var btn = document.getElementById("myBtn");
                            var span = document.getElementsByClassName("close")[0];
                            btn.onclick = function()
                            {
                                modal.style.display = "block";
                            }

                            span.onclick = function()
                            {
                                modal.style.display = "none";

                            }

                            window.onclick = function(event)
                            {
                                if(event.target == modal)
                                {
                                    modal.style.display="none";
                                }
                            }

                            </script>
                
                -->

            
            </form>
            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>


