<?php session_start();
include "login-header.php";
?>

    <title>Billing</title>
   
   
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<br>
<br>
<br>
<br>




<body>
<h2>Sri Balaji Catering Service </h2>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      <h2>Sri Balaji Catering Service</h2>
        <div class="row">
          <div class="col-50">
            <h3>Package Bill</h3>
            <label for="nm"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="nm" name="firstname" placeholder="">
			<label for="mo"><i class="fa fa-envelope"></i> Mobile</label>
            <input type="text" id="mo" name="mobile" placeholder="">
            <label for="em"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="em" name="email" placeholder="">
            <label for="ad"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="ad" name="address" placeholder="">
            <label for="email"><i class="fa fa-envelope"></i> Transaction Id</label>
            <input type="text" id="transactionid" name="transactionid" placeholder="">

            
              <div class="col-50">
                <label for="edate">Date</label>
                <input type="date" id="edate" name="Date" placeholder="">
              </div>
			  
            </div>
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
	<div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>

</body>
<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>


