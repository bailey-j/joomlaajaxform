<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access'); 

// JHtml::_('behavior.keepalive');
// JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
//$jinput = JFactory::getApplication()->input;
?>
<style>
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/*Make circles that indicate the progress of the form */
.step{
	height:15px;
	width:15px;
	margin:0 2px;
	background-color:#000000;
	border:none;
	border-radius:50%;
	display:inline-block;
	opacity:0.4;
}

.step.active{
	opacity:1;
}

/*Mark finished steps*/
.step.finish{
	background-color:#008080;
	opacity:1;
}

</style>

<div>
<h2>Youth and Adult Training for Employment APPLICATION FORM
</h2>
</div>

<div>
<h5>Carefully complete and fill in the form below.
</h5>
</div>

<form action="<?php echo JRoute::_('index.php?option=com_helloworld&layout=edit&Itemid=124' ); ?>" 
	name="adminForm" id="adminForm" method="post" class="formvalidate">


<fieldset>
<?php
$form = JForm::getInstance('helloworld', JPATH_COMPONENT . '/models/forms/helloworld.xml');
$fields = $form->getFieldset('yate_form'); ?>
 <div style="text-align:right;"> 
 <span>Progress: </span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 </div>
<div class="controls span8">
		<!-- TAB ONE-->
		<div class="tab"><strong>Name & Address:</strong>
		<span><p>
		<?php
		echo $this->form->renderField('firstname')." ".$this->form->renderField('midname')."  ".$this->form->renderField('lastname')." ".$this->form->renderField('address');
		 ?></p></span>
		</div>

		<!-- TAB TWO-->
		 <div class="tab"><strong>Date of Birth & Gender:</strong>
		<?php
		 echo $this->form->renderField('dob'); ?>
		<span>
		 <?php 
		echo $this->form->renderField('gender');?> <!-- DROPDOWN-->
		</span>
		 </div>
		 
		 <!-- TAB THREE-->
		<div class="tab"><strong>Identification Numbers:</strong>	 
		<span>
		 <?php 
		echo $this->form->renderField('nid')." ".$this->form->renderField('otherid')." ".$this->form->renderField('nis');?>
		</span>
		 </div>
		 
		 <!-- TAB FOUR-->
		<div class="tab"><strong>Contact Information:</strong>
		<span>
		 <?php 
		echo $this->form->renderField('homenum')." ".$this->form->renderField('mobilenum')." ".$this->form->renderField('email');?>
		</span>
		 </div>
 
		<!-- TAB FIVE--> 
		<div class="tab"><strong>Next of Kin:</strong>
		<span>
		 <?php 
		echo $this->form->renderField('mother')." ".$this->form->renderField('father')." ".$this->form->renderField('guardian')." ".$this->form->renderField('addressnok'); ?>
		</span>
		<div class="span3">
		<?php
		echo $this->form->renderField('nokemail');?>
		</div>
		<div class="span3">
		<?php
		echo $this->form->renderField('nokhomenum');?>
		</div>
		<div class="span3">
		<?php
		echo $this->form->renderField('nokmobnum');?>
		</div>
		 </div>
		 
		 <!-- TAB SIX-->
		<div class="tab"><strong>Education History:</strong>
		<span> <!--DROPDOWN -->
		 <?php 
		echo $this->form->renderField('educlevel');?>
		</span>
		 <strong>Certificates Obtained</strong>
		<span>
		 <?php 
		echo $this->form->renderField('numccslc')." ".$this->form->renderField('numcsec');?>
		</span>
		 </div>
		 
		 <!-- TAB SEVEN--> 
		<div class="tab">
		<div>
		<strong>Employment Status:</strong>
			<!--DROPDOWN -->
		 <?php 
		echo $this->form->renderField('empstatus');?> <!-- DROPDOWN-->
		</div>
		<div>
		<strong>If unemployed, please indicate the length of time unemployed</strong> <!--DROPDOWN -->
		
		 <?php 
		echo $this->form->renderField('unemptime');?>
		</div>
		 </div>
		 
		  <!-- TAB EIGHT-->
		  <div class="tab"><strong>Potential Challenges:</strong>
		<span><strong>Will any of the following circumstances prevent you from attending training regularly</strong>
		 <?php 
		echo $this->form->renderField('challenges');?>
		</span>
		 </div>

		<!-- TAB NINE--> <!--Complete BELOW! ~!~!~!~!~!~!~ -->
		<div class="tab form-horizontal">
		<div class = "form-horizontal">
		<strong>Do you have any children</strong>
		<?php 
		echo $this->form->renderField('childyesno');?> <!-- RADIO-->
		</div>
		
		<div><strong>How many?</strong>
		 <?php 
		echo $this->form->renderField('childnum');?> <!-- RADIO-->
		</div>
		
		<span><strong>Ages?</strong>
		 <?php 
		echo $this->form->renderField('childage');?> <!-- CHECKBOX-->
		</span>
		 </div>
				 
		  <!-- TAB TEN-->
		  <div class="tab"><strong>Indicate your PROGRAMME of choice:</strong>
		
		 <?php 
		echo $this->form->renderField('programchoice');?><!-- DROPDOWN-->
		<p>Programmes will be offered at the four (4) Technical Institutes: Mondays - Thursdays <strong>(4pm - 8pm)</strong></p>
		<p><strong>NB:</strong> Programme offerings may change from time to time.</p>
		
		 </div>
		 
		 <!-- TAB ELEVEN--> <!--Complete BELOW! ~!~!~!~!~!~!~ -->
		  <div class="tab"><strong>Are you a Public Assistance Recipient?</strong>
		
		 <?php 
		echo $this->form->renderField('publicassist');?><!-- DROPDOWN-->
		<p><strong>Others:</strong></p>
		<?php echo $this->form->renderField('otherinstitute')." ".$this->form->renderField('otherprogramme'); ?>
		<p><strong>Today's Date:</strong></p>
		<?php echo $this->form->renderField('date'); ?>
		 </div>
		 
		 
</div> 

	<input type="hidden" name="task" />
	<?php echo JHtml::_('form.token');?>
</fieldset>

	<div>
<!--<input id="nextBtn" name ="submit" type="submit" class="validate btn btn-primary" />-->
<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
<button type="button" id="nextBtn" class="btn btn-primary"  onclick="nextPrev(1)">Next</button>

</div>
</form>	

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
	document.getElementById("nextBtn").type = "submit";
	document.getElementById("nextBtn").setAttribute("onclick", "Joomla.submitbutton('helloworld.save')");
	document.getElementById("nextBtn").setAttribute("class", "validate btn btn-primary");
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
		fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1) && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("adminForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  document.getElementsByClassName("step")[currentTab-1].className += " finish";
  showTab(currentTab);
  
}


function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n){
	//remove the 'active' class of all steps
	var i, x = document.getElementsByClassName("step");
	for (i = 0; i < x.length; i++){
		x[i].className = x[i].className.replace(" active", "");
	}
	
	//.. and add 'active' class to current step only
	x[n].className += " active";
	x[n-1].className += " finish";
}

</script>








