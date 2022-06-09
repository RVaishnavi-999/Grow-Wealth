var pl = function(){ 
	/*takes entered price*/
	/*return (document.getElementById("price"));*/
};

function cal_p_l() 
{

    /*takes type of trade enetered using dropdown*/
	var e = document.getElementById("type_of_trade");
	var text=e.options[e.selectedIndex].text;
	if (text == '1 Month')
	{
		/*price for 1 month will get ____%*/
		price = document.getElementById("price").value*(0.05);
	}
	else if (text == "3 Months") 
	{
		price = document.getElementById("price").value*(0.06);
	}
	else if (text == "6 Months") 
	{
		price = document.getElementById("price").value*(0.09);
	}
	else if (text == "12 Months") 
	{
		price = document.getElementById("price").value*(0.15);
	}
	else
	{
		price = document.getElementById("price").value*(0.50);
	}
	
	document.getElementById("calculate_profit_loss").innerHTML = price;
}  
/*********************************************************************/


