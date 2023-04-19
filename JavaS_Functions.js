function genPDF() {
	  
	var doc = new jsPDF();
	
   // var specialElementHandlers = {
   //     '#hidediv' : function(element,render) {return true;}
   // };
    var options = { pagesplit: true,'background': '#fff', 'width':170 };
	doc.fromHTML($('#Filled').get(0), 20,10, options,{
        		//'elementHandlers': specialElementHandlers
    });        
	
	doc.save('Test.pdf');
	
}


//idElement is for the ID of the element on the html page you want to show the code in
//phpPage is the passed in php page name like connecting a JS file to html
//urlParam is for what you want to pass into the php page
//This function passes in variables to the php
function AJAXFunction(idElement, phpPage, urlParam) {
	//set the parameter from URL
	urlParam = "?q=" + urlParam;

	//connect the code the the php page by using this function
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			document.getElementById(idElement).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", phpPage + urlParam, true);
	xhttp.send();
}

function AJAXFunction2(idElement, phpPage, urlParam) {
	//set the parameter from URL
	urlParam = "?P=" + urlParam;

	//connect the code the the php page by using this function
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			document.getElementById(idElement).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", phpPage + urlParam, true);
	xhttp.send();
}


//This function does not pass in a variable to the php page
function AJAX_BlankFunction(idElement, phpPage) {

//connect the code the the php page by using this function
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(idElement).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", phpPage, true);
	xhttp.send();
}

function Main_P(){
	location.replace("http://localhost/Work_Files/Linked_PHP_Pages/MainPage/MainPage.php");
}

function Fill_MEDICAL_H_FORM(){
	var ID = document.getElementById("Username").value;
	if(ID != ""){
	localStorage.setItem("Search_Value", ID);
	var name = localStorage.getItem("Search_Value");
	AJAXFunction2('patient_INFO', 'Medical_History_Submit.php', name);
	}
	else{
		document.getElementById("patient_INFO").value = "Please enter a valid name!";
	}

}

function Fill_MEDICAL_H_FORMShow_ALL(){
	AJAXFunction2('patient_INFO', 'Show_ALL.php', '');

}


function Show_info(){
	var Name = "GetName";
	var USER = document.getElementById("Username").value;
	localStorage.setItem("Search_Value", Name + ";" + USER);
	var SendValue = localStorage.getItem("Search_Value");
	var SendValue = Name + ";" + USER;
	AJAXFunction2('patient_INFO', 'Select_USER.php', SendValue);
}

function PHP_BUTTON_ValC(){
	var GET_ID = document.getElementById("Testing123").innerHTML;

			var ID = document.getElementById(GET_ID).value;
			localStorage.setItem("Search_Value2", ID);
			var name = localStorage.getItem("Search_Value2");
			document.getElementById("Val2").innerHTML = name;
}

function Remove_FILE_INFO(ID, ID2){
	name = document.getElementById(ID).innerHTML;
	Username = document.getElementById(ID2).innerHTML;
	REMOVE = name + ";" + Username;
	AJAXFunction2('patient_INFO', 'Remove_USER.php', REMOVE);
}

function Hide_Show(SelectedID){
  var ID = document.getElementById(SelectedID);
  
  if (ID.style.display === "none") {
    ID.style.display = "block";
  } else {
    ID.style.display = "none";
  }
}

function SendMail(){
E_ADRESS = document.getElementById("Email_ADRESS").value;
AJAXFunction2('Email', 'SendMail.php', E_ADRESS);
}

//Get the Value from selected radio button id
function TestRadioValue(ID){
var radios = document.getElementsByName(ID);
var Value = "";

for (var i = 0, length = radios.length; i < length; i++) {
  if (radios[i].checked) {
    Value = radios[i].value;
    break;
  }
}
return Value;
}

//Get the values from the checked off checkboxes
function TestCheckBoxValue(ID){
var Checkbox = document.getElementsByName(ID);
var Value = "";

for (var i = 0, length = Checkbox.length; i < length; i++) {
  if (Checkbox[i].checked) {
    Value = Checkbox[i].value + ";" + Value;
  }
}
return Value;
}

function TestCheckBoxValue2(ID){
	var T2 = "";
	var T = document.getElementById(ID).checked;
	if(T){
		var T2 = document.getElementById(ID).value + "<br />";
	}
	return T2;
}

