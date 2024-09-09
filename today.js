function login(){
    var data = {
        "username":"emmanuel",
        "password": "123456"
    }

    fetch("/", {
        method : "POST",
        body : JSON.stringify(data)
    })
}