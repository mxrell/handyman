<?php
if (!isset($_SESSION['ADMIN_USERID'])) {
  redirect(web_root."admin/index.php");
}

// Check if the 'id' parameter is present in the URL
if (!isset($_GET['id'])) {
  redirect("index.php");
}

$empid = $_GET['id'];
$employee = new Employee();
$emp = $employee->single_employee($empid);
?>

<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/
}
.star-rating {
  font-size: 0;
}

.star-rating .fa {
  font-size: 30px;
  color: #ccc;
  cursor: pointer;
}

.star-rating .fa:hover,
.star-rating .fa:hover ~ .fa,
.star-rating .fa.active,
.star-rating .fa.active ~ .fa {
  color: #ffd700;
}
.star-rating {
  font-size: 0;
  direction: rtl;
  text-align: left;
}
.star-rating .fa-star.selected {
  color: gold; /* Change the color of the selected stars */
}


</style>
<form action="controller.php?action=update" method="POST">
<div class="col-sm-12 content-header" style="">View Details</div>
<div class="col-sm-6 content-body" >
	<p style="font-size: 20px; font-weight: bold;">Freelancer Information</p>

	<h3><?php echo $emp->F_LNAME. ', ' .$emp->F_FNAME . ' ' . $emp->F_MNAME;?></h3>
	<input type="hidden" name="emp" value="<?php echo $emp->EMPLOYEEID; ?>">
	<ul> 
		<li><b>Job Title : </b><?php echo $emp->POSITION; ?></li>
		<li><b>Payment : </b><?php echo $emp->payment; ?></li>
    <li><b>Address: </b><a href="https://www.google.com/maps/search/<?php echo($emp->F_ADDRESS); ?>" target="_blank"><?php echo ($emp->F_ADDRESS); ?></a></li>
		<li><b>Contact No. : </b><?php echo $emp->F_CONTACTNO;?></li>
		<li><b>Email : </b><a href="mailto:<?php echo $emp->F_EMAILADDRESS ?>"><?php echo $emp->F_EMAILADDRESS ?></a></li>
		<li><b>Sex: </b><?php echo $emp->SEX;?></li>
		<li><b>Age : </b><?php echo $emp->AGE;?></li> 
	</ul>
	<div class="col-sm-12">
    <p><label for="WORKSTATS">Status</label></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="WORKSTATS" id="WORKSTATS">
        <option value="In progress">In progress</option>
        <option value="Completed">Completed</option>
    </select><br><br>
   <label for="RATING">Rating:</label>
<div class="star-rating">
  <span class="fa fa-star checked" data-value="5"></span>
  <span class="fa fa-star checked" data-value="4"></span>
  <span class="fa fa-star checked" data-value="3"></span>
  <span class="fa fa-star checked" data-value="2"></span>
  <span class="fa fa-star checked" data-value="1"></span>
</div>
 <input type="hidden" name="RATING" id="RATING">
<script>
  const stars = document.querySelectorAll(".star-rating .fa-star");

  let selectedValue = 0;

  stars.forEach(function(star) {
    star.addEventListener("click", function() {
      selectedValue = this.getAttribute("data-value");
      updateRating(selectedValue);
      document.getElementById("RATING").value = selectedValue; // Update the value of the hidden input field
    });

    star.addEventListener("mouseover", function() {
      const value = this.getAttribute("data-value");
      updateRating(value);
    });

    star.addEventListener("mouseout", function() {
      updateRating(selectedValue);
    });
  });

  function updateRating(value) {
    stars.forEach(function(star) {
      if (star.getAttribute("data-value") <= value) {
        star.classList.add("checked");
      } else {
        star.classList.remove("checked");
      }

      if (star.getAttribute("data-value") <= selectedValue) {
        star.classList.add("selected");
      } else {
        star.classList.remove("selected");
      }
    });
  }
</script>



    <p><b>Feedback :</b></p>   
    <input type="hidden" name="client" value="<?php echo $singleuser->FULLNAME; ?>">
    <textarea name="REVIEW" style="width: 300px; height: 100px; overflow-x: auto; resize: none;"></textarea>
  </div>
</div> 
<style>
	#smart-button-container {
  display: flex;
  flex-direction: column;
  align-items: left;
}
</style>
<div class="col-sm-6 content-body" >
<p style="font-size: 20px; font-weight: bold;">Payment</p>
<div class="col-sm-6 content-body" ><br>
<div id="smart-button-container">
    <div style="text-align: center"><label for="description"> </label><input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
      <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
    <div style="text-align: center"><label for="amount"> </label><input name="amountInput" type="number" id="amount" value="" ><span> <br>PHP</span></div>
      <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
    <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
      <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
    <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=PHP" data-sdk-integration-source="button-factory"></script>
  <script>
  function initPayPalButton() {
    var description = document.querySelector('#smart-button-container #description');
    var amount = document.querySelector('#smart-button-container #amount');
    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

    var elArr = [description, amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'gold',
        shape: 'rect',
        label: 'paypal',
        layout: 'vertical',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },
      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },
      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
  </script>
</div>
  <div class="col-sm-12 submitbutton text-right"> 
    <button type="submit" name="update" class="btn btn-primary">Update</button>
  </div> 
</form>