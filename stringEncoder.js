/*
These functions will aid in the encoding of options for the administrator on the edit_item.php page.

We will have to agree on a mode of displaying the options on the edit_item.php page as well.
Right now it's the primitive, encoded string. We want to change that! (Which is why we're doing this)
*/

function stringEncoder(optionFormID)
{
	/*  
	    Remember, an encoded string goes:
	    <OptionSetLength>,<OptionSetMinimum>:<OptionSetMaximum>,<OptionSetName>,<Option1>,<Option1Price>...
	*/

	var itemSets = document.getElementsByTagName("Table");
	var form = document.getElementById(optionFormID);
	if (itemSets.length == 1)
	{
		return true;
	}

	var encodedString = "";

	for(var i = 1; i<itemSets.length; i++)
	{
		var rows = itemSets[i].getElementsByTagName("tr");
		var setLength = rows.length-4;

		encodedString += setLength+",";

		var min = rows[1].getElementsByTagName("td")[0].getElementsByTagName("input")[0].value;
		var max = rows[1].getElementsByTagName("td")[0].getElementsByTagName("input")[1].value;

		if(!min || !max || isNaN(parseInt(min)) || isNaN(parseInt(max)) || parseInt(min) > parseInt(max))
		{
			alert("You have an invalid range in the item set number " + i);
			return false;
		}
		var range = min+":"+max;

		encodedString += range+",";

		var itemSetName = rows[0].getElementsByTagName("th")[1].getElementsByTagName("input")[0].value;
		if(!itemSetName)
		{
			alert("You have an undefined itemSetName in item set "+ i);
			return false;
		}
		encodedString += itemSetName + ",";

		for(var j = 3; j<rows.length-1; j++)
		{
			var option = rows[j].getElementsByTagName("td")[0].getElementsByTagName("input")[0].value;
			var price = rows[j].getElementsByTagName("td")[1].getElementsByTagName("input")[0].value;

			if(!option || !price)
			{
				alert("You have an undefined option or price in item set "+i+", row "+ (j-2));
				return false;
			}
			encodedString+= option+","+price+",";
		}
	}

	//Truncate the last comma if you just add commas to the end of all the options and prices!

	encodedString = encodedString.substring(0,encodedString.length - 1);
	alert(encodedString);
	itemSets[0].getElementsByTagName("tr")[5].getElementsByTagName("td")[1].getElementsByTagName("input")[0].value = encodedString;
	return true;
}


function addOptionSet(optionFormID)
{ //This function will add another set of options when a button is clicked!
	alert("addOptionSet called with " + optionFormID);
}

function addOption(optionSetID)
{ //This function will add another option field when a button is clicked!
	alert("addOption called with " + optionSetID);
}

function removeOption(option)
{ //This function will add another option field when a button is clicked!
	var row = option.parentNode.parentNode;
	row.parentNode.removeChild(row);
}