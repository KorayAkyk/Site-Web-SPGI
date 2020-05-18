var request = new XMLHttpRequest();

request.send()

request.onreadystatechange = function () {

    console.log(this.readyState);
    if(this.readyState==4){
        console.log(this.responseText)
    }

};
request.open('GET', 'menu3.php', true)
request.send();
request = null;