//Submit the Medical History to the database
function Submit_Medical_History(){
	//Get patient personal info
	var Name_Title = document.getElementById("Name_Title").value;
	var P_birth = document.getElementById("P_birth").value;
	var Name_Emrg = document.getElementById("Name_Emrg").value;
	var Relationship_Emrg = document.getElementById("Relationship_Emrg").value;
	var Emrg_Phone = document.getElementById("Emrg_Phone").value;
	var FD_Name = document.getElementById("FD_Name").value;
	var phoneFD = document.getElementById("phoneFD").value;
	var Med_Spec_Name = document.getElementById("Med_Spec_Name").value;
	var AREAOFS = document.getElementById("AREAOFS").value;
	var phone = document.getElementById("phone").value;
	
	//Answer med questions
	var Q1 = TestRadioValue("Q1");
	var Q1_2 = document.getElementById("Q1_2").value;
	var Q2 = document.getElementById("Q2").value;
	var Q3 = TestRadioValue("Q3");
	var Q3_2 = document.getElementById("Q3_2").value;
	var Q4 = TestRadioValue("Q4");
	var Q4_2 = document.getElementById("Q4_2").value;
	var Q5 = TestRadioValue("Q5");
	var Q5_2 = TestRadioValue("Q5_2");
	var Q5_3 = document.getElementById("Q5_3").value;
	var Q6 = TestRadioValue("Q6");
	var Q6_2 = document.getElementById("Q6_2").value;
	var Q7 = TestRadioValue("Q7");
	var Q8 = TestRadioValue("Q8");
	var Q9 = TestRadioValue("Q9");
	var Q10 = TestRadioValue("Q10");
	var Q11 = TestRadioValue("Q11");
	var Q12 = TestRadioValue("Q12");
	var Q13 = TestRadioValue("Q13");
	var Q14 = TestRadioValue("Q14");
	var Q15_1 = TestCheckBoxValue2("Q15_1");
	var Q15_2 = TestCheckBoxValue2("Q15_2");
	var Q15_3 = TestCheckBoxValue2("Q15_3");
	var Q15_4 = TestCheckBoxValue2("Q15_4");
	var Q15_5 = TestCheckBoxValue2("Q15_5");
	var Q15_6 = TestCheckBoxValue2("Q15_6");
	var Q15_7 = TestCheckBoxValue2("Q15_7");
	var Q15_8 = TestCheckBoxValue2("Q15_8");
	var Q15_9 = TestCheckBoxValue2("Q15_9");
	var Q15_10 = TestCheckBoxValue2("Q15_10");
	var Q15_11 = TestCheckBoxValue2("Q15_11");
	var Q15_12 = TestCheckBoxValue2("Q15_12");
	var Q15_13 = TestCheckBoxValue2("Q15_13");
	var Q15_14 = TestCheckBoxValue2("Q15_14");
	var Q15_15 = TestCheckBoxValue2("Q15_15");
	var Q15_16 = TestCheckBoxValue2("Q15_16");
	var Q15_17 = TestCheckBoxValue2("Q15_17");
	var Q15_18 = TestCheckBoxValue2("Q15_18");
	var Q15_19 = TestCheckBoxValue2("Q15_19");
	var Q15_20 = TestCheckBoxValue2("Q15_20");
	var Q15 = Q15_1 + Q15_2 + Q15_3 + Q15_4 + Q15_5 + Q15_6 + Q15_7 + Q15_8 + Q15_9 + Q15_10 + Q15_11 + Q15_12 + Q15_13 + Q15_14 + Q15_15 + Q15_16 + Q15_17 + Q15_18 + Q15_19 + Q15_20;
	var Q16 = TestRadioValue("Q16");
	var Q17 = TestRadioValue("Q17");
	var Q18 = TestRadioValue("Q18");
	var Q19 = TestRadioValue("Q19");
	var Q20 = TestRadioValue("Q20");
	//Get the user agreement
	var Name_Title_bottom = document.getElementById("Name_Title_bottom").value;
	
	var Date_bottom = document.getElementById("Date_bottom").value;
	var DENTIST_Bottom = document.getElementById("DENTIST_Bottom").value;
	var Date_bottom2 = document.getElementById("Date_bottom2").value;
	
	//Fillout the other form with entered info
	//Show the patients personal info
	document.getElementById("Name_TitleAnswer").innerHTML = Name_Title;
	document.getElementById("P_birthAnswer").innerHTML = P_birth;
	document.getElementById("Name_EmrgAnswer").innerHTML = Name_Emrg;
	document.getElementById("Relationship_EmrgAnswer").innerHTML = Relationship_Emrg;
	document.getElementById("Emrg_PhoneAnswer").innerHTML = Emrg_Phone;
	document.getElementById("FD_NameAnswer").innerHTML = FD_Name;
	document.getElementById("phoneFDAnswer").innerHTML = phoneFD;
	document.getElementById("Med_Spec_NameAnswer").innerHTML = Med_Spec_Name;
	document.getElementById("AREAOFSAnswer").innerHTML = AREAOFS;
	document.getElementById("phoneMSAnswer").innerHTML = phone;
	
	//Answered med questions
	document.getElementById("Answer_1").innerHTML = Q1;
	document.getElementById("Answer_1_2").innerHTML = Q1_2;
	document.getElementById("Answer_2").innerHTML = Q2;
	document.getElementById("Answer_3").innerHTML = Q3;
	document.getElementById("Answer_3_2").innerHTML = Q3_2;
	document.getElementById("Answer_4").innerHTML = Q4;
	document.getElementById("Answer_4_2").innerHTML = Q4_2;
	document.getElementById("Answer_5").innerHTML = Q5;
	document.getElementById("Answer_5_2").innerHTML = Q5_2;
	document.getElementById("Answer_5_3").innerHTML = Q5_3;
	document.getElementById("Answer_6").innerHTML = Q6;
	document.getElementById("Answer_6_2").innerHTML = Q6_2;
	document.getElementById("Answer_7").innerHTML = Q7;
	document.getElementById("Answer_8").innerHTML = Q8;
	document.getElementById("Answer_9").innerHTML = Q9;
	document.getElementById("Answer_10").innerHTML = Q10;
	document.getElementById("Answer_11").innerHTML = Q11;
	document.getElementById("Answer_12").innerHTML = Q12;
	document.getElementById("Answer_13").innerHTML = Q13;
	document.getElementById("Answer_14").innerHTML = Q14;
	//Clean the checkbox value
	document.getElementById("Answer_15").innerHTML = Q15;
	
	document.getElementById("Answer_16").innerHTML = Q16;
	document.getElementById("Answer_17").innerHTML = Q17;
	document.getElementById("Answer_18").innerHTML = Q18;
	document.getElementById("Answer_19").innerHTML = Q19;
	document.getElementById("Answer_20").innerHTML = Q20;

	//Fillout the user agreement
	document.getElementById("Name_Title_bottomAnswer").innerHTML = Name_Title_bottom;
	document.getElementById("Date_bottomAnswer").innerHTML = Date_bottom;
	document.getElementById("DENTIST_BottomAnswer").innerHTML = DENTIST_Bottom;
	document.getElementById("Date_bottom2Answer").innerHTML = Date_bottom2;	
	
}


