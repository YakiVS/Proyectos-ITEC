
/* Llamando a la función getData() */
getData()
document.getElementById("campo").addEventListener("keyup", getData)

/* Realizamos la peticion AJAX */

function getData() {
    let input = document.getElementById("campo").value
    let content = document.getElementById("content")

    if (input.length > 0) {

        let url = "includes/load.php"
        let formaData = new FormData()
        formaData.append('campo', input)

        fetch(url, {
            method: "POST",
            body: formaData
        }).then((result) => { return result.text(); })
        
          .then((texto) => { content.innerHTML = texto; })
          
          .catch(err => console.log(err))
    }else{
        ConstantSourceNode.style='none'
    }
}

/*function getData() {
    let input = document.getElementById("campo").value
    let content = document.getElementById("content")
    let url = "load.php"
    let formaData = new FormData()
    formaData.append('campo', input)

    fetch(url, {
        method: "POST",
        body: formaData
    }).then(response => response.json())
        .then(data => {
            content.innerHTML = data
        }).catch(err => console.log(err))
}*/



