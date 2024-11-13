let xmlHttp = new XMLHttpRequest(); 

function loadHandler() {
    if (xmlHttp) {
        try {
            let firstNumber = document.getElementById("firstNumber").value;
            let secondNumber = document.getElementById("secondNumber").value;
            let params = "firstNumber=" + firstNumber + "&secondNumber=" + secondNumber;
            xmlHttp.open("GET", "http://localhost/AJAX/GET-request.php?" + params, true);
            xmlHttp.onload = handleLoad;
            xmlHttp.send();
        }
        catch (e) {
            console.log("Нет подключения к серверу:\n" + e.toString());
        }
    }
}


function handleLoad() {

        if (xmlHttp.status == 200) {
            try {
                // responseXML: возвращает ответ от сервера в формате xml
                let xmlResponse = xmlHttp.responseXML;
                if (!xmlResponse || !xmlResponse.documentElement)
                    throw ("Неверная XML-структура:\n" + xmlHttp.responseText);

                let xmlRoot = xmlResponse.documentElement;
                let data = xmlRoot.firstChild.data;
                document.getElementById("myDivElement").innerHTML = "Сервер ответил: " + data;
            }
            catch (e) {
                document.getElementById("myDivElement").innerHTML = "Ошибка чтения ответа: " + e.toString();
            }
        }
        else {
            document.getElementById("myDivElement").innerHTML = "Проблемы с получением данных: " + xmlHttp.statusText;
        }
}