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
	//alert(encodedString);
	itemSets[0].getElementsByTagName("tr")[5].getElementsByTagName("td")[1].getElementsByTagName("input")[0].value = encodedString;
	return true;
}


function addOptionSet(buttonPressed)
{ //This function will add another set of options when a button is clicked!

	var div = buttonPressed.parentNode;

	var table = document.createElement("table");

	var tr1 = document.createElement("tr");
	var tr2 = document.createElement("tr");
	var tr3 = document.createElement("tr");
	var tr4 = document.createElement("tr");

	var name = document.createElement("th");
	var text1 = document.createTextNode("Item Set Name:");
	name.appendChild(text1);
	name.setAttribute("class", "align_right");

	var nameData = document.createElement("th");
	var nameDataInput = document.createElement("input");
	nameDataInput.setAttribute("type", "text");
	nameDataInput.setAttribute("placeholder", "Item Set Name");
	nameDataInput.setAttribute("name", "optionSetName");
	nameData.appendChild(nameDataInput);

	var buttonData = document.createElement("td");
	var rmSet = document.createElement("button");
	rmSet.setAttribute("onclick", "removeOptionSet(this)");
	var buttonText = document.createTextNode("Remove This Option Set");
	rmSet.appendChild(buttonText);
	buttonData.appendChild(rmSet);

	tr1.appendChild(name);
	tr1.appendChild(nameData);
	tr1.appendChild(buttonData);
	
	var rangeData = document.createElement("td");

	var text2 = document.createTextNode("Pick between ");
	var minInput = document.createElement("input");
	minInput.setAttribute("type", "text;");
	minInput.setAttribute("placeholder", "min");
	minInput.setAttribute("name", "min");
	minInput.setAttribute("size", "2");

	var text3 = document.createTextNode(" and ");
	var maxInput = document.createElement("input");
	maxInput.setAttribute("type", "text;");
	maxInput.setAttribute("placeholder", "max");
	maxInput.setAttribute("name", "max");
	maxInput.setAttribute("size", "2");

	var text4 = document.createTextNode(" options.");

	rangeData.appendChild(text2);
	rangeData.appendChild(minInput);
	rangeData.appendChild(text3);
	rangeData.appendChild(maxInput);
	rangeData.appendChild(text4);
	rangeData.setAttribute("colspan", "2");
	tr2.appendChild(rangeData);

//<td colspan="2">Pick between <input type="text" placeholder="min" name="min" size = "2" value="1"/> and <input type="text" name="min" placeholder="max" size = "2" value="1"/> options. </td>
	
	var thName = document.createElement("th");
	var thAddPrice = document.createElement("th");

	var text5 = document.createTextNode("Name");
	thName.appendChild(text5);

	var text6 = document.createTextNode("Additional Price");
	thAddPrice.appendChild(text6);

	tr3.appendChild(thName);
	tr3.appendChild(thAddPrice);

	var addOptionButtonData = document.createElement("td");
	tr4.appendChild(addOptionButtonData);

	var optionButton = document.createElement("button");
	addOptionButtonData.appendChild(optionButton);
	optionButton.setAttribute("onclick", "addOption(this)");
	var text7 = document.createTextNode("Add Option");
	optionButton.appendChild(text7);

	table.appendChild(tr1);
	table.appendChild(tr2);
	table.appendChild(tr3);
	table.appendChild(tr4);

	div.appendChild(table);

	//alert("addOptionSet called with " + optionFormID);
}

function addOption(buttonPressed)
{ //This function will add another option field when a button is clicked!

/*
	<td><input placeholder="Option Name" type="text" name="" value="Everything" /></td>
	<td><input placeholder="Option Additional Price" type="text" name="" value="0" /></td>
	<td><button onclick= "removeOption(this)">Remove Option </button </td>
*/

	var addOptionButton = document.createElement("button");

	var td1 = document.createElement("td");
	var td2 = document.createElement("td");
	var td3 = document.createElement("td");
	var buttonText = document.createTextNode("Remove Option");
	addOptionButton.appendChild(buttonText);
	addOptionButton.setAttribute("onclick", "removeOption(this)");
	td3.appendChild(addOptionButton);

	var price = document.createElement("input");
	price.setAttribute("placeholder", "Option Additional Price");
	price.setAttribute("type", "text");
	price.setAttribute("name", "");
	td2.appendChild(price);

	var option = document.createElement("input");
	option.setAttribute("placeholder", "Option Name");
	option.setAttribute("type", "text");
	option.setAttribute("name", "");
	td1.appendChild(option);

	var tr = document.createElement("tr");
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);

	buttonPressed.parentNode.parentNode.parentNode.appendChild(tr);
	var buttonrow = buttonPressed.parentNode.parentNode;
	buttonrow.parentNode.appendChild(buttonrow);
}

function removeOption(option)
{ //This function will remove the Option when clicked!
	var row = option.parentNode.parentNode;
	row.parentNode.removeChild(row);
}

function removeOptionSet(button)
{ //This function will remove the OptionSet table
	button.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(button.parentNode.parentNode.parentNode.parentNode);
}