function logo_click(logo)
{	
	var count = 0;
	var timer = setInterval(function() 
	{
		count += 8;		
		logo.style.marginLeft = count + 'px';
		
		if (count/8 >= 75){
			clearInterval(timer);
			var new_timer = setInterval(function() 
			{
				count -= 8;
				logo.style.marginLeft = count + 'px';
				
				if (count/8 <= 0)
				clearInterval(new_timer);
			
			}, 20);
			//logo.style.marginLeft = 0 + 'px';
		}		

	}, 20);	
}
	
var counter = 0;

function timer()
{
	counter++;
	document.getElementById("count").innerHTML = counter;
	setTimeout("timer()", 1000);
	if (counter == 3)
	window.location = "index.php"
}

function valid (form)
{
	var fail = false;
	var surname = form.surname.value;
	var name = form.name.value;
	var patronymic = form.patronymic.value;
	var error_list = "";
	
	var proverka = /[a-z]{1,15}/i;
	
	if(proverka.test(surname) == false)
	{
		fail = true;
		error_list += "Введите фамилию правильно";
	}
	if(proverka.test(name) == false)
	{
		fail = true;
		error_list += "\nВведите имя правильно";
	}
	if(proverka.test(patronymic) == false)
	{
		fail = true;
		error_list += "\nВведите отчество правильно";
	}
	
	if(fail)
	{
		alert(error_list)
	}
	else
	{
		alert("ЧЁТКО");
		window.location = "index.php";
	}	
}



/*******Форма с JQuery***********/
function jqueryValid(jqueryForm)
{
	var fail = false;
	var surname = $("#input_surname").val();
	var name = $("#input_name").val();
	var patronymic = $("#input_patronymic").val();
	
	var proverka = /[a-z]{1,15}/i;
	
	if(proverka.test(surname) == false)
	{
		fail = true;
		$("#input_surname").parent().addClass("error");
		// $("#input_surname").css("border", "1px solid red");
		// $("#JQueryForm span:nth-of-type(2)").css("visibility", "visible");
	}
	if(proverka.test(name) == false)
	{
		fail = true;
		$("#input_name").parent().addClass("error");
		// $("#input_name").css("border", "1px solid red");
		// $("#JQueryForm span:nth-of-type(3)").css("visibility", "visible");
	}
	if(proverka.test(patronymic) == false)
	{
		fail = true;
		$("#input_patronymic").parent().addClass("error");
		// $("#input_patronymic").css("border","1px solid red");
		// $("#JQueryForm span:nth-of-type(4)").css("visibility", "visible");
	}
	
	if(fail)
	{
	}
	else
	{
		alert("ЧЁТКО");
		window.location = "index.php";
	}	
}


// function inputClick(input)
// {
// 	$(input).css("border", "1px solid black");
// }

function surnameClick(surname)
{
	$("#input_surname").parent().removeClass("error");
	// $(surname).css("border", "1px solid black");
	// $("#JQueryForm span:nth-of-type(2)").css("visibility","hidden");
}

function nameClick(name)
{
	$("#input_name").parent().removeClass("error");
	// $(name).css("border", "1px solid black");
	// $("#JQueryForm span:nth-of-type(3)").css("visibility","hidden");
}

function patronymicClick(patronymic)
{
	$("#input_patronymic").parent().removeClass("error");
	// $(patronymic).css("border", "1px solid black");
	// $("#JQueryForm span:nth-of-type(4)").css("visibility","hidden");
}




/*******Установка чекбоксов***********/
function btn_on()//установка чекбоксов (лаба 2)
{
    $('#ticks input:checkbox').prop('checked', true);
}
        
function btn_off()//снятие чекбоксов (лаба 2)
{
    $('#ticks input:checkbox').prop('checked', false);
}

function inverse()//инверссия чекбоксов (лаба 2)
{
    $('#ticks input:checkbox').click();
}