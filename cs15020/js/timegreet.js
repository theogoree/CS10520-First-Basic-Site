
function validate()
		
		{
		
			var userName = document.getElementById("firstName").value;
			var today = new Date ();
			var hrs = today.getHours();
		
				if (hrs <= 12)
				alert("Good Morning "+ userName+' :)');

				else if (hrs <= 17)
				alert("Good Afternoon "+ userName+' :)'); 
		
				else 
				alert("Good Evening "+ userName+' :)'); document.writeln("<br />");
		
		}