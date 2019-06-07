function add_list()
{
	let message = document.getElementById("text").value;
	if(message == "")
	{
		alert("Ошибка ты чето не ввел");
	}
	else
	{
		message = 'message=' + message;
		url = 'add.php';
		ajaxPost(url, message).then((resolve) =>
			{
				let mes = document.createElement('li');
				mes.innerHTML = resolve;
				mes.id = 'tt';
				list.appendChild(mes);
			}).catch((reject) =>
			{
				document.getElementById("main").innerHTML = reject;
			});
	}
}

function ajaxPost(url, params)
{
	return new Promise((resolve,reject) =>
	{
		var request = new XMLHttpRequest;
		request.open('POST', url, true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		request.addEventListener("load",() =>
		{
			if(request.status < 400)
			{
				resolve(request.responseText);
			}
			else
			{
				reject('Ошибка получения данных :(');
			}
		});
		request.send(params);
	});
}
function del()
{
	var b = document.getElementById('tt').innerHTML = '321321';
	console.log(b);
}