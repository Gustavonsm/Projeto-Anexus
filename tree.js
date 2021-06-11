const btn = document.querySelector("#send");

btn.addEventListener("click", function(e)
{
	e.preventDefault();

	const valor1 = document.querySelector("#valor1");
	const user1 = valor1.value;

	const valor2 = document.querySelector("#valor2");
	const user2 = valor2.value;

	const valor3 = document.querySelector("#valor3");
	const user3 = valor3.value;

	let arvore = 
	{
		left:
		{
			value:user2
		},
		right:{
				
			value:user3
		},
		value: user1
	}

	function preOrder(tree)
	{
		console.log(tree.value)
		tree.left && preOrder(tree.left)
		tree.right && preOrder(tree.right)

	}

	preOrder(arvore);
	document.getElementById("v1").innerHTML  = user1;
	document.getElementById("v2").innerHTML  = user2;
	document.getElementById("v3").innerHTML  = user3;



});




