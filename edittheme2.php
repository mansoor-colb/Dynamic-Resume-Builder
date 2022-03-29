

<?php
 $data1=$_GET["file"];
 $data="allcv/".$data1;
 $handle = fopen($data, 'r');
 $data = fread($handle,filesize($data));
 




echo $data

?>
<div class="well well-sm" style="width: 40%;margin-left: 8px;float: right;" >
		<ul class="nav nav-tabs">
		  <li ><a data-toggle="tab" href="#cvHeader">Cv Header</a></li>
		  <li class="active"><a data-toggle="tab" href="#menu-cvContent">Cv Content</a></li>
		  <li><a data-toggle="tab" href="#menu-pInfo">Personal Info</a></li>
		  <li><a data-toggle="tab" href="#menu-cvDesign">Cv Design</a></li>
		</ul>

		<div class="tab-content" id="file-name" data-oldname="<?php echo $data1?>">
		  <div id="cvHeader" class="tab-pane fade  ">
		  	<div class="well well-sm">
		    <button class="pull-right btn btn-success" id="download">Save and Download CV</button>
		    <br><br>
		    <table class="table table-hover table-striped">
		    	<thread>
		    	<tr>
		    		<td colspan="4">
					  	<input type="text" id="name" name="name" class="input-sm form-control" placeholder="Type Your Name">
		    		</td>
		    	</tr>
		    	</thread>
		    	<thread>
		    	<tr>
		    	<form id="uploadForm" id="POST" method="POST" action="">
		    		<td>Upload Picture</td>
		    		<td colspan="3">
					  	<input type="file" name="file" id="file" class="input-sm form-control" required>
		    		</td>
		    	</form>
		    	</tr>
		    	</thread>
		    	<thread>
		    	<tr>
		    		<td>Picture Setting</td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="width" placeholder="Width"></td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="height" placeholder="height"></td>
		    		<td><button class="btn-primary btn btn-sm" id="radius">Cut Radius</button>
		    			<button class="btn-primary btn btn-sm" id="resetRadius" style="display: none;">Reset Radius</button></td>
		    	</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<th colspan="4" class="center">About Me</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4" class="center">
		    				<textarea id="aboutme" class="form-control" style="resize: none;" placeholder="Write About Yourself/Objective etc"></textarea>
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<th colspan="4" class="center">Contact Me</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input id="phone1" type="number" class="form-control input-sm" name="number1" placeholder="Phone no 1">
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input id="phone2" type="number" class="form-control input-sm" name="number2" placeholder="Phone no 2">
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<textarea id="address" class="form-control" style="resize: none;" placeholder="Write Your address"></textarea>
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	
		    	<thread>
		    		<tr>
		    			<th class="center" colspan="4">Skills</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill1" name="skill1" class="form-control input-sm" placeholder="Write Skill 1">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill2" class="form-control input-sm" placeholder="Write Skill 2 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill3" class="form-control input-sm" placeholder="Write Skill 3 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill4" class="form-control input-sm" placeholder="Write Skill 4 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill5" class="form-control input-sm" placeholder="Write Skill 5 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    </table>
		  	</div>
		  </div>
		  <div id="menu-cvContent" class="tab-pane fade in active">
		    <div class="Well well-sm">
		    	<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#edu1">Education 1</a></li>
				  <li><a data-toggle="tab" id="eduTab2" href="#edu2">Edu 2</a></li>
				  <li><a data-toggle="tab" id="eduTab3" href="#edu3">Edu 3</a></li>
				  <li><a data-toggle="tab" id="eduTab4" href="#edu4">Edu 4</a></li>
				  <li><a data-toggle="tab" id="eduTab5" href="#edu5">Edu 5</a></li>
				  <li><a data-toggle="tab" id="eduTab6" href="#edu6">Edu 6</a></li>
				</ul>

				<div class="tab-content">
				  <div id="edu1" class="tab-pane fade in active">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 1 </th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu1name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu1py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu1marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu2" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 2 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn2">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu2name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu2py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu2marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu3" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 3 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn3">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu3name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu3py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu3marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 4 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn4">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu4name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu4py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu4marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 5 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn5">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu5name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu5py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu5insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu5marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 6 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn6">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu6name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu6py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu6marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				</div>
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#Exp1">Experience 1</a></li>
				  <li><a data-toggle="tab" href="#Exp2" id="expTab2">Exp 2</a></li>
				  <li><a data-toggle="tab" href="#Exp3" id="expTab3">Exp 3</a></li>
				  <li><a data-toggle="tab" href="#Exp4" id="expTab4">Exp 4</a></li>
				  <li><a data-toggle="tab" href="#Exp5" id="expTab5">Exp 5</a></li>
				  <li><a data-toggle="tab" href="#Exp6" id="expTab6">Exp 6</a></li>
				</ul>

				<div class="tab-content">
				  <div id="Exp1" class="tab-pane fade in active">

					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 1</th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp1name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp1start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp1leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
			    		<button class="btn btn-primary btn-sm btn-block" id="hideExpBtn">Hide/Show Experience in Cv</button>
				  </div>
				  <div id="Exp2" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 2 <button class="pull-right btn btn-sm btn-danger" id="expBtn2">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp2name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp2start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp2leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp3" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 3 <button class="pull-right btn btn-sm btn-danger" id="expBtn3">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp3name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp3start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp3leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 4 <button class="pull-right btn btn-sm btn-danger" id="expBtn4">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp4name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp4start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp4leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 5 <button class="pull-right btn btn-sm btn-danger" id="expBtn5">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp5name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp5start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp5insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp5leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 6 <button class="pull-right btn btn-sm btn-danger" id="expBtn6">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp6name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp6start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp6leave"></td>
			    		</tr>
			    		</thread>
			    		</table>
				  </div>
			    </div>
			    <br>
			    
			    <table class="table table-striped table-hover">
			    	<thread>
			    		<tr>
			    			<th class="center">Languages <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn">Hide/Show</span></th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Languages" id="langText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<th class="center">Add Custom Tab <span class="pull-right btn btn-danger btn-sm" id="hideCustomBtn">Hide/Show</span> </th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<input type="text" name="" class="form-control" placeholder="Write Custom Heading" id="customHead">
			    			</td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Write custom Detail" id="customText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>
			    </table>
		  </div>
		</div>
		<div id="menu-pInfo" class="tab-pane fade">
			<div class="well well-sm">
				<table class="table table-striped table-hover">
			    	<thread>
			    		<tr>
			    			<th colspan="3" class="center">Personal Information</th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key1"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value1"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn2">Hide/Show</button></td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key2"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value2"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn2">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key3"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value3"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn3">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key4"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value4"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn4">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key5"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value5"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn5">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key6"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value6"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn6">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key7"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value7"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn7">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key8"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value8"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn8">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key9"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value9"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn9">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key10"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value10"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn10">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td colspan="2">
			    				<button class="btn btn-sm btn-primary btn-block" id="hidePersonalBtn">Hide/Show Personal Information Tab from CV</button>
			    			</td>
			    		</tr>
			    	</thread>
			    </table>
			</div>
		</div>
		  <div id="menu-cvDesign" class="tab-pane fade">
		    <div class="well well-sm">
		    	<table class="table table-striped table-hover">
		    		<thread>
		    			<tr>
		    				<th class="center" colspan="2">Color Control</th>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Background</td>
		    				<td><input type="color" name="" id="headerBg" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Photo Background Color</td>
		    				<td><input type="color" name="" id="photoBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Name Text Color</td>
		    				<td><input type="color" name="" id="nameColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Cover Background</td>
		    				<td><input type="color" name="" id="coverBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Heading  Color</td>
		    				<td><input type="color" name="" id="headCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Details  Color</td>
		    				<td><input type="color" name="" id="detailCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">CV Body Background</td>
		    				<td><input type="color" name="" id="cvBodyBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">CV Body Text Color</td>
		    				<td><input type="color" name="" id="cvBodyColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>


		    	</table>
		    </div>
		  </div>
		</div>
	</div>
