<?php include('../../includes/header.php'); ?>

<h1>Creating Orders</h1>

<div class="row">
You have two alternatives when Creating Orders. 

<ol>
<li>The createOrder() Method which returns the ID of the Order Created when successful</li>
<li>The SubmitOrder() Method which returns a detailed breakdown of the Order when successful</li>
</ol>

The sequence for pushing an order through the CCP system is as follows:

<ol>
<li>AddCustomer()</li>
<li>SubmitOrder() / createOrder()</li>
<li>getInvoiceSummaryForOrderID()</li>
<li>CreatePayment()</li>
<li>DispatchOrder()</li>
</ol>

</div>

<div class="panel panel-default">
<div class="panel-heading"><a href="AddCustomer.php">AddCustomer()</a></div>
<div class="panel-body"><?php show_source('AddCustomer.php'); ?></div>
</div>

<div class="panel panel-default">
<div class="panel-heading"><a href="SubmitOrder.php">SubmitOrder.php()</a></div>
<?php show_source('SubmitOrder.php'); ?>
</div>


<div class="panel panel-default">
<div class="panel-heading"><a href="AddCustomer.php">getInvoiceSummaryForOrderID()</a></div>
<div class="panel-body"><?php show_source('getInvoiceSummaryForOrderID.php'); ?></div>
</div>

<div class="panel panel-default">
<div class="panel-heading"><a href="CreatePayment.php">CreatePayment()</a></div>
<div class="panel-body"><?php show_source('CreatePayment.php'); ?></div>
</div>


<div class="panel panel-default">
<div class="panel-heading"><a href="CreatePayment.php">CreatePayment()</a></div>
<div class="panel-body"><?php show_source('CreatePayment.php'); ?></div>
</div>



<div class="panel panel-default">
<div class="panel-heading"><a href="CreatePayment.php">DispatchOrder()</a></div>
<div class="panel-body"><?php show_source('DispatchOrder.php'); ?></div>
</div>

<?php include('../../includes/footer.php'); ?>