//Submit the Dental History to the database
function Submit_Dental_History(){
	//Get patient personal info
	var Name_Title = document.getElementById("Name_Title").value;
	var P_birth = document.getElementById("P_birth").value;
	var P_Address = document.getElementById("P_Address").value;
	var P_HomePhone = document.getElementById("P_HomePhone").value;
	var P_Cell = document.getElementById("P_Cell").value;
	var P_workPhone = document.getElementById("P_workPhone").value;
	var P_Employment = document.getElementById("P_Employment").value;
	var P_Insurance_Company = document.getElementById("P_Insurance_Company").value;
	var P_Ins_Policy = document.getElementById("P_Ins_Policy").value;
	var P_ID = document.getElementById("P_ID").value;
	
	//Get signatures
	var P_Sign = document.getElementById("P_Sign").value;
	var P_Sign_Date = document.getElementById("P_Sign_Date").value;
	var Dentist_Sign = document.getElementById("Dentist_Sign").value;
	var Dentist_Date = document.getElementById("Dentist_Date").value;
	
	
	//Answer dental history questions
	var Q1 = document.getElementById("Q1").value;
	var Q2_1 = document.getElementById("Q2_1").value;
	var Q2_2 = document.getElementById("Q2_2").value;
	var Q3 = document.getElementById("Q3").value;
	
	var Q4_1 = TestCheckBoxValue2("Q4_1");
	var Q4_2 = TestCheckBoxValue2("Q4_2");
	var Q4_3 = TestCheckBoxValue2("Q4_3");
	var Q4_4 = TestCheckBoxValue2("Q4_4");
	var Q4_5 = TestCheckBoxValue2("Q4_5");
	var Q4_6 = TestCheckBoxValue2("Q4_6");
	var Q4_7 = TestCheckBoxValue2("Q4_7");
	var Q4 = Q4_1 + Q4_2 + Q4_3 + Q4_4 + Q4_5 + Q4_6 + Q4_7;
	
	var Q5_1 = TestCheckBoxValue2("Q5_1");
	var Q5_2 = TestCheckBoxValue2("Q5_2");
	var Q5_3 = TestCheckBoxValue2("Q5_3");
	var Q5_4 = TestCheckBoxValue2("Q5_4");
	var Q5_5 = TestCheckBoxValue2("Q5_5");
	var Q5_6 = TestCheckBoxValue2("Q5_6");
	var Q5_7 = TestCheckBoxValue2("Q5_7");
	var Q5_8 = TestCheckBoxValue2("Q5_8");
	var Q5_9 = TestCheckBoxValue2("Q5_9");
	var Q5_10 = TestCheckBoxValue2("Q5_10");
	var Q5_11 = TestCheckBoxValue2("Q5_11");
	var Q5 = Q5_1 + Q5_2 + Q5_3 + Q5_4 + Q5_5 + Q5_6 + Q5_7 + Q5_8 + Q5_9 + Q5_10 + Q5_11;
	
	
	var Q6 = TestRadioValue("Q6");
	var Q7 = TestRadioValue("Q7");
	var Q8 = TestRadioValue("Q8");
	var Q9 = document.getElementById("Q9").value;
	
	
	//Fillout the other form with entered info
	//Show the patients personal info
	document.getElementById("Name_TitleAnswerDH").innerHTML = Name_Title;
	document.getElementById("P_birthAnswerDH").innerHTML = P_birth;
	document.getElementById("P_AddressAnswerDH").innerHTML = P_Address;
	document.getElementById("P_HomePhoneAnswerDH").innerHTML = P_HomePhone;
	document.getElementById("P_CellAnswerDH").innerHTML = P_Cell;
	document.getElementById("P_workPhoneAnswerDH").innerHTML = P_workPhone;
	document.getElementById("P_EmploymentAnswerDH").innerHTML = P_Employment;
	document.getElementById("P_Insurance_CompanyAnswerDH").innerHTML = P_Insurance_Company;
	document.getElementById("P_Ins_PolicyAnswerDH").innerHTML = P_Ins_Policy;
	document.getElementById("P_IDAnswerDH").innerHTML = P_ID;
	
	//Show signatures
	document.getElementById("P_SignAnswerDH").innerHTML = P_Sign;
	document.getElementById("P_Sign_DateAnswerDH").innerHTML = P_Sign_Date;
	document.getElementById("Dentist_SignAnswerDH").innerHTML = Dentist_Sign;
	document.getElementById("Dentist_DateAnswerDH").innerHTML = Dentist_Date;
	
	//Show the answers
	document.getElementById("Answer_1").innerHTML = Q1;
	document.getElementById("Answer_2_1").innerHTML = Q2_1;
	document.getElementById("Answer_2_2").innerHTML = Q2_2;
	document.getElementById("Answer_3").innerHTML = Q3;
	document.getElementById("Answer_4").innerHTML = Q4;
	document.getElementById("Answer_5").innerHTML = Q5;
	document.getElementById("Answer_6").innerHTML = Q6;
	document.getElementById("Answer_7").innerHTML = Q7;
	document.getElementById("Answer_8").innerHTML = Q8;
	document.getElementById("Answer_9").innerHTML = Q9;
		
	
}