</div>
<div id="dialog" style="z-index: 2;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black">
			<div class="panel-heading">
				What you want?
			</div>
			<div class="panel-body">
				<button class="btn btn-block btn-success " id="saveCv"><i class="pull-left fa fa-save fa-fw"></i >Save CV</button>
				<button class="btn btn-block btn-success " id="saved" disabled style="display: none;"><i class="pull-left fa fa-save fa-fw"></i >Saved</button>
						<p style="display:flex;justify-content:center;align-items:center;flex-direction:column;padding:10px;letter-spacing:1px;">
						<span id="save-resume">Click Save to Download and Share resume </span>
						<span id="share-link"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></span>
			</p>
				<button class="btn btn-block btn-primary "id="download-resume" style="display:none;"><i class="pull-left fa fa-edit fa-fw"></i >Download resume</button><br> 
				<a href='index.php' style="text-decoration: none"><button class="btn btn-block btn-danger "><i class="pull-left fa fa-home fa-fw"></i >Goto HOME</button></a>

			</div>
			<div class="panel-footer">
			Goto Home without saving will discard your changes 
			</div>
		</div>
	</div>
</div>
<div id="cvUploadDialog" style="z-index: 1;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black;position:relative">
		<div class="close-upload-cv"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
			<div class="panel-heading">
				Type Cv Name
			</div>
			<div class="panel-body">
				<input type="text" required class="form-control" id="cvNameInput" placeholder="Type Cv Name" style="margin-bottom: 5px">
				<button class="btn btn-block btn-success bt-sm " id="uploadCv"><i class="pull-left fa fa-save fa-fw"></i >Upload CV</button>
				

			</div>
			<div class="panel-footer">
				Cv will be uploaded to database for later use. 
			</div>
		</div>
	</div>
