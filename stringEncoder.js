/*
These functions will aid in the encoding of options for the administrator on the edit_item.php page.

We will have to agree on a mode of displaying the options on the edit_item.php page as well.
Right now it's the primitive, encoded string. We want to change that! (Which is why we're doing this)
*/

function stringEncoder(optionFormID)
{//This function will encode a string using the form entries.
 //We need to call the stringEncoder as we pass in the form


	/* This is all pretty much pseudo-code. */

	/*  
	    Remember, an encoded string goes:
	    <OptionSetLength>,<OptionSetMinimum>:<OptionSetMaximum>,<OptionSetName>,<Option1>,<Option1Price>...
	*/

	var form = document.getElementByID(optionFormID); 
	//Returns the HTML element whose ID is optionFormID. You will have to get the form entries! Look at getElementByTagName()
	//http://www.w3schools.com/jsref/met_element_getelementsbytagname.asp

	var encodedString = "";


	for(/*each itemSet*/ ; ;)
	{
		encodedString += "Length,";
/*		.
		.
		.              */
		for(/*each option*/ ; ;)
		{
			/*encode more options*/
		}
	}

	//Truncate the last comma if you just add commas to the end of all the options and prices!

	return encodedString;
}


function addOptionSet(optionFormID)
{ //This function will add another set of options when a button is clicked!
	alert("addOptionSet called with " + optionFormID);
}

function addOption(optionSetID)
{ //This function will add another option field when a button is clicked!
	alert("addOption called with " + optionSetID);
}