//Submit the Covid 19 Screening to the database
function Submit_COVID_Questions(){
	//Get staff info
	var Staff_S = document.getElementById("Staff_S").value;
	var who_Answered = TestRadioValue("who_Answered");
	var Specify = document.getElementById("Specify").value;
	var Contact_M = TestRadioValue("Contact_M");
	var Contact_M_2 = document.getElementById("Contact_M_2").value;
	
	
	//Get patient personal info
	var P_Name = document.getElementById("P_Name").value;
	
	//Answer first Covid Questions
	var CheckboxQ1_1 = document.getElementById("Q1_1");
	var CheckboxQ1_2 = document.getElementById("Q1_2");
	var CheckboxQ1_3 = document.getElementById("Q1_3");
	var CheckboxQ1_4 = document.getElementById("Q1_4");
	var Q1_1, Q1_2, Q1_3, Q1_4;
	var i = 0;
	
		while(i < 4){
			if (CheckboxQ1_1.checked) {
				Q1_1 = CheckboxQ1_1.value;
			}else{
				Q1_1 = "No";
			}
			
			if(CheckboxQ1_2.checked){
				Q1_2 = CheckboxQ1_2.value;
			}else{
				Q1_2 = "No";
			}
			
			if(CheckboxQ1_3.checked){
				Q1_3 = CheckboxQ1_3.value;
			}else{
				Q1_3 = "No";
			}
			
			if(CheckboxQ1_4.checked){
				Q1_4 = CheckboxQ1_4.value;
			}else{
				Q1_4 = "No";
			}
			i = i + 1;
		}
	
	//Answer second covid questions
	var CheckboxQ2_1 = document.getElementById("Q1_1");
	var CheckboxQ2_2 = document.getElementById("Q1_2");
	var CheckboxQ2_3 = document.getElementById("Q1_3");
	var CheckboxQ2_4 = document.getElementById("Q1_4");
	var Q2_1, Q2_2, Q2_3, Q2_4;
	var i = 0;
	
		while(i < 4){
			if (CheckboxQ2_1.checked) {
				Q2_1 = CheckboxQ2_1.value;
			}else{
				Q2_1 = "No";
			}
			
			if(CheckboxQ2_2.checked){
				Q2_2 = CheckboxQ2_2.value;
			}else{
				Q2_2 = "No";
			}
			
			if(CheckboxQ2_3.checked){
				Q2_3 = CheckboxQ2_3.value;
			}else{
				Q2_3 = "No";
			}
			
			if(CheckboxQ2_4.checked){
				Q2_4 = CheckboxQ2_4.value;
			}else{
				Q2_4 = "No";
			}
			i = i + 1;
		}
		
	//Fill in the printable form personal info
	document.getElementById("Staff_SAnswer").innerHTML = Staff_S;
	document.getElementById("who_AnsweredAnswer").innerHTML = who_Answered;
	document.getElementById("SpecifyAnswer").innerHTML = Specify;
	document.getElementById("Contact_MAnswer").innerHTML = Contact_M;
	document.getElementById("Contact_M_2Answer").innerHTML = Contact_M_2;
	document.getElementById("P_NameAnswer").innerHTML = P_Name;
	
	
	//Answer the COVID questions pre-screen
	document.getElementById("Answer1_1").innerHTML = Q1_1;
	document.getElementById("Answer1_2").innerHTML = Q1_2;
	document.getElementById("Answer1_3").innerHTML = Q1_3;
	document.getElementById("Answer1_4").innerHTML = Q1_4;

	//in-office COVID questions
	document.getElementById("Answer2_1").innerHTML = Q2_1;
	document.getElementById("Answer2_2").innerHTML = Q2_2;
	document.getElementById("Answer2_3").innerHTML = Q2_3;
	document.getElementById("Answer2_4").innerHTML = Q2_4;
	
}


//Submit the Privacy info to the database
function Submit_Privacy_Consent(){
	//Get patient personal info
	var Gard_Name_Title = document.getElementById("Gard_Name_Title").value;
	var P_sign_Date = document.getElementById("P_sign_Date").value;
	var Name_Title = document.getElementById("Name_Title").value;
	
	//Fillout the other form with entered info
	//Show the patients personal info
	document.getElementById("Gard_Name_TitleAnswer").innerHTML = Gard_Name_Title;
	document.getElementById("P_sign_DateAnswer").innerHTML = P_sign_Date;
	document.getElementById("Name_TitleAnswer").innerHTML = Name_Title;
		
	
}