</div>

</body>
</html>

<script>
	$(document).ready(function()
	{var cvName;
        $(".cvBody").attr("style","width:55%");
		$("#download-resume").click(function(){
	$(".cvBody").css("width","100%");
			var some = $("#get").html();
			var some2 = $("#some2").html();
			var pdfname=$("#cvname").html();
			pdf(cvName,some);


})
//for downloding cv
		$("#download").click(function()
		{
			$("#dialog").fadeIn();
			
			// $.post({
				
				// 	url:'buildcv.php',
				// 	data:{data : some , data2 : some2}
				// }).done(function(result)
				// {
					openExitModel();
			
			// })
		});
		function pdf(pdfname,some){
				alert(1);

            var opt = {
                margin: 1,
                filename:`Online Resume-${pdfname}.pdf`,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            };
            html2pdf().from(some).set(opt).save();
			$(".cvBody").css({"width":"55%"});
			}
//for saving cv
	//dialog pr save wale btn pr click k lye bad yeh chalna
	$("#saveCv").click(function()
	{		$("#dialog").hide();
			$("#cvUploadDialog").fadeIn();
	});

	$(".close-upload-cv").click(function(){
	$("#dialog").fadeIn();
	$("#cvUploadDialog").hide();

})
	//ab cvNameDialog pr save Wale btn pr click 
	$("#uploadCv").click(function()
	{
	   cvName = $("#cvNameInput").val();
	   if(cvName!=""){
		$(".cvBody").css("width","100%");
		var cvData = $("#get").html();
		var customestyle = $("#styleback").html();
		var theme="theme2";
        var file_name=$("#file-name").data("oldname");
		// alert(customestyle);
		// alert(file_name);
	
			
			$.post({

				url:'edit-save.php',
				data:{data : cvData , name : cvName,style:customestyle,theme:"theme2",file_old:file_name}
			}).done(function(result)
			{
            // $.ajax({
            //     type: "POST",
            //     url: "rename-edit-file.php",
            //     data:{old:file_name,new_name:result},
            //     success: function (response) {
            //         if(response==1){
            //         alert("same link");}
            //         else{
            //             alert("nope");
            //         }
            //     }
            // });
				$("#cvUploadDialog").hide();
				$("#dialog").fadeIn();
				$("#download-resume").show();
				$("#saveCv").hide();
				$("#saved").show();
				$(".cvBody").css({"width":"55%"});
				$("#share-link").html(`<i id='share' style='cursor:pointer;'class='fa fa-share-alt-square' aria-hidden='true'></i>`);
				$("#save-resume").html("click on icon to share Resume");
				$("#share-link").click(function(){


let desp="HEY, have a look ay my resume";
let title=" ONline REsume Created at online resume";
let url=`http://localhost/cv/allcv/${result}`;
// alert();
share(title,desp,url);




})

				// alert(result);
			})
		}
		else{
			alert("Please type cv name");
		
		}
	});

function share(titl,desp,url){

if(navigator.share){
	var url1=url;
	var data=titl;
	var description= desp;

	navigator.share({
		title:data,
		text:description,
		url:url1,
	})
}
else{
	alert("error");
}
}
	//closing dialg model
	$("#closeDialog").click(function(){$("#dialog").fadeOut();$("dialogCover").hide();});
	});
	function openExitModel()
	{
		$("#dialog").slideDown();
		$("#saveCv").show();
		$("#saved").hide();

	}
</script>