<!DOCTYPE html>
<html>
<head>
<style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #555;
    color: white;
}
header{
    padding: 20px;
    color: black;
    background-color: #bec1c6;
    clear: left;
    text-align: left;
}
footer{
    padding: 5px;
    color: black;
    background-color: #bec1c6;
    clear: left;
    text-align: center;
	position: absolute;
    bottom: 0;
	width: 100%;
}
.btn
	{
	 background-color: #d9d9d9;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	}	
</style>
</head>
<body>
 <header>
<h2>online loan applicaton</h2>
</header> 
</div>

<ul class="w3-navbar w3-black">
  <li><a href="javascript:void(0)" onclick="openCity('London')">Car loan</a></li>
  <li><a href="javascript:void(0)" onclick="openCity('Paris')">Home loan</a></li>
  <li><a href="javascript:void(0)" onclick="openCity('Tokyo')">Educational loan</a></li>
</ul>

<div id="London" class="w3-container city">
  <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
  <h2>Car loan</h2>
  <p>Welcome to SBI Home Loans
"The most Preferred Home Loan Provider"
SBI Home Loans come to you on the solid foundation of trust and transparency built in the tradition of SBI
<li>Flexible repayment with tenure up to 30 years</li>
<li>Choose your loan amount and repayment schedule</li>
<li>Apply & get instant approval</p></li>
<a class="btn" href="applyloan.php">Apply Now</a>
</div>

<div id="Paris" class="w3-container city" style="display:none">
  <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
  <h2>Home loan</h2>
 <p>Welcome to SBI Home Loans
"The most Preferred Home Loan Provider"
SBI Home Loans come to you on the solid foundation of trust and transparency built in the tradition of SBI
<li>Flexible repayment with tenure up to 30 years</li>
<li>Choose your loan amount and repayment schedule</li>
<li>Apply & get instant approval</li>
<a class="btn" href="applyloan.php">Apply Now</a>
</p>
</div>

<div id="Tokyo" class="w3-container city" style="display:none">
  <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
  <h2>Educational loan</h2>
  <p>
Loan for pursuing higher education in Select Premier Inidan Institutions
Here comes SBI to fund your education in your dream college
<li>100% Finacing</li>
<li>No Processing Fee</li>
<li>Quick sanction at Designated Campus Branch or more than 5000 Selected Branches all over the country</li>
<li>Repayment period of upto 15 years after Course Period + 12 months of repayment holiday</li>
<a class="btn" href="applyloan.php">Apply Now</a>
</p>
</div>

<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>
 <footer>
&copy; KGiSL-IAS
</footer>
</body>
</html>