
function onSubmit_Feedback(){
	
	if (document.Enquiry_Feedback.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.Enquiry_Feedback.contact_person.focus()
		return false;
	}
	
	if (document.Enquiry_Feedback.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry_Feedback.telNo.focus()
		return false;
	}
	if (document.Enquiry_Feedback.telNo.value!="")
	{
		var tel= parseInt(document.Enquiry_Feedback.telNo.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number Correctly");
				document.Enquiry_Feedback.telNo.focus();
				return false
				} 
	}
		
	if (document.Enquiry_Feedback.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry_Feedback.from.focus()
		return false;
	}
    if (document.Enquiry_Feedback.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry_Feedback.from.focus()
		return false;
	}
	var tempEmail= document.Enquiry_Feedback.from.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry_Feedback.from.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address again?");
		document.Enquiry_Feedback.from.focus();
		return false
	}
	}

    if (document.Enquiry_Feedback.Tour_Name.value  == "")
	{
		alert("Please enter Tour Name.");
		document.Enquiry_Feedback.Tour_Name.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Manager.value  == "")
	{
		alert("Please enter Tour Manager.");
		document.Enquiry_Feedback.Tour_Manager.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Sales_Executive_Who_Booked_Tour.value  == "")
	{
		alert("Please enter Sales Executive Who Booked Tour.");
		document.Enquiry_Feedback.Sales_Executive_Who_Booked_Tour.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Date.value  == "")
	{
		alert("Please enter Tour Date.");
		document.Enquiry_Feedback.Tour_Date.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Booked_At.value  == "")
	{
		alert("Please enter Tour Booked At.");
		document.Enquiry_Feedback.Tour_Booked_At.focus()
		return false;
	}

	// if (document.Enquiry_Feedback.requirement_details.value  == "")
	// {
	// 	alert("Please enter Requirement Details .");
	// 	document.Enquiry_Feedback.requirement_details.focus()
	// 	return false;
	// }
	
		var tel= parseInt(document.Enquiry_Feedback.TelNo_Reference_1.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number of First Reference Correctly");
				document.Enquiry_Feedback.TelNo_Reference_1.focus();
				return false
				} 
	
		
	
	var tempEmail= document.Enquiry_Feedback.Email_Reference_1.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry_Feedback.Email_Reference_1.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address of First Reference  again?");
		document.Enquiry_Feedback.Email_Reference_1.focus();
		return false
	}
	}

	var tel= parseInt(document.Enquiry_Feedback.TelNo_Reference_2.value); 
	if (isNaN(tel)) 
		{  
		alert("Enter Telephone Number of Second Reference Correctly");
		document.Enquiry_Feedback.TelNo_Reference_2.focus();
		return false
		} 



var tempEmail= document.Enquiry_Feedback.Email_Reference_2.value;
var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
var check=/@[\w\-]+\./;
var checkend=/\.[a-zA-Z]{2,3}$/;
if (document.Enquiry_Feedback.Email_Reference_2.value!="")
{
if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
{
alert("Can you check your Email Address of Second Reference again?");
document.Enquiry_Feedback.Email_Reference_2.focus();
return false
}
}
		


}
